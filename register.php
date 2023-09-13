<html>
    <title></title>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
 integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" 
 crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
      .btn{
       border-radius:30px;
       width:150px;
     }
   div button{
        background:transparent;
 position:relative;
        border:none;
        top:600px;
        left:700px;
color:blue;
    }
    @media screen and (max-width:800px){
        div button{
        background:transparent;
 position:relative;
        border:none;
        top:850px;
        left:250px;
color:blue;
    }
}
@media screen and (max-width:600px){
        div button{
        background:transparent;
 position:relative;
        border:none;
        top:1050px;
        left:150px;
color:brown;
    }
    }
    body{
        background-color:black;
    }
</style>
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "internpro1");
if (isset($_POST['register'])) {
    $f = $_POST['f'];
    $l = $_POST['l'];
    $e = $_POST['e'];
    $p = $_POST['p'];
    $sql = "INSERT INTO register(fname,lname,email,phno) VALUES ('$f','$l','$e','$p')";
    header("location:login.php");
    if (mysqli_query($con, $sql)) {
        echo "<div><button>records submitted successfully</button></div>";
    } else {
        echo "Error:could not able to execute $sql" . mysqli_error($con);
    }
}
?>
<div class="container bg-light py-3 my-5">   
<form action="register.php" method="post">
    <div class="row my-3">
        <div class="col-sm-6 text-center">  
<img src="https://rb.gy/vwokeh" class="w-100" height="auto">
        </div>
        <div class="col-md-6" style=" font-family:'Trebuchet MS', 'Lucida Sans Unicode', 
        'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:aliceblue;">
           <h1 class="text-primary">REGISTER </h1>
           <p><label>fname</label><br>
          <input type="text" placeholder="firstname" name="f" class="form-control w-100"></p>
          <p><label>lname</label><br>
          <input type="text" placeholder="lastname" name="l" class="form-control w-100"></p>
          <p><label>Email</label><br>
          <input type="text" placeholder="email" name="e" class="form-control w-100"></p>
          <p><label>phone number</label><br>
          <input type="number" name="p" class="form-control "  placeholder="phone number" required></p>
     <p> <input type="submit" class="btn btn-primary" name="register" onclick="alert('submitted successfully');"></p>
   <p>   already register then login here <a href="login.php">login here</a></span></p>
        </div>
    </form>
    </div>
    </form>
</div>
<?php
 include_once('fixed.html');
 ?>
</body>
</html>