<?php
    $input = readline("Enter a binary number: ");
    $decimalNumber = bindec($input);
    $hexadecimalNumber = dechex($decimalNumber);
    $octalNumber = decoct($decimalNumber);
    
    echo "Decimal: $decimalNumber\n";
    echo "Hexadecimal: $hexadecimalNumber\n";
    echo "Octal: $octalNumber\n";
?>
