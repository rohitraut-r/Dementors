<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous"/>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link
    href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
    rel="stylesheet"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mystyle.css" />

    <title>Colleges for you</title>
  </head>


  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">COLLEGES FOR YOU</a>
         
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index1.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a href="#questions" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Colleges
                <div class="dropdown-menu bg-dark">
                  <a href="sdc.php?code=asmt" class="dropdown-item text-light bg-dark">ASMT</a>
                  <a href="sdc.php?code=sdc" class="dropdown-item text-light bg-dark">SDC</a>
                  <a href="sdc.php?code=ncc" class="dropdown-item text-light bg-dark">NCC</a>
                </div>
              </a>
              </div>

            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a href="#questions" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Programs
                <div class="dropdown-menu bg-dark">
                  <a href="#" class="dropdown-item text-light bg-dark">BIM</a>
                  <a href="#" class="dropdown-item text-light bg-dark">BCA</a>
                  <a href="#" class="dropdown-item text-light bg-dark">BBM</a>
                  <a href="#" class="dropdown-item text-light bg-dark">Bsc.CSIT</a>
                </div>
                </a>
              </div>

            </li>
             <li class="nav-item">
              <a href="#questions" class="nav-link">Blog</a>
            </li>
             <li class="nav-item">
              <a href="#contact" class="nav-link">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>

   <?php 
   	
   	$code=$_GET['code'];

    $query="SELECT * FROM tbl_search WHERE code='$code'";
    $con=mysqli_connect('localhost','root','');
		$db=mysqli_select_db($con,'data_college');
		$result=mysqli_query($con,$query);

		while ($data=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
				
          echo "<br><br><br>";
					echo "<h2 style=\" padding-left:25px;\">".$data['Name']."</h2>";				
					echo "<p style=\"font-size:20px; padding-left:25px;\">".$data['Contact']."</p>";
					echo "<center><p style=\"float:right; padding-right:25px;padding-top:50px;\">".$data['map']."</p></center>";	
					echo "<p style=\"padding-left:25px; padding-right:650px;padding-top:60px; text-align: left;\">".$data['description']."</p>";					
					}

    ?>

          <br><br><br><br><br><br>
    <section class="get-in-touch">
      <h1 class="title">Apply Now</h1>
      <form class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Name</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">E-mail</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">Course</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="phone" class="input-text js-input" type="text" required>
            <label class="label" for="phone">Contact Number</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" type="text" required>
            <label class="label" for="message">Message</label>
          </div>
          <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
          </div>
      </form>
    </section>

 </body>
 </html>
