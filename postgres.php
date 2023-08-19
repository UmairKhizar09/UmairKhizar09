<?php
  echo "Hello Wordl";
  $conn = pg_connect("host=localhost port=5432 dbname=testPF user=postgres password=Umair@1050");
  if($conn)
  {
    echo "connected";
  }
 else
 {
   echo "Error";
 }
?>