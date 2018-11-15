<!DOCTYPE HTML>
<html>
<head>
<title>KIGALI COACH</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="volcano_files/thamar.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <meta name="keywords" content="Fitness Appointment Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
  />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Meta tag Keywords -->
  <!-- Style-CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />  
  <!-- web-fonts -->
  <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- //web-fonts -->
<style>

.thbgimage{
    background-image: ;
     background-repeat:no-repeat;
    background-size: 100% 100%;
background-position: center;
}

</style>
</head>

<body bgcolor="white">

<div id="thlogg"><br><span style="color:white; float:right; font-size:1.5em;">KIGALI COACH</span><br><br>
<div id="thlog">
<img src="images/kigfoto.jpeg"style="height:100%; width:10%;"/>
</div>
</div>
<center>
<div id="mbthamarebul_wrapper" style="max-width: auto;">
  <ul id="mbthamarebul_table" class="mbthamarebul_menulist css_menu">
  <li><div class="buttonbg gradient_button gradient27" style="width: 64px;"><a href="index.php">Home</a></div></li>
  <li><div class="buttonbg gradient_button gradient27" style="width: 78px;"><a href="aboutus.php">About us</a></div></li>
  <li><div class="buttonbg gradient_button gradient27" style="width: 100px;"><div class="arrow"><a class="button_3">services</a></div></div>
    <ul class="gradient_menu gradient95">
    <li class="gradient_menuitem gradient31 first_item"><a href="transport.php" title="">Transport services</a></li>
    <li class="gradient_menuitem gradient31"><a href="cargo.php" title="">cargo</a></li>
    <li class="gradient_menuitem gradient31 last_item"><a href="courier.php" title="">courier</a></li>
    </ul></li>
  <li><div class="buttonbg gradient_button gradient27"><div class="arrow"><a href="departuretime.php" class="button_4">Departure time</a></div></div>
    <ul class="gradient_menu gradient33">
    <li class="gradient_menuitem gradient31 first_item last_item"><a href="price.php" title="">Price</a></li>
    <li class="gradient_menuitem gradient31 first_item last_item"><a href="booking.php" title="">Booking</a></li>
    </ul></li>
  <li><div class="buttonbg gradient_button gradient27" style="width: 89px;"><a href="contactus.php">Contact us<br /></a></div></li>
  </ul>
</div>
</center>

<br><br>
<div id="thbgdt" class="thbgimage">
 
<center>
<div id="thdt1">
  <div class="booking-content" style="width: 100%; border: 5px solid #123456; ">
    
      <!--header-->
  <h1>
    <span>B</span>ook
    <span>F</span>or
    <span>A</span> Ticket</h1>
  <!--//header-->
  <!-- content -->
  <div class="main-content-agile">
    <div class="sub-main-w3">
      <form action="#" method="post">
        <h2> Book Your Appointment</h2>
        <div class="form-style-agile">
          <input placeholder="Your Name" name="Name" type="text" required="">
        </div>
        
        <div class="form-style-agile">
          <input placeholder="Contact Number" name="Number" type="text" required="">
        </div>
        <div class="form-style-agile">
          <select class="category" required="">
            <option value="">Destination</option>
            <option value="">KIGALI TO RUBAVU</option>
            <option value="">KIGALI TO RUHENGERI</option>
            <option value="">RUHENGERI TO KIGALI</option>
            <option value="">RUHENGERI TO RUBAVU</option>
            <option value="">RUBAVU TO KIGALI</option>
            <option value="">KIGALI TO GITARAMA</option>
            <option value="">GITARAMA TO KIGALI</option>
            <option value="">RUHANGO TO KIGALI</option>
            <option value="">KIGALI TO NYANZA</option>
            <option value="">NYANZA TO KIGALI</option>
          </select>
        </div>
        <div class="form-style-agile">
          <input  placeholder="Select Date" name="date" type="date" value="" >
        </div>
        <div class="form-style-agile">
          <select class="category" required="">
            <option value="">select time </option>
            <option value="">7h00am</option>
            <option value="">8h00am</option>
            <option value="">9h00am</option>
            <option value="">10h00am</option>
            <option value="">11h00am</option>
            <option value="">12h00</option>
            <option value="">1h00pm</option>
            <option value="">2h00pm</option>
            <option value="">3h00pmpm</option>
            <option value="">4h00pm</option>
            <option value="">5h00pm</option>
            <option value="">6h00pm</option>
            <option value="">7h00pm</option>
          </select>
        </div>
        <input type="submit" name="cbook" value="Book">
      </form>
    </div>
  </div>
  <!-- //content -->

<?php
$con=mysqli_connect("localhost", "root", "", "kgcoach");
  
  //a method for sending message to the the database


   
    if(isset($_POST['cbook'])){
      $name =$_POST['name'];
      $number =$_POST['number'];
      $destination =$_POST['destination'];
      $date =$_POST['date'];
                        $time =$_POST['time'];
                       

      //mysql statement
      $book = "INSERT INTO booking (name, cnumber, destination, cdate, ctime) VALUES ('$name', '$number', '$destination', '$date', '$time')";
      //For executing the mysql query
      $bsql_query = mysqli_query($con, $book);

      //checking whether the insert is succesful or not
      if($bsql_query){
        $message = "Booking was Successfull";
      }else{
        $message= "Booking failed!! Please try again";
      }

      echo $message;
    }


?>

  <!-- footer -->
  <div class="footer">
    <p>&copy; 2018 Kigali Coach. All rights reserved | Design by
      <a href="http://w3layouts.com">W3layouts</a>
    </p>
  </div>
  <!-- //footer -->


  <!-- js -->
  <script src="js/jquery-2.1.4.min.js"></script>

  <!-- date-->
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <script src="js/jquery-ui.js"></script>
  <script>
    $(function () {
      $("#datepicker,#datepicker1").datepicker();
    });
  </script>
  <!-- //date -->

  <!-- time -->
  <script src="js/wickedpicker.js"></script>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script>
    $('.timepicker').wickedpicker({
      twentyFour: false
    });
  </script>
  <link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
  </div>

</div>
</center>

</div>
<br>




<div id="thd3"></div>
<div id="thd4"></div>
</body>
<center>
<footer>
  COPY &#169 RIGHT RESERVED <br>
DESIGNED BY: UMUTONI THAMAR
</footer></center>
</html>
