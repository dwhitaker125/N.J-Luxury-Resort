<!DOCTYPE html>
  <html>
     <head>
      <meta charset = "utf-8">
      <title> N.J. Luxury Resort </title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
       integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin = "anonymous">
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
        padding-bottom: 0px;

        }

      </style>
      
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
<br>
      <h2>Reservation at N.J. Luxury Resort</h2>

        <form action  = "Reservation.php" method = "post">

          <p>
            First Name:
            <input name = "first" autofocused required/>
          </p>
          
          <p>
            Last Name:
            <input name  = "last" required/>
          </p>
                    
           <p>
            Number & Street:
            <input name = "address" required/>
          </p>
          
          
           <p>
            City:
            <input name = "city" required/>
          </p>

          <p>
            State:
          <select name = "state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
    </p>
            
          <p>

            Zip Code:
            <input type = "text" name = "zip" required/>
          </p>
          
          
          <p>

            Check-In Date:
            <input type = "date" name = "date1" required/>

          </p>

          
          <p>
            Check-Out Date:
            <input type = "date" name = "date2" required/>
          </p>

          <p>
            Number of People:
            <input type = "text" name = "people" required/>
          </p>
          <p>
              Room Type:
                <select name = "room" id = "room">
                  <option value= "Queen" name = "queen">Queen</option>
                	<option value= "King" name = "king">King</option>
                	<option value= "Suite" name = "suite">Suite</option>

                </select>
          </label>
           </p>

           <p>

            Phone Number:
            <input type = "text" name = "tel" placeholder = "(###) ###-####"
            pattern = "\(\d{3}\) + \d{3}\ - \d{4}\" required/>
            (###) ###-####
          </p>
          
           <p>
            E-Mail Address:
            <input type = "text" name = "email" placeholder = "name@domain.com" required/>
          </p>

          <p>

            Credit Card:
            <select name = "payment" id = "payment">
                  <option value="MasterCard">MC</option>
                	<option value="Visa">VISA</option>
                	<option value="American Express">AMEX</option>
                	<option value="">Discover</option>
            </select>

          </p>
          
          <p>
 
            Card Number:
            <input type = "number" name = "number" 
            required/>

          </p>
    
        <h3>
            Special Requests:
            <input type = "special requests" name = "request" placeholder = "Enter your special requests here">
          
        </h3>

        

        <input type="submit" value="Reserve a Room" class = "button1">
        <input type="reset" value="Clear" class = "button2">


        </form>

        <footer class = "bottom">
        <p align = "center"> Copyright &copy 2023 N.J. Luxury Resort </p>
        <p align = "center">Email: whitakerd2@mail.montclair.edu</p>
    </footer>
    </body>