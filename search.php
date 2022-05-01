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
              <a href="#learn" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#questions" class="nav-link">Colleges</a>
            </li>
            <li class="nav-item">
              <a href="#instructors" class="nav-link">Programs</a>
            </li>
             <li class="nav-item">
              <a href="#learn" class="nav-link">Blog</a>
            </li>
             <li class="nav-item">
              <a href="#learn" class="nav-link">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>




<?php 
	$search_key=$_GET['search'];
	$terms=explode(" ", $search_key);
	$query="SELECT * FROM `tbl_search` WHERE ";
	$i=0;
	$code;
	foreach ($terms as $key) {
		$i++;
		if($i==1)
			$query .= "keywords LIKE '%$key%'";
		else
			$query .= " OR keywords LIKE '%$key%'";

	}

	$con=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($con,'data_college');
	$result=mysqli_query($con,$query);


	$numrows=mysqli_num_rows($result);

	if($numrows > 0){
		 ?>
		 <br><br><br>
		 <h2 style="margin-left:30px; margin-right: 30px;">According to your searches</h2>
		<table class="table" style="margin-left:30px; margin-right: 30px;">
  				<thead class="thead-dark">
   					 <tr>
     				
      				<th scope="col">Name</th>
      				<th scope="col">Contact</th>
      				<th scope="col">Website</th>
      				
    				</tr>
  				</thead>
  			
  		<?php
  		session_start();
  	
		while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			
			

			$id=$row['id'];
			$name=$row['Name'];
			// $arr[$j][0]=$row['Name'];
			$contact=$row['Contact'];
			// $arr[$j][1]=$row['Contact'];

			$web=$row['Website'];
			// $arr[$j][2]=$row['Website'];
			$code=$row['code'];
			// $arr[$j][3]=$row['description'];
			// $arr[$j][4]=$row['map'];


			// $_SESSION['name']=$arr[$j][0];
			// $_SESSION['contact']=$arr[$j][1];
			// $_SESSION['website']=$arr[$j][2];
			// $_SESSION['description']=$arr[$j][3];
			// $_SESSION['map']=$arr[$j][4];


			?>
			

			<tbody>
   				 <tr>
     				
      				<td><a href='sdc.php?code=<?php echo $row['code'] ?>' style="text-decoration: none; color: black;"><?php echo $name ?></a></td>

      				<td><?php echo $contact ?></td>
      				<td><a href="$web" target="__blank"><?php echo $web ?></a></td>


    				</tr>
    			</tbody>
    		
			<?php
			$i++;
			
		}

		?>
		</table>
		<?php 

		
	}
	else{
		echo "NO data found";
	}


	


	

?>
</body>
</html>



	