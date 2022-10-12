
curl https://wasmtime.dev/install.sh -sSf | bash

// Is really slow the first time (it is converting the code to run on your system)
wapm run  --dir=. php test.php