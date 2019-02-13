<?php

// declare
$names = array('Vuong', 'Minh', 'Tu', 'Dung');
$count = 0;

phpinfo();

foreach ($names as $name){
    $count++;
    $greeting_string = say_hello($name);
    echo $greeting_string;
}

echo "Said hello to $count people";

function say_hello($name){
    return "hello, $name.\n";

}

