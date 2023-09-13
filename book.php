<html>
    <head>
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title></title>
        <style>
            form{
                width:400px;
                margin:0 auto;
                padding:40px;
                background:aliceblue;
                margin-top:70px;
            }
            </style>
</head>
<body>
<?php
 $conn = mysqli_connect('localhost', 'root', '', 'internpro1');
 if($conn===false){
     die("ERROR:could not able to attend" . mysqli_connect_error());
 }
 ?>
       <?php
        if(isset($_POST['register'])){
            $s=$_POST['s'];
            $d=$_POST['d'];
            $da=$_POST['da'];
            $n=$_POST['n'];
            $result=mysqli_query($conn,"insert into persons(select_destination,check_in,check_out,persons) values('$s','$d','$da','$n')");
        }
        ?>
            <form method="post">
                <h5 style="color:blue;">Book Now</h5>
            <select for="s" class="form-select" name="s" placeholder="select_destination" class="col-sm-2 col-form-select">
                <option>select_destination</option>
                <option>Hydrebad</option>
<option>Banglore</option>
<option>Chennai</option>
<option>Mumbai</option>
<option>Coimbatore</option>
<option>kerala</option>
<option>vishakapatnam</option>
<option>Guntur</option>
<option>vijayawada</option>
<option>pondicherry</option>
<option>OOty</option>
<option>Tirupathi</option>
<option>pune</option>
<option>kolkata</option>
    </select><br>
    <label>Check-in</label>
                <input type="date" name="d" class="form-control" placeholder="check-in"><br>
                <label>Check-out</label>
                <input type="date" name="da" class="form-control" placeholder="check-out"><br>
                <input type="number" name="n" class="form-control" placeholder="persons"><br>
                <input type="submit" name="register" class="btn btn-primary form-control" placeholder="submit" onclick='alert("submitted successfully")'>
            </form>
    </div>
        </div>
        </div>
        <?php
 include_once('fixed.html');
 ?>
    </body>
    </html>