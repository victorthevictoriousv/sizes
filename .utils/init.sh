#!/usr/bin/env bash
bash ./.utils/message.sh headline "Det här skriptet hjälper dig igång med utvecklingsmiljön"
if [ -d "bedrock" ]; then
    # bedrock directory exists; asking user for permission to delete
    bash ./.utils/message.sh warning "Varning!"
    echo "Det verkar som att du redan har en katalog som heter bedrock."
    echo "Det här skriptet är bara till för att hjälpa dig komme igång."
    echo "Fortsätter du innebär det att katalogen bedrock försvinner och data kan gå förlorad."
    echo ""
    read -e -p "Vill du ta bort katalogen bedrock och börja om från början? [N/y]: " initOK
    [ -z "${initOK}" ] && initOK="N"
else
    initOK="Yes"
fi
if [ "$initOK" = "Yes" ] || [ "$initOK" = "yes" ] || [ "$initOK" = "y" ] || [ "$initOK" = "y" ]; then
    rm -rf bedrock
    echo ""
    read -e -p "Tryck enter för att påbörja installationen"
    bash ./.utils/message.sh info "Skapar en Bedrockinstans med hjälp av Composer."
    bash ./.utils/message.sh info "Det här kan ta en stund..."
    make composer create-project roots/bedrock .
    bash ./.utils/message.sh info "Installerar tema..."
    git clone git@github.com:Wilsoncreative/wlsn-docker-theme.git ./bedrock/web/app/themes/$PROJECT_NAME
    rm -rf ./bedrock/web/app/themes/$PROJECT_NAME/.git
    rm -rf ./bedrock/web/app/themes/$PROJECT_NAME/.gitignore
    echo "/*!" >> ./bedrock/web/app/themes/$PROJECT_NAME/style.css
    echo "* Theme name: $PROJECT_NAME" >> ./bedrock/web/app/themes/$PROJECT_NAME/style.css
    echo "*/" >> ./bedrock/web/app/themes/$PROJECT_NAME/style.css
    rm -rf ./.git
    make composer require wpackagist-plugin/wordpress-seo
    cd bedrock/
    composer config repo.composer.wilsonnetwork.se composer https://composer.wilsonnetwork.se
    composer require acf/advanced-custom-fields-pro
    composer require rocketgenius/gravityforms
    composer require wpr/wp-rocket
    cd ..
    make composer install
    make dev
fi
