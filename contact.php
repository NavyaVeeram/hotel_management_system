<html>
    <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>This is a contact page of Hotelstop.com </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    li{
        padding:10px;
    }
body{
  background:#e1e1e1;
  background-attachment:fixed;
}
.relative{
    position: relative;
  text-align: center;
  color:black;
font-size:20px;
text-shadow:2px 2px 2px black;
}
.absolute {
  position: absolute;
top:40%;
  left: 20%;
  transform: translate(-50%, -50%);
}         
</style>
    </head>
    <body>
    <?php
        include_once('header.php');
        ?>
        <div class="relative">
            <img src="https://rb.gy/gjqajy" width="100%" height="400px;">
            <div class="absolute"><h1 class="p-1 text-dark "> CONTACT US</h1>                
     </div></div>
    <div class="container">
<h1>How to Make a Hotel Reservation</h1>
<p style="color:red;">By Staff WriterLast Updated Jan 24, 2023</p>
<p>
Booking a hotel room is a key component in any travel plans, but it takes some work. 
Book the hotel room of your dreams with these simple hotel reservation tips.
</p>
</div>
<div class="container-fluid bg-dark p-5 m-2 text-light">
    <div class="row">
        <div class="col-sm-6">
<h1>Compare Prices</h1>
<p>To get the best deal, you’ll want to price compare. Using a simple booking site or 
  by going through your travel agent, check out a few different hotels. Never book blind.
   Always price match when possible, since this is the best way to save money on your trip.
    Most travel websites have price compare tools to help you out.
     Try clearing your browser history or open an incognito browser window. 
     This clears previous cookies saved during your searches and could result in lower price offers.
</p>
</div>
<div class="col-sm-6">
<h1>Read the Reviews</h1>
<p>
If you’ve never stayed with a specific hotel company before, take a look at the reviews before booking. 
This will give you a clear picture of the positive and negative aspects of the hotel. 
You can learn a lot from negative reviews, including info about the hotel’s cleanliness levels,
 extra charges and staff professionalism. This also helps
 if the hotel reservation deals look too good to be true. 
 Some hotels that are renovating or in a high crime area overcompensate by offering 
 price deductions or extravagant offers. Reading reviews of the hotel helps you decide 
 if those offers are worth the trouble.
 </p>
 </div>
 </div>
 </div>
 <div class="container-fluid text-center text-dark bg-light">
    <div class="row p-3">
        <div class="col-sm-4 bg-secondary text-light">
 <h2 class="p-3">Familiarize Yourself With the Area</h2>
<p class="p-3">
Familiarizing yourself with the hotel location helps save you money and time during your stay.
 Research what restaurants are nearby for quick dinner options. Know where the nearest hospital
  or urgent care is in case of emergency. See how far away local attractions are from your hotel. 
  Knowing about the surrounding area also helps in case you arrive before check-in time. 
  It gives you many options to plan your stay.
</p>
</div>
<div class="col-sm-4  bg-light text-secondary">
<h2 class="p-3">Research Cancellation Policies</h2>
<p class="p-3">Be knowledgeable of cancellation policies before you book.
   Look on the hotel site for information on how to change or cancel your reservation.
    Many hotels require you to call their front desk to make changes. 
    Know whether you can get a refund for cancellations and how long you have to make changes before your stay.
</p>
</div>
<div class="col-sm-4  bg-secondary text-light">
  <h2 class="p-3">  How to Book</h2>
<p class="p-3">Many booking sites let you reserve hotel rooms online. If you are unable to access online booking,
   reach out directly to the hotel. At this time you can ask any booking questions you may have.
    Ask about payment options, as well.
 If you feel uncomfortable making a payment online, 
 hotel front desk agents can also help you pay over the phone. 
 You can discuss booking and payment options with a travel agent, as well. 
 If you book through an agent, they can take care of the whole reservation process for you.
  It’s often best to go through a travel agent for overseas booking.</p>
  </div>
</div>
</div>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'internpro1');
if($conn===false){
    die("ERROR:could not able to attend" . mysqli_connect_error());
}
if(isset($_POST['register'])){
    $fn = $_POST['fn'];
     $e = $_POST['e'];
     $sb = $_POST['sb'];
     $msg = $_POST['msg'];
 $result = mysqli_query($conn, "insert into contact(full_name,email,subject,message) values('$fn','$e','$sb','$msg')");
echo "";
}
?>
 <script>
        function highlightInput(elm){
            elm.style.background = "gray";
        }    
    </script>
  <div class="container-fluid p-5 m-2">
    <div class="row">
        <div class="col-md-6">
            <form method="post">
           <h2> Leave us a message</h2>
          <input type="text" name="fn" placeholder="full_name" class="form-control" onfocus="highlightInput(this)"><br>
          <input type="text" name="e" placeholder="email" class="form-control" onfocus="highlightInput(this)"><br>
          <input type="text" name="sb" placeholder="subject" class="form-control" onfocus="highlightInput(this)"><br>
          <input type="text" name="msg" placeholder="message"class="form-control" onfocus="highlightInput(this)"><br>

          <input type="submit"  name="register" placeholder="register" class="btn btn-primary  text-light form-control" 
          onclick="alert('submited successful');">
            </form>
          </div>
          <div class="col-md-6">
                 <h2>Contact Information</h2>
   <ul style="list-style-type:none;">
    <li>www.Hotelstop.com</li>
    <li>Email-hotelstop1234@gmail.com </li>
    <li>+91 9847637885</li>
    <li> TripAdvisor</li>
    <li>  Google</li>
</ul>
</div></div>   
    </div>
    <?php
 include_once('fixed.html');
 ?>
    <?php
  include_once('footer.php');
 ?>
  </body>
 </html>