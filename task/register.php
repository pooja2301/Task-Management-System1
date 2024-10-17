<!-----<?php
include('includes/connection.php');
if(isset($_POST['userRegistration'])){
$query="insert into user values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
$query_run=mysqli_query($connection,$query);
if($query_run)
{
 echo "<script type='text/javascript'>
 alert('User registered successfully...');
 window.location.href='index.php';
 </script>
 ";  
}
else{
   echo "<script type='text/javascript'>
   alert('Error...Plz try again.');
   window.location.href='register.php';
   </script>
   "; 
}
}
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">

<title>TMS Register</title>

<script src="includes/jquery-3.7.1.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div class="row">
    <div class="col-md-20 m-auto" id="register_home_page">
        <center><h3 style="background-color: red; padding:5px; width:15vw;">User Registration</h3></center>
        <form action="" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
         </div>
         <br>
         <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
         </div>
         <br>
         <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
         </div>
         <br>
         <div class="form-group">
            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile No" required>
         </div>
         <br>
         <div class="form-group">
           <center> <input type="submit" name="userRegistration" value="Register" class="btn btn-warning"></center>
         </div>
        </form>
        <br>
        <center><a href="index.php" class="btn btn-danger">Go to Home</a></center>
    </div>
</div>
</body>
</html>  ---->
<?php 
require 'include/config.php';


?>

<?php
if(isset($_POST['insertBtn'])){
  $name = $_POST['name'];
  $address = $_POST['address'];
  $mobnum = $_POST['mob_num'];
  $email = $_POST['email'];
  $pswd = $_POST['pswd'];
  $cpswd = $_POST['Cpswd'];
  if ($pswd != $cpswd)
 {
  echo "Passwords do not match";
 }else {

$sql = "INSERT INTO tbuser (fdName, fdAddress, fdMobile, fdEmail, fdPass)
VALUES ('$name', '$address', '$mobnum','$email', '$pswd')";

if (mysqli_query($conn, $sql)) {
  echo '<script>swal({
    title: "Done! Your are Register Now!",
    text: "",
    icon: "success",
      }).then(function(){ 
        window.location="login.php"; 
         }
      );
      </script>';

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}
?>

<script>  
function verifyPassword() {  
  var pw = document.getElementById("pswd").value;  
  var cpw = document.getElementById("cpswd").value; 
  //check empty password field  
  if(pw == cpw) {  
     //swal("Password match");

  }  
  else {  
     swal("Password not match");
     document.getElementById("cpswd").focus();
     //return false;   
  }  
}  
</script>  


    <div class="mx-auto p-4 w-50 " >
    <h3 class="text-center">Registration Form</h3>

<form method="POST" > 
                    <div class="mb-3 mt-3">
                    <label for="name">Name: </label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>

                    
                    <div class="mb-3 mt-3">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                    </div>

                    <div class="mb-3 mt-3">
                    <label for="mobile">Mobile Number:</label>
                    <input type="text" class="form-control" id="number" placeholder="Enter mobile number" name="mob_num" >
                    </div>

                    <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
                    </div>

                    <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
                    </div>

                    <div class="mb-3">
                    <label for="pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="cpswd" placeholder="Enter Confirm password" name="Cpswd">
                    </div>

                    <div class="form-check mb-3">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remeber"> Remember me
                    </label>

                    <div class="d-grid gap-3 col-3 mx-auto">
                    <button type="submit" name="insertBtn" class="btn btn-primary">Submit</button><br>
                    </div>
                    <p>Already have an account?
                    <a href="login.php">click here</a></p>

                    </form>
                    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  