#!/usr/bin/env bash
if [ -f "./backup/mysql.sql.bz2" ]; then
    bash ./.utils/message.sh info "Återställer ./backup/mysql.sql.bz2"
    bzcat "backup/mysql.sql.bz2" | docker exec -i $(docker-compose ps -q db) mysql -u root -ppassword wp
    echo "FLUSH PRIVILEGES;" | docker exec -i $(docker-compose ps -q db) mysql -u root -ppassword
    bash ./.utils/message.sh success "Återställning lyckades!"
else
    bash ./.utils/message.sh info "Ingen backup hittades: backup/mysql.sql.bz2"
fi
