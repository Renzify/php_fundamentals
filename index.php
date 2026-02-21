<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $bool = true;
    $a = 1;
    $b = 4;

    // if elseif else
    if ($a < $b && !$bool){
        echo "Condition 1 is true";
    }
    else if ($a > $b && $bool){
        echo "Condition 2 is true";
    } 
    else {
        echo "Else";
    }

    // switch case
    switch ($a){
        case 1:
            echo "1 case";
            break;
        
        case 67:
            echo "67 case";
            break;
        
        default:
            echo "default";
    }

    // match
    $result = match ($a) {
            1, 3, 5 => "Variable a is odd",
            2 => "Variable a is 2",
            default => "No match",
    };

    echo $result;
    ?>

</body>
</html>