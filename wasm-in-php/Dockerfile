FROM debian:buster

RUN apt update && apt install -y curl git lsb-release ca-certificates apt-transport-https software-properties-common gnupg2 wget
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/sury-php.list
RUN wget -O apt.gpg https://packages.sury.org/php/apt.gpg &&  apt-key add apt.gpg
RUN apt update
RUN apt install -y php8.0 php8.0-dev



RUN git clone https://github.com/wasmerio/wasmer-php


RUN cd wasmer-php/ext && phpize && ./configure --enable-wasm && make && make install

RUN echo "extension=wasm" >> /etc/php/8.0/cli/php.ini 

WORKDIR /examples

