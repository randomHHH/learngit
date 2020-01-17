<?php

class talker{



    private $data = 'Hi';



    public function & get(){

        return $this->data;

    }

   

    public function out(){

        echo $this->data;

    }   



}


echo 12312312312312;
$aa = new talker();

$d = &$aa->get();



$aa->out();

$d = 'How';

$aa->out();

$d = 'Are';

$aa->out();

$d = 'You';

$aa->out();

