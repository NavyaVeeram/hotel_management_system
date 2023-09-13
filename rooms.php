<html>
    <head>
    <title>rooms booking page for Hotelstop.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
 integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" 
 crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body{
      background-image:url('https://rb.gy/9zozbk');
      background-size:cover;
    background-attachment: fixed; 
}
.image img{
    width:100%;
 height:250px;
    background-size: cover;
    position:absolute;
    top:0px;
    right:0px;
    left:0px;
}
.image-content h1{
  position:relative;
}
nav{
    z-index:1;
}
.ul{
    list-style-type:square;
    font-size:15px;
}
.ul li{
    padding:5px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
</style>
  </head>
<body>
<?php
        include_once('header.php');
        ?>    
    <div class="image">
        <img src="https://img.freepik.com/free-psd/empty-room-wall-mockup-psd-modern-interior-
        design_53876-129119.jpg?size=626&ext=jpg&ga=GA1.2.877717481.1656821226&semt=sph">
        <div class="image-content">
<h1 class="text-light text-center py-3">ROOMS</h1>
        </div>
    </div>
    <div class="container-fluid ms-3 p-3 text-center">
        <br><br><br><br><h1 class="text-dark">Accomodation at</h1>
    <p class="text-dark">Hotelstop.com</p></div>
   <hr>
    <div class="container-fluid bg-info  text-light py-3 text-center">
    <h1>AFFORDABLE COMFORT & CONVENIENCE</h1>
<p>Hotelstop.com rooms are designed to provide the highest levels of comfort, convenience and eﬃciency,
     supported by the latest in technology.
</p>
<p>
The hotel has 167 air conditioned rooms, of these 158 are Superior rooms, 2 rooms for guests with special needs,
 4 Junior suites and 3 Executive suites. The Superior rooms are fitted with either a double bed or twin beds.
 Guests staying in the hotel have exclusive access to Wi-fi, the gym and swimming pool.</p>
</div>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6"><img src="https://ekahotel.com/wp-content/uploads/2022/03/Superior-Room-2.jpg"
        width="100%"></div>
<div class="col-md-3">
    <br><h2>SUPERIOR ROOM</h2>
          <p>  <ul class="ul">
           <li> Room size: 20 sq. m</li>
            <li> LCD flat screen TV with DSTV</li>
            <li> Beds: Double or Twin</li>
            <li> King size bed</li>
            <li> Complimentary Wi-Fi</li>
            <li> Personal Minibar</li>
            <li> Complimentary coffee making facilities</li>
            <li> Direct dial International telephone</li>
        </ul></p></div>

    <div class="col-md-3 p-3">
        <ul class="ul">
            <li>  Hair driers, iron & board</li>
            <li>Separate toilet and a rain shower</li>
                <li>Safety deposit box</li>
                    <li>Non-smoking</li>
                        <li>2 rooms for guests with special needs</li></ul>
                        <button class="btn btn-primary">Book now</button>
    </div>
    </div>
   </div>
   <div class="container-fluid">
<div class="row"  style="background:#e1e1e1;">
   
    <div class="col-md-3">
        <br>
       <h2> UNIOR SUITE</h2>
       <ul class="ul">
    <li>Room size: 23 sq. m</li>
    <li>LCD flat screen TV with DSTV</li>
        <li>Complimentary Wi-Fi hot spots</li>
            <li>Personal Minibar in the room</li>
                <li>Safety deposit box</li>
                    <li>Complimentary coffee making facilities</li>
                        <li>Direct dial International telephone</li>
                        </ul>
    </div>
    <div class="col-md-3">
        <br>
        <ul class="ul">
        <li>King size bed</li>
        <li>Hair driers, iron & board</li>
            <li>Separate toilet and a rain shower</li>
                <li>Safety deposit box</li>
                    <li>Non-smoking</li></ul>
                    <button class="btn btn-primary">Book now</button>
    </div>
    <div class="col-md-6">
        <img src="https://ekahotel.com/wp-content/uploads/2022/03/Junior-Suite.jpg" width="100%">
            </div>
</div>
   </div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
<img src="https://ekahotel.com/wp-content/uploads/2022/03/Executive-Suite2.jpg" width="100%">
        </div>
        <div class="col-md-3">
        
            <h1>EXECUTIVE SUITE</h1>
            <ul class="ul"><li>Room size: 50 sq. m</li>
    <li>Separate Bedroom with a king size bed</li>
        <li>Complimentary Wi-fi hot spots</li>
            <li>Personal Minibar in the room</li>
                <li>Safety deposit box</li>
                    <li>Complimentary coffee making facilities</li>
                        <li>Direct dial International telephone</li>
                        </ul>
        </div>
<div class="col-md-3">
<ul class="ul"><li> Hair dryers,iron & board</li>
<li>Bathtub, a toilet and a rain shower</li>
<li>Sitting room with a work area</li>
<li>Non-smoking
    </li>
</ul>
</div>
    </div>
   </div>
   <div class="container-fluid p-5 text-center bg-dark text-light">
   <h2 class="p-1"> SIGN UP & ENJOY MEMBER 10% DISCOUNT</h2>
<p class="p-1">Sign up / sign in via our booking engine to immediately access our private member rates.</p>

<div  class="btn btn-warning text-light"><a href="register.php"class="btn text-light">Sign up</a> / <a href="login.php" class="btn text-light">Sign in</a> / <a href="book.php"class="btn text-light">Book</a></div>
   </div>
<br>
<br>
<br>
<br>
<br>
<?php
include_once('footer.php');
?>
 <?php
 include_once('fixed.html');
 ?>
   </body>
</html>
