FROM debian:10-slim
RUN apt-get update && apt-get install -y \
        ruby-full \
        build-essential dh-autoreconf \
        nodejs \
    && gem install \
        compass \
        autoprefixer-rails
VOLUME /src/compass
WORKDIR /src/compass