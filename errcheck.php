<?php
$nameErr = $emailErr = $subjectErr = "";
$name = $email = $subject ="";


   if (empty($_POST["name"])) {
 
	 echo "name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }
     

   if (empty($_POST["subject"])) {
     $subjectErr = "Subject required";
   } else {
     $subject = test_input($_POST["subject"]);
   }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>