
<!DOCTYPE html>
  <html>
     <head>
      <meta charset = "utf-8">
      <title> N.J. Luxury Resort </title>
      
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


        .navbar {
  width: 100%;
  overflow: auto;
}
.button1 {
        background-color:blue;
        color:white;
        border-radius: 2px
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
        padding-bottom: 0px;
        padding-top: 0px;

        }
        
      </style>
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
       integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
      <a class="nav-link" href="activities,php">Activities</a>
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
<?php
?>

        <h2> We Treasure Your Comments </h2>

        <form action  = "comments1.php" method = "post">

          <p>
            Name:
            <input name = "name" autofocused>
          </p>
          
          <p>
            Phone:
            <input name  = "phone" >
          </p>
                    
           <p>
            Email:
            <input name = "email" >
          </p>
          
          
           <p>
            Comments:
            <input name = "comment"/>
          </p>

          <input type="submit" class = "button1" value="Submit Comments">

          </form>    
          <footer class = "bottom">
        <p align = "center"> Copyright &copy 2023 N.J. Luxury Resort </p>
        <p align = "center">Email: whitakerd2@mail.montclair.edu</p>
    </footer>
</body>
</html>