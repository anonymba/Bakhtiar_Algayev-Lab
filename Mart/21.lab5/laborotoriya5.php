<?php

$num1 = 0;
$num2 = 0;
$operator = '';

do {
    echo "Kalkulyator\n";
    echo "1. Toplama\n";
    echo "2. Cixma\n";
    echo "3. Vurma\n";
    echo "4. Bolme\n";
    echo "5. EXIT\n";
    echo "Emeliyyati sec (1-5): ";
    $choice = readline();

    if($choice == 5) {
        exit;
    }

    echo "1-ci Reqemi daxil et: ";
    $num1 = readline();
    echo "2-ci Reqemi daxil et: ";
    $num2 = readline();

    switch ($choice) {
        case 1:
            $operator = "+";
            $result = $num1 + $num2;
            break;
        case 2:
            $operator = "-";
            $result = $num1 - $num2;
            break;
        case 3:
            $operator = "*";
            $result = $num1 * $num2;
            break;
        case 4:
            $operator = "/";
            $result = $num1 / $num2;
            break;
        default:
            echo "Sehv sechim\n";
            continue;
    }

    echo "emeliyyat secildi: " . $num1 . " " . $operator . " " . $num2 . "\n";
    echo "Netice: " . $result . "\n\n";

} while ($choice != 5);

?>