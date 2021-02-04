#!/usr/bin/env bash
# CHECK WORDPRESS
if $(docker-compose run -T test curl -L http://$PROJECT_NAME.docker/ | grep "WordPress" | grep -q "Installation"); then
    bash ./.utils/message.sh success "Test för WordPress OK!";
else
    bash ./.utils/message.sh warning "Test misslyckades!";
    bash ./.utils/message.sh info "Väntade sig hitta WordPress installationssida på http://$PROJECT_NAME.docker/";
    exit 1;
fi

# CHECK PHPMYADMIN
if $(docker-compose run -T test curl -L http://phpmyadmin.$PROJECT_NAME.docker/ | grep -q "phpMyAdmin"); then
    bash ./.utils/message.sh success "Test för phpMyAdmin OK!";
else
    bash ./.utils/message.sh warning "Test misslyckades!";
    bash ./.utils/message.sh info "Väntade sig hitta phpMyAdmin instans på http://$PROJECT_NAME.bedrock.docker/";
    exit 1;
fi

# CHECK MAILHOG
if $(docker-compose run -T test curl -L http://mail.$PROJECT_NAME.docker:8025/ | grep -q "MailHog"); then
    bash ./.utils/message.sh success "Test för MailHog OK!";
else
    bash ./.utils/message.sh warning "Test misslyckades!";
    bash ./.utils/message.sh info "Väntade sig hitta MailHog instans på http://mail.$PROJECT_NAME.docker:8025/";
    exit 1;
fi
