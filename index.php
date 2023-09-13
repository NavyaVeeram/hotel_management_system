<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <title>HotelsTop.com</title>
    <style>
       *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body{
     background-image:url('https://img.freepik.com/free-photo/wine-glass_1203-3447.jpg?w=1060&t=st=1675925793~exp=1675926393~hmac=a4f311b1c4ec079bcfa96f83501990a631c2d743999422ccc579948af4ba9bfb');
     background-repeat:no-repeat;
    background-size:cover;
    background-attachment: fixed;
}
.img img{
    width:100%;
  height:650px;
    background-size: cover;
    position:absolute;
    top:0px;
    right:0px;
    left:0px;
}
.second{
    position:relative;
   padding-top:70px;
   color:white;
}
.box{
    position:relative;
    top:80px;
    width:1200px;
    height:150px;
}
@media screen and (max-width:992px){
    .box{
    position:relative;
    top:120px;
width:700px;
    height:150px;
} 
}
@media screen and (max-width: 600px){
    .box{
    position:relative;
    top:115px;
width:400px;
    height:150px;
} 
}
.box1{
    position:relative;
    top:130px;
}
.gal img{
    padding-top:150px;
    width:300px;
    position:relative;
    
}
.item{
    padding:10px;
    text-align: center;
}
.item1{
    
    padding:10px;
    text-align: center;
}
.rounded{
    border-radius:50%;
}

figure{
    border:none;
    width:300px;

  }
  figure figcaption{
    background-color: black;
    color:white;
    padding:30px;
    width:300px;
    height:250px;
  }
  .figcaption{
    background-color: white;
    color:black;
    width:300px;
    height:100px;
    padding-bottom:5px;
  } 
