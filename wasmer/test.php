<?php 
    echo "Hello, world! " .  date('d-M-Y H:i:s');

    for ($i = 1; $i <= 30; $i++)
    {
        if ( $i%3 == 0 && $i%5 == 0 )
        {
            echo $i . " FizzBuzz"."\n" ;
        }
        else if ( $i%3 == 0 ) 
        {
            echo $i. " Fizz"."\n";
        }
            else if ( $i%5 == 0 ) 
        {
            echo $i. " Buzz"."\n";
        }
            else
        {
            echo $i."\n";
        }
    }


    echo __FILE__;