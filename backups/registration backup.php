<!DOCTYPE html>
<!-- saved from url=(0051)https://v4-alpha.getbootstrap.com/examples/navbars/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">

    <title>Navbar Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbars/">

    <!-- Bootstrap core CSS -->
    <link href="./Navbar Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Navbar Template for Bootstrap_files/navbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mycustomstyle.css">
  </head>

  <body>

  <?php include 'nav.php'; ?>
  

  

      <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
          <h1>Register to the company</h1>
          <h4>to have an auto-ticketing system</h4>
           <form id="" action="connect.php" method="post">
                    <div id="">

                                    <div class="form-group">
                                      <label for="userName" class="masthead-subheading font-weight-light mb-0">Username</label>
                                      <input type="text" class="form-control" id="userName" name="userName" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="firstName" class="masthead-subheading font-weight-light mb-0">First Name</label>
                                      <input type="text" class="form-control" id="firstName" name="firstName" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="lastName" class="masthead-subheading font-weight-light mb-0">Last Name</label>
                                      <input type="text" class="form-control" id="lastName" name="lastName" required>
                                    </div>

                                     <div class="form-group">
                                      <label for="password" class="masthead-subheading font-weight-light mb-0">Password</label>
                                      <input type="password" class="form-control" id="password" name="password" required>
                                    </div>

                                    <div class="form-group">
                                      <label for="email" class="masthead-subheading font-weight-light mb-0">Email (optional)</label>
                                      <input type="text" class="form-control" id="email" name="email" placeholder="">
                                    </div>

                                    <table style="width:100%">
                                <tr>
                                 <td><div class="form-group">
                                      <label for="Address" class="masthead-subheading font-weight-light mb-0">Address</label>
                                      <input type="text" class="form-control" id="street" name="street" placeholder="Street">
                                    </div></td>
                                   <td><div class="form-group">
                                      <label for="Address" class="masthead-subheading font-weight-light mb-0"> </label>
                                      <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Municipality">
                                    </div></td> 
                                          </tr>
                                          <tr>
                                 <td><div class="form-group">
                                      
                                      <input type="text" class="form-control" id="province" name="province" placeholder="Province">
                                    </div></td>
                        
                                          </tr>
                                      </table>

                                    <div class="form-group">
                                      <label for="gender" class="masthead-subheading font-weight-light mb-0">Gender</label>
                                      <select id="gender" class="form-control" name="gender" required>
                                          <option value=" "></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                    <label for="birthDate" class="masthead-subheading font-weight-light mb-0">Birth date</label>
                                     <input type="date" class="form-control" id="birthDate" name="birthDate" required>
                                    
                                    </div>
                                    <input class="btn btn-primary" type="submit">
                                      </div>

                                    

                                </form>
         
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Navbar Template for Bootstrap_files/jquery-3.1.1.slim.min.js.download" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Navbar Template for Bootstrap_files/tether.min.js.download" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="./Navbar Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Navbar Template for Bootstrap_files/ie10-viewport-bug-workaround.js.download"></script>
  

</body></html>