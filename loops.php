<?php

    $supposeThat = 10;

    while ($supposeThat < 101) {
        echo $supposeThat . "<br>";
        if ($supposeThat === 19) {
            break;
        }
        $supposeThat++;
    }

    echo "----------------------------------------------------------------" . "<br>";

    do {
        echo $supposeThat . "<br>";
        $supposeThat+=2.3;
        
    } while ($supposeThat < 40); 


    echo "=================================" . "<br>";

    for ($supposeThat = 0; $supposeThat <  10; $supposeThat++) { 
        echo "It is the - " . $supposeThat . "<br>";
    }

    echo "=================================" . "<br>";

    $nums = ["1","2","3","4","5"];
    foreach ($nums as $serialNo => $imagineNo) {
        echo " Let's see : " . $serialNo . "||" . $imagineNo . "<br>";
    };

    echo '-------------------------' . "<br>";

    $learner = [
        'Fist Name' => "Din",
        "Middle Name" => "Islam",
        "Last Name" => "Showrov",
        "Age" => 23,
        "Job" => ["Web Designer", "Web Developer", "Programmer"]
    ];
    foreach ($learner as $title => $description) {
        // echo $title . ": " . implode("," . $description) . "<br>";
        if (is_array($description)) {
            echo $title . ":" . implode("," , $description) . "<br>";
        } else {
            echo $title . ":" . $description . "<br>";
        }
    }





?>