.head{
    position:relative;
    background:rgb(18, 20, 14);
color:aliceblue;
opacity:0.9;
}  
    .span {
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
.content{
    background:white;
    width:300px;
    color:black;
}
.contents{
  color:greenyellow;
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
    .center button{
       margin:0 auto;
    }
    .center p{
padding: 15px;
        background: #F0E68C;
    }
 nav{
    z-index:1;
 }
 .video{
    position:fixed;
    top:300px;
    left:0px;
 }
 #offers{
    color:pink;
 }
</style>
<script>
$(document).ready(function(){
    // Hide displayed paragraphs with different speeds
    $(".hide-btn").click(function(){
        $("p.normal").hide();
        $("p.fast").hide("fast");
        $("p.slow").hide("slow");
        $("p.very-fast").hide(50);
        $("p.very-slow").hide(2000);
    });
    
    // Show hidden paragraphs with different speeds
    $(".show-btn").click(function(){
        $("p.normal").show();
        $("p.fast").show("fast");
        $("p.slow").show("slow");
        $("p.very-fast").show(50);
        $("p.very-slow").show(2000);
    });
});
</script>
</head>
    <body onload="window.alert('Page is loaded successfully!');">
    <?php
        include_once('header.php');
        ?>
       <div class="img">
           <img src="https://img.freepik.com/free-photo/sunset-pool_1203-3192.jpg?w=900&t=st=1675343860~exp=1675344460~hmac=14e22363d478c0b5146cf2136a224d986bc2ecfbde345f62d53b603eb220e607" width="100%" >
    </div>
            <div class="container second">
                <div class="row">
                    <div class="col-md-6 text-light bg-secondary p-1" style="text-align:center;">
<h2>WELCOME TO  <br>HOTELSTOP.COM</h2><br>
            <h4 style="color:violet;">THE PERFECT ROOM </h4><br>
            <a href="book.php" class="btn btn-primary">Book Now</a>
       </div>
        <div class="col-md-6 bg-light p-1">
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
            $n=$_POST['n'];
            $result=mysqli_query($conn,"insert into person(select_destination,date,persons) values('$s','$d','$n')");
        }
        ?>
            <form method="post">
                <h5 style="color:violet;">Book Now</h5>
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
                <input type="date" name="d" class="form-control" placeholder="check-out"><br>
                <input type="number" name="n" class="form-control" placeholder="persons"><br>
                <input type="submit" name="register" class="btn btn-primary form-control" placeholder="submit" onclick='alert("submitted successfully")'>
            </form>
    </div>
        </div>
        </div>
    <div class="container box card bg-info" style="font-size:30px;">
       <h1> Find your next stay</h1>
       <p> Search low prices on hotels, homes and much more...</p>
    </div>
    <div class="container">
        <div class="row gal">
           
            <div class="col">
                <img src="https://img.freepik.com/free-photo/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table_105762-1783.jpg?w=360&t=st=1675423698~exp=1675424298~hmac=c0ea5843baec00ef0f82629845a944ba3549b68a9af0033a05025d2798bc0a57">
            <div class="content"><h2><bold>Hotels </bold></h2><p>934,765 hotels </p></div>
            </div>
            <div class="col"><img src="https://img.freepik.com/free-photo/double-bed-with-pillows_1203-21.jpg?w=360&t=st=1675423736~exp=1675424336~hmac=c7951d832a86349f91025b56721c694c36f6d8ed646383b0ef80fda0e9cc1e93">
                <div class="content"><h2><bold>Apartments</bold></h2><p>897,745 Apartments</p></div>
            </div>
            <div class="col"><img src="https://img.freepik.com/free-photo/interior-design-bedroom-with-modern-decoration_181624-46706.jpg?w=360&t=st=1675423768~exp=1675424368~hmac=05fe9e70a9602f951ca1348f11106fbe70957235b6f46ca6694ffb2668fec1e7">
                <div class="content"><h2><bold>Resorts</bold></h2><p>789,678 Resorts</p></div>
            </div>
        </div>
    </div>
    <div class="m-4">
        <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item">
                <a href="#mumbai" class="nav-link text-light bg-dark" data-bs-toggle="tab">mumbai</a>
            </li>
            <li class="nav-item">
                <a href="#newdelhi" class="nav-link text-light bg-dark" data-bs-toggle="tab">new delhi</a>
            </li>
            <li class="nav-item">
                <a href="#bengaluru" class="nav-link text-light bg-dark " data-bs-toggle="tab">bengaluru</a>
            </li> 
            <li class="nav-item">
                <a href="#hydrebad" class="nav-link text-light bg-dark" data-bs-toggle="tab">Hyderabad</a>
            </li>
            <li class="nav-item">
                <a href="#vizak" class="nav-link text-light bg-dark" data-bs-toggle="tab">Vishakapatnam</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="mumbai">
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
              <figure><img src="https://rb.gy/vyecst" width="300px" height="200px"><figcaption class="figcaption">Radisson mumbai<br>Rs.18,000</figcaption></figure>
         </div>
         <div class="col-md-3">
              <figure><img src="https://rb.gy/jsebjo" width="300px" height="200px"><figcaption class="figcaption">Fairfield by Marriot<br>Rs.20,000</figcaption></figure>
            </div>
            <div class="col-md-3">
              <figure><img src="https://rb.gy/qppgwv" width="300px" height="200px"><figcaption class="figcaption">The Orchid Hotel Mumbai<br>Rs.30,000</figcaption></figure>
           </div>
           <div class="col-md-3">
              <figure><img src="https://rb.gy/t5sekv" width="300px" height="200px"><figcaption class="figcaption">The empresa Hotel <br>Rs.16,000</figcaption></figure>
              </div></div></div></div>
            <div class="tab-pane fade" id="newdelhi">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                <figure><img src="https://rb.gy/0yfqef" width="300px" height="200px"><figcaption class="figcaption">Tag Palace<br>Rs.40,000</figcaption></figure>
                </div>
                <div class="col-md-3">
              <figure><img src="https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201201151306089659-325360fcc60e11ec83e00a58a9feac02.jpg?&output-quality=75&downsize=583:388&crop=583:388;0,25&output-format=jpg" width="300px" height="200px"><figcaption class="figcaption">Taj Mahal Hotel<br>Rs.30,000</figcaption></figure>
              </div>
              <div class="col-md-3">
              <figure><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/c8/0c/ca/exterior.jpg?w=700&h=-1&s=1" width="300px" height="200px"><figcaption class="figcaption">Radision Blu plaza<br>Rs.18,000</figcaption></figure>
              </div>
              <div class="col-md-3">
              <figure><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/21/5e/8a/9e/exterior-day.jpg?w=700&h=-1&s=1" width="300px" height="200px"><figcaption class="figcaption">the leela Palace<br>Rs.60,000</figcaption></figure>
            
            </div> </div></div></div>
            <div class="tab-pane fade" id="bengaluru">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                <figure><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/31211348.jpg?k=c469403df80f10e33120c7be42b61d458746716a4e04c62ad4b9afc1c22edc98&o=&hp=1" width="300px" height="200px"><figcaption class="figcaption">The Oberul bengalure<br>Rs.12,000</figcaption></figure>
                </div>
                <div class="col-md-3">
              <figure><img src="https://rb.gy/w8gfzu" width="300px" height="200px"><figcaption class="figcaption">lbls Bengaluru city Centre<br>Rs.15,000</figcaption></figure>
              </div>
              <div class="col-md-3">
              <figure><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/285377290.jpg?k=57e9ff6f8428bbcebb3f0f98c449612abd885d3a7270f1c78f95f986b7cd1ad7&o=&hp=1" width="300px" height="200px"><figcaption class="figcaption">Hyatt centric MG Road<br>Rs.30,000</figcaption></figure>
              </div>
              <div class="col-md-3">
              <figure><img src="https://www.itchotels.com/content/dam/itchotels/in/umbrella/images/brands-desktop/itc-maurya.png" width="300px" height="200px"><figcaption class="figcaption">Welcome hotel by ITC Hotels <br>Rs.20,000</figcaption></figure>
              </div>
             
                           </div>   </div>                                        
            </div>
            <div class="tab-pane fade" id="hydrebad">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                <figure><img src="https://rb.gy/7qlxzk" width="300px" height="200px"><figcaption class="figcaption">Holiday in express hydrebad<br>Rs.30,000</figcaption></figure>
                </div>
                <div class="col-md-3">
              <figure><img src="https://www.tajhotels.com/content/dam/gateway/hotels/taj-banjara/images/Elevation_16x7.jpg/jcr:content/renditions/cq5dam.web.1280.1280.jpeg" width="300px" height="200px"><figcaption class="figcaption">Taj Banjara <br>Rs.40,000</figcaption></figure>
              </div>
              <div class="col-md-3">
              <figure><img src="https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/flyfish/raw/NH7124021277256/QS1042/QS1042-Q1/1645525714603.jpeg" width="300px" height="200px"><figcaption class="figcaption">Vinanta Hydrebad<br>Rs.30,000 </figcaption></figure>
              </div>
              <div class="col-md-3">
