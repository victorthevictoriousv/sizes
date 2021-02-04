#!/usr/bin/env bash
if [ -x "$(command -v composer)" ]; then
    bash ./.utils/message.sh info "Använder lokal Composer"
    composer "$@" --working-dir=bedrock --ignore-platform-reqs
else
    bash ./.utils/message.sh info "Använder Composercontainer - det här kan vara långsamt..."
    bash ./.utils/message.sh info "Överväg att installera Composer lokalt istället: https://getcomposer.org/download/"
    docker-compose run composer composer "$@"
fi
