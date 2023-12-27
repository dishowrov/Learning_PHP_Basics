<?php 

    class Person {
        public $firstname;
        public $surname;
        private $nickname;
    }

    $man = new Person();

    echo '<pre>';
    var_dump($man);
    echo '</pre>';  

?>