<figure><img src="https://rb.gy/5amnnb" width="300px" height="200px"><figcaption class="figcaption">Novotel hydredad<br>Rs.20,000</figcaption></figure>
 </div></div></div></div>
  <div class="tab-pane fade" id="vizak">
<div class="container-fluid">
  <div class="row">
 <div class="col-md-3">
  <figure><img src="https://www.ahstatic.com/photos/7535_ho_00_p_1024x768.jpg" width="300px" height="200px"><figcaption class="figcaption">Novotel vishakapatnam<br>Rs.40,000</figcaption></figure>
 </div>
 <div class="col-md-3">
  <figure><img src="https://www.tajhotels.com/content/dam/gateway/hotels/beach-road,vishakapatnam/images/welcome/vishakapatnam_16x7_Exterior_final.png/jcr:content/renditions/cq5dam.web.1280.1280.png" width="300px" height="200px"><figcaption class="figcaption">The gate way hotel beach road<br>Rs.14,000 </figcaption></figure>
  </div>
 <div class="col-md-3">
 <figure><img src="https://rb.gy/uj1z5i" width="300px" height="200px"><figcaption class="figcaption">Dolhpin hotel<br>Rs.25,000</figcaption></figure>
 </div>
 <div class="col-md-3">
<figure><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0b/6c/01/d3/aqua-and-spa.jpg?w=700&h=-1&s=1" width="300px" height="200px"><figcaption class="figcaption">The park Vishakapatnam<br>Rs.15,000 </figcaption></figure>
 </div></div>
 </div>
