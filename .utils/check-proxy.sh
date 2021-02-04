#!/usr/bin/env bash
port80=true
port443=true
exec 6<>/dev/tcp/127.0.0.1/80 || port80=false
exec 6>&- # close output connection
exec 6<&- # close input connection
exec 6<>/dev/tcp/127.0.0.1/443 || port443=false
exec 6>&- # close output connection
exec 6<&- # close input connection
if [ "$port80" = false ]; then
    if [ "$port443" = false ]; then
        bash ./.utils/start-proxy.sh
    else
        bash ./.utils/message.sh info "Port 443 är upptagen för tillfället"
        bash ./.utils/message.sh info "Antar att en proxy redan körs"
    fi
else
    bash ./.utils/message.sh info "Port 80 är upptagen för tillfället"
    bash ./.utils/message.sh info "Antar att en proxy redan körs"
fi
