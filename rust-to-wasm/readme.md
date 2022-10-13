cargo new hello-world

rustup target add wasm32-wasi

cargo build --target wasm32-wasi

/root/.wasmtime/bin/wasmtime target/wasm32-wasi/debug/wasmtime_hello.wasm




docker-compose run builder