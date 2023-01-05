<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
  <head>
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="css/bootstrap.min.css"> 
     <title>Customer Registration | PHP</title>
      <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>

<body bgcolor="blue">

    <div>
      <?php
      if(isset($_POST['create'])){
      
      $firstname      =$_POST['firstname'];
      $lastname       =$_POST['lastname'];
      $id             =$_POST['id'];
      $email          =$_POST['email'];
      $phonenumber    =$_POST['phonenumber'];
      $password       =$_POST['password'];

        $sql="INSERT INTO customer_details (firstname, lastname, id, email, phonenumber, password ) VALUES(?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$firstname, $lastname, $id, $email, $phonenumber, $password]);

        if($result){
          echo 'Successfully saved.';
        }else{
          echo 'There was an error while saving the data.';
        }
      }
      ?>
    </div>
    <div>
        <form action="signup.php" method="post">
            <div class="container">        
          
            <div class="row">
              <div class="col-sm-6">
                <h2><p><i>Luxury Hotel Management System</i></p></h2> 
                <h3><p>CUSTOMERS REGISTRATION FORM</p></h3>
                <p>Fill up the form with the correct credentials</p>
                <hr class="mb-6">
                <label for="firstname"><b>First Name</b></label>
                <input class="form-control" id="firstname" type="text"  name="firstname" required>
            
                <label for="lastname"><b>Last Name</b></label>
                <input class="form-control" id="lastname" type="text"  name="lastname" required>

                <label for="id"><b>Customer's ID</b></label>
                <input class="form-control" id="id" type="number"  name="id" required>

                <label for="email"><b>Email Address</b></label>
                <input class="form-control" id="email" type="email"  name="email" required>

                <label for="phonenumber"><b>Phone Number</b></label>
                <input class="form-control" id="phonenumber" type="number"  name="phonenumber" required>

                <label for="password"><b>Password</b></label>
                <input class="form-control" id="password" type="password"  name="password" required>
                <hr class="mb-3">

                <input class="btn btn-primary" type="submit"  name="create" value ="Create account">
                <input class="btn btn-primary" type="submit"  name="cancel" value ="Cancel"><a href="register.php"></a>
            
                    <p>Do you already have an account? <a href="login.php">Sign in</a> </p>
                    <p><a href="reset.html">Forgot Your Password?</a></p>
                    <h6><p>For Staff Registration click    <a href="staff.php"> staff </a> </p></h6>
                    <h6><p>Thanks for choosing us to nourish you.</p></h6>                
                </div>
              </div>
            </div>
          </div>
          <!-- FOOTER -->
    <footer id="main-footer">
      <div class="container">
        <div class="row center-xs center-sm center-md center-lg">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p><marquee direction="left" behaviour="alternate"> Luxury Hotel Management System &copy; 2022</marquee></p>
          </div>
        </div>
      </div>
    </footer>
        </form>
      </div>

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
  </body>
</html>