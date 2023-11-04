<?php
  $octalNumber = readline("Enter an octal number: ");
  
  $decimalNumber = octdec($octalNumber);
  $binaryNumber = decbin($decimalNumber);
  $hexadecimalNumber = dechex($decimalNumber);
  
  echo "Decimal: $decimalNumber\n";
  echo "Binary: $binaryNumber\n";
  echo "Hexadecimal: $hexadecimalNumber\n";
?>
