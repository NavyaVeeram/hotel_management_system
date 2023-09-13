<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
            <title>Gallery  </title>
    <style type="text/css">
 .grey{
       background:#e1e1e1;
      }              
.relative{
    position: relative;
  text-align: center;
  color:black;
}
.absolute {
  position: absolute;
top:40%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.img-box{
        display: inline-block;
        text-align: center;
        margin-top:50px;
margin-left:50px;
    }
   .img-box-content{
color:white;
background:black;
padding:10px;
    }
    .img-box-content a{
      color:white;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-decoration:none;
    }
</style> 
</head>
<body>
<?php
        include_once('header.php');
        ?>
  <div class="relative">
      <img src="https://img.freepik.com/free-vector/brown-room-with-realistic-frame_1048-4961.jpg?size=338&ext=jpg&ga=GA1.1.877717481.1656821226&semt=ais" width="100%" height="400px;">
      <div class="absolute"><h1 class="p-1 text-dark "> GALLERY</h1>
 </div>
 </div>
 <br><br>
<?php
    // Array containing sample image file names
    $images = array("1.jpg", "2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg", "12.jpg","13.jpg","14.jpg","15.jpg","16.jpg","17.jpg","18.jpg","19.jpg","20.jpg");
    ?>
    <?php
     foreach($images as $image){
echo "<div class='img-box'>";
 echo  '<img src="images/' . $image . '" width="250" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'">';
 echo '<div class="img-box-content"><a href="gallery2.php?file=' . urlencode($image) . '">Download</a></div>';
 echo "</div>";
     }  
?> <br><br>
<?php
  include_once('footer.php');
 ?>     
  <?php
 include_once('fixed.html');
 ?>        
</body>
</html>