<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">

<title>TMS Admin Login</title>
<!---jQuery--->
<script src="../includes/jquery-3.7.1.min.js"></script>
<!---bootstrape--->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!---External Css-->
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>

<div class="row">
    <div class="col-md-20 m-auto" id="login_home_page">
        <center><h3 style="background-color: red; padding:5px; width:15vw;">Admin Login</h3></center>
        <form action="" method="post">
         <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
         </div>
         <br>
         <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
         </div>
         <br>
         <div class="form-group">
           <center> <input type="submit" name="userLogin" value="Login" class="btn btn-warning"></center>
         </div>
        </form>
        <br>
        <center><a href="../index.php" class="btn btn-danger">Go to Home</a></center>
    </div>
</div>
</body>
</html>