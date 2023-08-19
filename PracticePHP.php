<?php
  echo "Hello World";
  $userName = "Umair Khizar";
  $info = "Hi, there me Umair Khizar <br> I have done my recent graduation in Bs COmputer Science"; 

//   echo strlen($userName);

  echo "<br>Total Word Count is " . str_word_count($info);
  echo "<br>Reverse String is " . strrev($info);
?>