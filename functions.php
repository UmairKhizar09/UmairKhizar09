<?php
  class Student 
  {
      public $userName;
      public $email;
    function __construct($n,$e)
    {
       $this->email = $e;
       $this->userName = $n;
    }

    function showStudentInfo()
    {
          echo "User Name is " .$this->email . "<br>";
          echo "User Email Address is " .$this->userName ;
     }
  }
  
  $firstUser = new Student("Ali Hassan","Ghumman88@gmail.com");
  $firstUser->showStudentInfo();

?>