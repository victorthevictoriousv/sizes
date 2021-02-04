#!/usr/bin/env bash
if [ -f "./backup/mysql.sql.bz2" ]; then
    bash ./.utils/message.sh warning "Attention!"
    echo "Existerande backup hittad: backup/mysql.sql.bz2"
    echo ""
    read -e -p "Vill du skriva över den här filen? [N/y]: " backupOK
    [ -z "${backupOK}" ] && backupOK="N"
else
    backupOK="Yes"
fi
if [ "$backupOK" = "Yes" ] || [ "$backupOK" = "yes" ] || [ "$backupOK" = "y" ] || [ "$backupOK" = "y" ]; then
    bash ./.utils/message.sh info "Skapar en backup av din databas i backup/mysql.sql.bz2"
    mkdir -p backup
    docker exec -i $(docker-compose ps -q db) mysqldump -u root -ppassword --opt --single-transaction --events --databases wp --routines --comments | bzip2 > "backup/mysql.sql.bz2"
    bash ./.utils/message.sh success "Backup gjord!"
fi
