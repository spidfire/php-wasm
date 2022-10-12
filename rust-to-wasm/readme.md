cargo new hello-world

cargo install cargo-wasi

cargo wasi run




docker run -v "$PWD":/usr/src/myapp -w /usr/src/myapp --build . -it