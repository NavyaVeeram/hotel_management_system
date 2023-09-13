<html>
    <head>
        <title>
</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
        margin:0;
        box-sizing:border-box;
     
    }
    .comments{
border:1px solid black;
padding:2px;
border-radius:10px;
background:black;
color:white;
width:300px;
height:100px;
margin:0 auto;
    }
    .cards{
        width:300px;
        height:300px;
        border-radius:30px;
        padding:5px;
        margin:0 auto;
        box-shadow: inset 0 0 10px blue;
        border:1px groove black;
    }
    .cards input{
        width:200px;
       align-items:center;
       margin:0 auto;
    }
    .comm{
        position:relative;
        padding-left:50px;
    }
    .user-icon {
background:white;
color:black;
border:1px solid black;
border-radius:50%;
padding:10px;
font-size:30px;
    }
    .name{
        position:relative;
        padding-left:5px;
    }
    </style>
<body>
    <br><br>
<?php
        $con = mysqli_connect('localhost', 'root','', 'internpro');
        if($con===false){
            die("ERROR:could not able to attend" . mysqli_connect_error());
        }
        if(isset($_POST['submit'])){
            $na = $_POST['na'];
            $co= $_POST['co'];
            $sql = mysqli_query($con, "insert into comments(name,comments) values('$na','$co')");
    echo "";
        }
        ?>
        <form method="POST">
          <div class="cards card">
            <br>
          <small style="text-align:center;"> comment here</small>
            <br>
        
           <input type="text" name="na" placeholder="name" class="form-control">
<br>
           <input type="text" name="co" placeholder="comments" class="form-control">
           <br>
           <input type="submit"  name="submit" placeholder="post" class="btn btn-primary  text-light form-control" onclick="alert('submited successful');">
 
    </div>
    </form>
    <br><br>
    <?php
    $sql = mysqli_query($con, "select*from comments");
    while($cherry=mysqli_fetch_array($sql)){
       echo "<div class='my-1 comments'>";
        echo "<span class='fa fa-user user-icon'>";
        echo "</span>";
        echo "<span class='name'>".$cherry['name']."</span>";
           echo " <p class='comm'>".$cherry['comments']."</p>";
       echo" </div>";
    }
    ?>
    </body>
        </html>    
       