<html>
<head>
<title>FORM</title>
<style>
.error {color: #FF0000;}
</style>
</head>

<body>

<?php
// define variables and set to empty values
$teamerr = $collegeerr = $adderr = $cityerr =$stateerr=$countryerr=$pcodeerr=$mfnameerr=$gendererr=$emailerr=$msnameerr=$ggendererr=$eemailerr ="";
$teamname = $college = $address = $city =$state=$country=$pincode=$mem1name=$mem1gen=$mem1email=$mem2name=$mem2gen=$mem2email=$username=$password= "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["teamname"])) {
     $teamerr = "Team name is required";
   } else {
     $team = test_input($_POST["teamname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$teamname)) {
       $teamerr = "Only letters and white space allowed"; 
     }
   }
   
if (empty($_POST["college"])) {
     $collegeerr = "College name is required";
   } else {
     $college = test_input($_POST["college"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$college)) {
       $collegeerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["address"])) {
     $adderr = "Address is required";
   } else {
     $address = test_input($_POST["address"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
       $adderr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["state"])) {
     $stateerr = " State is required";
   } else {
     $state = test_input($_POST["state"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$state)) {
       $stateerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["country"])) {
     $countryerr = " Country is required";
   } else {
     $country = test_input($_POST["country"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
       $countryerr = "Only letters and white space allowed"; 
     }
   }

if (empty($_POST["pincode"]) ||(strlen($_POST("pincode"))!=6)) {
     $pincode = "Pincode must be of 6 digits";
   } else {
     if (!preg_match("/^[0-9 ]*$/",$pincode)) {
       $pcodeerr = "Only numerics are allowed"; 
     }
   }


if (empty($_POST["mem1name"])) {
     $mfnameerr = "Name is required";
   } else {
     $mfname = test_input($_POST["mem1name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$mem1name)) {
       $mfnameerr = "Only letters and white space allowed"; 
     }
   }
    

if (empty($_POST["mem1gen"])) {
     $genderErr = "Gender is required";
   } else {
     $mem1gen = test_input($_POST["mem1gen"]);
   }


  if (empty($_POST["mem1email"])) {
     $emailErr = "Please enter email";}
	 else
	 {
     $mem1email = test_input($_POST["mem1email"]);
     
     if (!filter_var($mem1email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     
   }}



 if (empty($_POST["mem2name"])) {
     $msnameerr = "Name is required";
   } else {
     $mem2name = test_input($_POST["mem2name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$mem2name)) {
       $msnameerr = "Only letters and white space allowed"; 
     }
   }
    

if (empty($_POST["mem2gen"])) {
     $ggenderErr = "Gender is required";
   } else {
     $mem2gen = test_input($_POST["mem2gen"]);
   }


  if (empty($_POST["mem2email"])) {
     
     $eemail = test_input($_POST["mem2email"]);
     // check if e-mail address is well-formed
     if (!filter_var($mem2email, FILTER_VALIDATE_EMAIL)) {
       $eemailErr = "Invalid email format"; 
     
   }
}
    

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<h2>FORM</h2>
<h3>PLEASE FILL THE FOLLOWING FORM:</h3>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

TEAM NAME   :<input type="text" name="teamname" maxlength="40" value="<?php echo $teamname;?>">
<span class="error">* <?php echo $teamerr;?></span>
<br>

COLLEGE NAME:<input type="text" name="college" maxlength="40" value="<?php echo $college;?>">
<span class="error">* <?php echo $collegeerr;?></span>
<br>

ADDRESS:<input type="text" name="address" maxlength="40" value="<?php echo $address;?>">
<span class="error">* <?php echo $adderr;?></span>
<br>

CITY   :<input type="text" name="city" maxlength="30" value="<?php echo $city;?>">
<span class="error">* <?php echo $cityerr;?></span>
<br>

STATE   :<input type="text" name="state" maxlength="30" value="<?php echo $state;?>">
<span class="error">* <?php echo $stateerr;?></span>
<br>

COUNTRY   :<input type="text" name="country" maxlength="40" value="<?php echo $country;?>">
<span class="error">* <?php echo $countryerr;?></span>
<br>

PINCODE   :<input type="text" name="pincode" maxlength="6" value="<?php echo $pincode;?>">
<span class="error">* <?php echo $pcodeerr;?></span>
<br><br>

<h3>TEAM MEMBERS</h3>

<h3>MEMBER 1</h3>
NAME  :<input type="text" name="mem1name" maxlength="40" value="<?php echo $mem1name;?>">
<span class="error">* <?php echo $mfnameerr;?></span>
<br>

<font color=black> 
				GENDER: </font> <INPUT TYPE= "RADIO"  Name="mem1gen" <?php if (isset($mem1gen) && $mem1gen=="female") echo "checked";?>  value="female" >Female
				<INPUT TYPE= "RADIO"  Name="mem1gen" <?php if (isset($mem1gen) && $mem1gen=="male") echo "checked";?>  value="male" >Male
				<span class="error">* <?php echo $gendererr;?></span>
<br>

EMAIL ID:<input type="text" name="mem1email" maxlength="40" value="<?php echo $mem1email;?>"> 
<span class="error">* <?php echo $emailerr;?></span>
<br><br>

<h3>MEMBER 2</h3>
NAME  :<input type="text" name="mem2name" maxlength="40" value="<?php echo $mem2name;?>">
<span class="error">* <?php echo $msnameerr;?></span>
<br>

<font color=black> GENDER: </font> <INPUT TYPE= "RADIO"  Name="mem2gen" <?php if (isset($mem2gen) && $mem2gen=="female") echo "checked";?>  value="female" >Female
<INPUT TYPE= "RADIO"  Name="mem2gen" <?php if (isset($mem2gen) && $mem2gen=="male") echo "checked";?>  value="male" >Male
<span class="error">* <?php echo $ggendererr;?></span>
<br>

EMAIL ID:<input type="text" name="mem2email" maxlength="40" value="<?php echo $mem2email;?>"> 
<span class="error">* <?php echo $eemailerr;?></span>
<br><br>


USER NAME: <INPUT TYPE="TEXT" Name="username" SIZE="15" MAXLENGTH="30" value="<?php echo $username;?>"><br>

PASSWORD: <input type="password" NAME="password"   value="" size="15" ><br>

REENTER PASSWORD: <INPUT TYPE="PASSWORD" NAME="rpassword"   value="" size="15" ><br><br>

<input type="submit" name="s1" value="SUBMIT">

<input type="reset" name="r1" value="RESET">
</body>
</html>