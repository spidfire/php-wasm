#!/bin/bash

cargo build --target wasm32-wasi
/root/.wasmtime/bin/wasmtime target/wasm32-wasi/debug/wasmtime_hello.wasm --dir .