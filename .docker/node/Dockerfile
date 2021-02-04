FROM node

# Grab our version variable from the yml file
ARG SITE_VERSION

# Install gulp globally
RUN npm install -g gulp

# Install dependencies
COPY ./gulp-build.sh /
RUN chmod 777 /gulp-build.sh
ENTRYPOINT ["/gulp-build.sh"]
CMD ["run"]