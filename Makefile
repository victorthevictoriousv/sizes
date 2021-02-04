ARGS = $(filter-out $@,$(MAKECMDGOALS))
MAKEFLAGS += --silent

#############################
# ENVIRONMENT
#############################

export PROJECT_NAME=sizes
export COMPOSE_PROJECT_NAME=${PROJECT_NAME}


#############################
# INITIALIZATION
#############################

init:
	bash ./.utils/init.sh


#############################
# CONTAINER ACCESS
#############################

up:
	bash ./.utils/header.sh
	echo ""
	[ -d "bedrock" ] || make init
	bash ./.utils/message.sh info "Startar ditt projekt..."
	make check-proxy
	docker-compose up -d
	make urls

stop:
	bash ./.utils/message.sh info "Stoppar ditt projekt..."
	docker-compose stop

destroy: stop
	bash ./.utils/message.sh info "Tar bort alla containers..."
	docker-compose down --rmi all --remove-orphans

upgrade:
	bash ./.utils/message.sh info "Uppgraderar ditt projekt..."
	docker-compose pull
	docker-compose build --pull
	make composer update
	make up

update:
	bash ./.utils/message.sh info "Klonar senaste produktionsmiljö till temporär katalog..."
	bash ./.utils/update.sh
	bash ./.utils/message.sh success "Uppdatering klar. OBS! Titta mellan strecken ovan om det finns något nytt att ersätta i din .gitignore, den har vi inte skrivit över."

restart: stop up

rebuild: destroy upgrade


#############################
# UTILS
#############################

dev:
	bash ./.utils/dev.sh

prod:
	bash ./.utils/prod.sh

serve:
	bash ./.utils/watch.sh

npm:
	bash ./.utils/npm.sh $(ARGS)

mysql-backup:
	bash ./.utils/mysql-backup.sh

mysql-restore:
	bash ./.utils/mysql-restore.sh

composer:
	mkdir -p bedrock
	sleep 1
	bash ./.utils/composer.sh $(ARGS)

ci-test:
	bash ./.utils/ci/test.sh


#############################
# CONTAINER ACCESS
#############################

ssh:
	docker exec -it $$(docker-compose ps -q $(ARGS)) sh


#############################
# INFORMATION
#############################

urls:
	bash ./.utils/message.sh headline "Du kan nu komma åt ditt projekt på följande URLer:"
	bash ./.utils/message.sh link "Backend:     http://${PROJECT_NAME}.docker/wp/wp-admin/"
	bash ./.utils/message.sh link "Frontend:    http://${PROJECT_NAME}.docker/"
	bash ./.utils/message.sh link "Mailhog:     http://mail.${PROJECT_NAME}.docker/"
	bash ./.utils/message.sh link "PHPMyAdmin:  http://phpmyadmin.${PROJECT_NAME}.docker/"
	echo ""

state:
	docker-compose ps

logs:
	docker-compose logs -f --tail=50 $(ARGS)

check-proxy:
	bash ./.utils/check-proxy.sh

#############################
# Argument fix workaround
#############################
%:
	@:
