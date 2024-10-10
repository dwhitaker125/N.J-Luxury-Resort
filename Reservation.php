<?php 

$first = $_POST['first'];
$last = $_POST['last'];
$address = $_POST['address'];

$city = $_POST['city'];
$zip = $_POST['zip'];
$state = $_POST['state'];

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];


$payment = $_POST['payment'];
$people = $_POST['people'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$number = $_POST['number'];

$request =  $_POST['request'];


$tax = 1.07;
$room = $_POST['room'];

?>

<!DOCTYPE html>
  <html>
     <head>
      <meta charset = "utf-8">
      <title> N.J. Luxury Resort </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
       integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
        label {
          display: inline-block;
          width: 150px ;
        }

        h1 {
            text-shadow: 1px 1px 2px dimgray;
            text-align: center;
        }
        li {
            color:white;
        }

        body {
            background-color:lightgray;
        }
        .navbar {
  width: 100%;
  overflow: auto;
}


.navbar a {
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}


.bottom {
        border-radius: 1px;
        background-color:gray;
        color:white;
        }

      </style>
        <link rel="stylesheet" href = "Reservation1.php">

    </head>
    <body>
      

      <h1>N.J. Luxury Resort</h1>
      <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <img src="beach-sm.png" alt="logo" style="width: 64px;">   
  </a>  

  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="yurts.php">Yurts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="activities.php">Activities</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Reservation1.php">Reservation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Comments.php">Comments</a>
    </li>
  </ul>
  </div>  
</nav>
        
      <h2> <?php echo "Thank you $first $last for your Reservation" ?> </h2>

      <label> First Name</label>
      <span> <?php echo $first ?> </span> <br>

      <label> Last Name</label>
      <span> <?php echo $last ?> </span> <br>

      <label> Number and Street</label>
      <span> <?php echo $address ?> </span> <br>
        
      <label> City</label>
      <span> <?php echo $city ?> </span> <br>

      <label> State</label>
      <span> <?php echo $state ?> </span> <br>

      <label> Zip Code</label>
      <span> <?php echo $zip?> </span> <br>
        
      <label> Check-In Date</label>
      <span> <?php print $date1 ?> </span> <br>

      <label> Check-Out Date</label>
      <span> <?php print $date2 ?> </span> <br>

      <label> Number of People</label>
      <span> <?php echo $people ?> </span> <br>

      <label> Number Of Days</label>
      <span> 
        <?php
$date1 = new DateTime($_POST['date1']);
$date2 = new DateTime($_POST['date2']);
$interval = $date2->diff($date1);        
print $interval->format('%d')
?> </span> <br>

      <label> Phone Number</label>
      <span> <?php echo $tel ?> </span> <br>

      <label> E-Mail Address</label>
      <span> <?php echo $email ?> </span> <br>

      <label> Credit Card</label>
      <span> <?php echo $payment ?> </span> <br>

      <label> Card Number</label>
      <span> <?php echo $number ?> </span> <br>

      <label> Special Requests</label>
      <span> <?php echo $request ?> </span> <br>

      <label> Total Charges</label>
      <span> <?php 

      if($_POST['room'] === 'Queen') {
      $total = (150* $interval->d) * $tax;
      $total_price =
        "$".number_format($total, 2);

        echo $total_price;
    } 
    
    if($_POST['room'] === 'King') {
       $total = (200* $interval->d) * $tax;
       $total_price =
        "$".number_format($total, 2);

        echo $total_price;
 

    } 

    if($_POST['room'] === 'Suite') {
      $total = (300 * $interval->d) * $tax;
      $total_price =
      "$".number_format($total, 2);

      echo $total_price;

    } 
      ?> </span> <br>

<footer class = "bottom">
        <p align = "center"> Copyright &copy 2023 N.J. Luxury Resort </p>
        <p align = "center">Email: whitakerd2@mail.montclair.edu</p>
    </footer>
    </body>