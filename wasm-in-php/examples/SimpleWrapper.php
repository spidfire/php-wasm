<?php

class WasmWrapper {




}


class WasmWrapperItem {

    public static function fromWatFile(string $watFile, WasmWrapper $wrapper){
        return static::fromWat(
            file_get_contents($watFile),
            $wrapper
        );
        
    }
    public static function fromWat(string $watCode, WasmWrapper $wrapper){
        $wasm = wat2wasm($wat);
        
        return new self($wasm, $wrapper);
    }
    public static function fromWasmFile(string $wasmFile, WasmWrapper $wrapper){
        return new self(
            file_get_contents($wasmFile),
            $wrapper
        );
    }
    public static function fromWasm(string $wasm, WasmWrapper $wrapper){
        return new self($wasm, $wrapper);
    }

    private function __constructor(string $wasmString, WasmWrapper $wrapper){
        $this->wasm = $wasmString;
        $this->wrapper = $wrapper;
    }


    public function run(WasmArguments $argumets, callback $callback){

        $printType = wasm_functype_new(
            new Wasm\Vec\ValType([wasm_valtype_new(WASM_I32)]),
            new Wasm\Vec\ValType([wasm_valtype_new(WASM_I32)])
        );

        
$print = wasm_func_new($store, $printType, 'print_callback');
wasm_functype_delete($printType);


wasm_func_delete($print);

$externs = new Wasm\Vec\Extern([wasm_func_as_extern($print), wasm_func_as_extern($closure)]);
$instance = wasm_instance_new($store, $module, $externs);

wasm_func_delete($print);


$exports = wasm_instance_exports($instance);
$run = wasm_extern_as_func($exports[0]);

wasm_module_delete($module);
wasm_instance_delete($instance);
    }




}

class WasmArguments{


}