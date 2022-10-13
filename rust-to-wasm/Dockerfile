FROM rust:1.64-buster

RUN rustup target add wasm32-wasi
RUN apt install curl
RUN curl https://wasmtime.dev/install.sh -sSf | bash

ADD build.sh /build.sh
RUN chmod +x /build.sh
WORKDIR /code


CMD ["/bin/bash", "-c",  "/build.sh"]