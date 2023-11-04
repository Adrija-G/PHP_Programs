<?php
    $decimalNumber = readline("Enter a decimal number: ");
    $binaryNumber = decbin($decimalNumber);
    $hexadecimalNumber = dechex($decimalNumber);
    $octalNumber = decoct($decimalNumber);
    
    echo "Decimal: $decimalNumber\n";
    echo "Binary: $binaryNumber\n";
    echo "Hexadecimal: $hexadecimalNumber\n";
    echo "Octal: $octalNumber\n";
?>
