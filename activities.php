<!DOCTYPE html>
<html>
  <head>
    <title>John's Resort</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            color:black;
        }

        .button1 {
        background-color:blue;
        color:white;
        border-radius: 2px
        }

        .button2 {
        background-color:green;
        color:white;
        border-radius: 2px;
        }

        .bottom {
        border-radius: 1px;
        background-color:gray;
        color:white;
        }
        .navbar a {
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 17px;
    }
    
      </style>
    </head>

  <body>
    
  <main>
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

      <section>
        <h2>Activies at Jersey Shore</h2>
        <div class = "col-xs-4">
        <a href= "pingpong.jpg">
        <img src="pingpong.jpg" title="pingpong"
        height ="auto"
        width = "500"></a>

        <a href= "gold.jpg">
        <img src="gold.JPG" title="golf"
        height ="auto"
        width = "500"></a>

        <a href= "skydiving.jpg">
        <img src="skydiving.jpg" title="skydiving"
        height ="auto"
        width = "500"></a>

        <a href= "swordplay.jpg">    
        <img src="swordplay.jpg" title="swordplay"
        height ="auto"
        width = "500"></a>
   </div>
   <footer class = "bottom">
        <p align = "center"> Copyright &copy 2023 N.J. Luxury Resort </p>
        <p align = "center">Email: whitakerd2@mail.montclair.edu</p>
    </footer>
      </section>
    </main>
    <script src="script.js"></script>

  </body>
</html>