</div>`
</div>
<div class="container">
<h1><u style="color:greenyellow;">Get the best prices from top providers</u></h1></div>
    <div class="container">
        <div class="row item">
            <div class="col-md-4">
                <img src="https://img.freepik.com/premium-vector/hotel-logo-simple-illustration_434503-736.jpg?w=2000" width="200px" height="100px">
</div>
            <div class="col-md-4">
                <img src="https://thumbs.dreamstime.com/z/hotel-logo-template-background-58362974.jpg" width="200px" height="100px">
               </div>
            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQBgkuxLoXwmM1C2X2yCArwyC1--gLnmbINyIeWMOouKagdznNr7j2NJZ_SWJBt5j40SQ&usqp=CAU"width="200px"height="100px">
              </div>
        </div>
        <br>
        <div class="row item">
            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShKQm880xScd0vtDVgHNa9y9Tu1VFc0GSYXg&usqp=CAU"width="200px" height="100px">
</div>
            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC-1kE8l0DYIc0rn9MFhrNoHp_IqPdmaL1cw&usqp=CAU"width="200px" height="100px">
               </div>
            <div class="col-md-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRk3I0kLV94om7qoYezoHRM7pB63xb9wwjUA&usqp=CAU"width="200px" height="100px">
                </div></div></div> 
    <div class="container">
        <div class="row">
            <div class="col-md-4 item1">
            <figure>
<img src="https://img.freepik.com/free-vector/relaxing-concept-illustration_114360-289.jpg?w=360&t=st=1675431437~exp=1675432037~hmac=fad22cb50fadcc4a5b31794a3e14b751a1c346832e68e992ffbc5d521b9c63c5" width="300px" height="200px">
<figcaption><h2>see it all</h2>
<p>from local hotels to global brands,<br>discover millions of rooms all around <br>the world</p></figcaption>
    </figure>
            </div>
            <div class="col-md-4 item1">
            <figure>
                <img src="https://img.freepik.com/free-vector/happy-couple-waiter-restaurant_23-2147661695.jpg?size=338&ext=jpg&ga=GA1.1.877717481.1656821226&semt=ais" width="300px" height="200px">
            <figcaption><h2>compare right here </h2><p>No need to search anywhere else.The <br>biggest names in travel  are right here.</p></figcaption></figure>
            </div>
            <div class="col-md-4 item1">
                <figure>
          <img src="https://img.freepik.com/free-vector/restaurant-meal-concept_1284-16842.jpg?w=360&t=st=1675431736~exp=1675432336~hmac=3cf119e1deffbdd69252ec2393d4e3f462b5052cfd05398306f5f1f9f583d747" width="300px" height="200px">     
    <figcaption><h2>Get exclusive rates</h2><p>We have special deals with the worlds<br> leading hotels-and we ahare these<br>savings with you.</p></figcaption>
    </figure>
        </div>           
        </div>
    </div>
      <!-- Info Alert -->
      <div class="alert alert-info alert-dismissible fade show">
        <strong>Info!</strong> Please read the comments carefully.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php
        $con = mysqli_connect('localhost', 'root','', 'internpro');
        if($con===false){
            die("ERROR:could not able to attend" . mysqli_connect_error());
        }
        ?>
        <?php
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
          <small style="text-align:center;"> comment here</small><br>
           <input type="text" name="na" placeholder="name" class="form-control"><br>
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
 <div class="container center" id="#offers">
    <div class="row">
        <div class="col-md-12">
      <button type="button" class="hide-btn btn-primary p-3 text-center">Hide Offers</button> 
      <button type="button" class="show-btn btn-info p-3 offset-md-9">Show Offers</button>
    <p class="very-fast">Exclusive offers on first booking</p>
    <p class="normal">refer your friend and earn more</p>
    <p class="fast">Grab the special on today </p>
    <p class="slow">Book your stay and one day food free </p>
    <p class="very-slow">if you are bookings are high then you have free stay</p>
</div>
</div>
</div>
<div class="alert  alert-dismissible show video">
        <video controls width="300px" height="200px">
        <source src="images/video.mp4">
        </video>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
 <?php
  include_once('footer.php');
 ?>
 <?php
 include_once('fixed.html');
 ?>
    </body>
</html>