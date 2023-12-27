<?php 

    function normal() {
        echo "It is a simple example" . "<br>";
    }; 
    normal();
    normal();
    

    function abnormal($patientName) { 
        echo "Our Patient Name is " . $patientName;
    }
    abnormal("mr.name");

    echo "<br>";

    function mostAbnormal($patientName) {
        echo "His name is $patientName" . "<br>";
    }
    mostAbnormal("Mondu.");

    function mostNormal($patientName) {
        return "His name is $patientName";
    }
    echo "--";

    echo mostNormal("Gandu.") . "<br>";

    echo "--";
    echo "<br>";

    function sumIt($p, $P) {
        echo "$p is under 10" . "<br>";
        echo "$P is under 100" . "<br>";
    }
    sumIt(2, 20);

    echo "<br>";

    function summetionIt($p, $P) {
        return "$p is under 10 and $P is over 10" . "<br>";
    }
    echo summetionIt(2, 20);

    echo "<br>";

    for ($s = 0; $s < 9; $s++) {
        echo "Sr. No. is $s <br>";
    }

    echo "..................................... <br>";

    // function sum(...$nums) {
    //     $sum = 0;
    //     foreach ($nums as $add) {
    //         $sum = $sum + $add;
    //     }

    //     // echo "$sum";
    //     return $sum;
    // }
    // echo sum(1, 2, 3, 4, 5, 6);

    function sum(...$nums) {
        return array_reduce($nums, fn($first, $second) => $first + $second);
    }
    echo sum(1, 2, 3, 4, 5, 6);


?>