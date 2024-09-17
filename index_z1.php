<?php 

$array = ['Овечкин','Батрудтинов','Сидоров','Джонсон','Кещян','Тухватуллин'];
echo count($array);
echo "<br>";

if(in_array('Сидоров', $array)){
    echo 'Сегодня Сидоров был на паре!';
}

$expelled = array_pop($array);