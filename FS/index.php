<?php 

    echo __DIR__ . "<br>";
    echo __FILE__ . "<br>";
    echo __LINE__ . "<br>";

    // mkdir('testing');

    // rename('testing', "test");

    // rmdir('test');

    echo '<br>';

    echo file_get_contents('.././header.php');
    file_put_contents('hack.md', "hack the system");

    $filesNfolders = scandir('../');
    var_dump($filesNfolders);

    echo "----------------------------------------------------------------";

    $usersJSON = file_get_contents("https://jsonplaceholder.typicode.com/users");

    echo $usersJSON;

    $users = json_decode($usersJSON, true);

    var_dump($users);

?>