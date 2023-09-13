<html>
    <head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title></title>
        <style>
            body{
                background-image:linear-gradient(to bottom right,ghostwhite,skyblue,lightgrey,skyblue,aliceblue);
            }
            .card{
    width:210px;
    height:350px;
    background:lightslategrey;
    color:ghostwhite;
  margin:20px;
  display:inline-block;
   }
   .card:hover{
    box-shadow: 0 0 15px -2px #444444;
   }
   .card img{
    width:210px;
    height:210px;
   }
            .container p{
text-align:center;
            }
.img-content{
   text-align:center;
}
            </style>
    </head>
    <body>
        <div class="container-fluid bg-dark text-white text-center p-5"><h1>USERS PROFILES</h1></div>
        <?php
    $con = mysqli_connect("localhost", "root", "", "internpro1");
    if($con===false){
        die("ERROR:could not be able to connect" .mysqli_connect());
    }
    $result=mysqli_query($con,"select*from register");
    while($na=mysqli_fetch_array($result)){
        echo "<div class='card'>";
        echo "<img src='https://www.freeiconspng.com/thumbs/person-icon/clipart--person-icon--cliparts-15.png'>";
        echo "<div class='img-content'>";
        echo "<P>" .$na['fname']."</p>";
        echo "<P>" .$na['lname']."</p>";
        echo "<P>" .$na['email']."</p>";
        echo "</div>";
        echo "</div>";
    }
    ?>
     <?php
 include_once('fixed.html');
 ?>
</body>
    </html>