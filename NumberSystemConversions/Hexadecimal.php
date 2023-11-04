<?php
  $hexadecimalNumber = readline("Enter a hexadecimal number: ");
  
  $decimalNumber = hexdec($hexadecimalNumber);
  $binaryNumber = decbin($decimalNumber);
  $octalNumber = decoct($decimalNumber);
  
  echo "Hexadecimal: $hexadecimalNumber\n";
  echo "Decimal: $decimalNumber\n";
  echo "Binary: $binaryNumber\n";
  echo "Octal: $octalNumber\n";
?>
