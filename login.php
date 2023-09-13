<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>login</title>
<style>
.container{
    margin:0 auto;
   background:rgb(199, 200, 215);
margin-top:180px;
    width:600px;
}
.form-control{
    margin:20px;    
}
.center{
    width:550px;
}
.class{
    margin:0 auto;
    position:relative;
    top:180px;
}
div{
    padding:5px;
}
.page{
    position:relative;
    top:300px;
}
span{
    color:grey;
    position:absolute;
  left:600px;
  top:110px;
 padding:10px; 
}
span:hover{
    color:white;
}
  .m-4{
    position:relative;
    top:200px;

  }
  body{
    background:black;
    opacity:1;
  }
</style>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","internpro1");
if(isset($_POST['login']))
{    
        $e = $_POST['e'];
 $result = mysqli_query($con, "SELECT * from register where email='$e'");    
        if($result->num_rows>0){
            header("location:dislogdet.php");
        }
        else{
            echo "wrong details";
        }
}
    ?>
    <div class="container text-center card">
       <h1 class="my-3 text-muted">Member Login </h1>
       <form method="POST">
      <div class="center">
       
        <input type="text" name="e" class="form-control" 
         placeholder="email" required>
         </div>
        <input type="submit" name="login" 
        class="btn my-3" style="background:rgb(179, 240, 230);">
        <div class="text-white card-footer"> <button type="button" 
        class="btn btn-muted">forget password</a></div></label>
    </div> 
</form>
</div>
<?php
 include_once('fixed.html');
 ?>
</body>
</html>