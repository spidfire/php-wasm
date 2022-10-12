import { PhpWeb as PHP } from 'php-wasm/PhpWeb';
(function() {
    const php  = new PHP;


    php.addEventListener('ready', () => {
        
        const input = document.querySelector('#input');
        const output = document.querySelector('#output');

        php.addEventListener('output', (event) => {
            output.innerHTML += event.detail;
        });


        document.querySelector('#run').addEventListener('click', () => {
            
        output.innerHTML = ''
            php.run(input.value).then(retVal => {
                console.log("result", retVal)
            });

        })

    });
})();
