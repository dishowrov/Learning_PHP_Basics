<?php

    $age = 12;
    $salary = "45k";
    $time = "45kta";

    if ($age === $salary) {
        echo "real age";
    } else if ($salary === $time) {
        echo "fake age";
    } else {
        echo "ignore it";
    }

    
    echo "<br>";

    echo $age >= 18 ? "yOUNG" : "ageness";

    $myAge = $age ?: "18+";
    var_dump($myAge);
    print_r($myAge);

    $mySalary = isset($salary) ? $time : "Din Islam Showrov";
    var_dump($mySalary);

    $myTime = $times ?? "real time";
    var_dump($myTime);

    $userRole = 'ad'; 
    switch ($userRole) {
        case 'admin': 
            
            echo "U r a admin";
            break;
        case "normal user":
            echo "U r a normal user";
            break;
        case "editor":
            echo "U r a editor";
            break;
        case "scammer":
            echo "How funny!" ;
            break;
        default: 
            echo "Kink yourself 🤣";
    }
 
?>
