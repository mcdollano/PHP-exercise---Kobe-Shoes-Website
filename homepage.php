<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Men's Kobe Shoes - Nike.com</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- External Stylesheet -->

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:100|Assistant:200|Montserrat:900" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    
    <!-- NAVIGATION -->
    <header>
	    <nav class="navbar navbar-one" data-spy="affix">
	    	<div class="container">
	    		<div class="navbar-header">
	    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    			</button>
					<a class="navbar-brand" href="homepage.php">
						<img src="images/nike-logo.png">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">MEN</a></li>
						<li><a href="#">WOMEN</a></li>
						<li><a href="#">BOYS</a></li>
						<li><a href="#">GIRLS</a></li>
						<li><a href="#">CUSTOMIZE</a></li>
					</ul>
				</div>
	    	</div>
	    </nav>
	    <div class="container">
	    	<div class="banner-caption">
	    		<h1><span></span>
	    		<span> </span></h1>
	    		<!-- <h2>Your Everyday Companion</h2> -->
	    		<!-- <a href="download.html"><button class="btn btn-warning">DOWNLOAD NOW</button></a> -->
	    	</div>
	    </div>
	</header>

	<h2 class="heading">MEN'S KOBE BRYANT SHOES</h2>

	<div class="main-container">
		<?php
			$items = [

				[
				'name' => 'kobe1',
				 'price' => 'Php3000',
				 'description' => 'lorem ipsum',
				 'img' => 'canvas.png',
				 'category' => 'KOBE AD'

				], 

				[
				'name' => 'kobe2',
				 'price' => 'Php3500',
				 'description' => 'lorem ipsum dolor',
				 'img' => 'kobe1.png',
				 'category' => 'KOBE LOW'
				],

				[
				'name' => 'kobe3',
				 'price' => 'Php4000',
				 'description' => 'lorem ipsum dolor amet',
				 'img' => 'kobe-master.png',
				 'category' => 'KOBE HIGH'
				]

				


			];
			echo "<div class = 'row'>";
			 foreach ($items as $item) {

			 	if(!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'ALL')
			 	{
			 		echo "<div class='col-sm-4 col-md-4 col-lg-4'>";
				 		echo "<div class='item-wrapper'>";
						 	echo "<img src =" . $item['img'] . ">" . "<br>";
							echo $item['name'] . "<br>";
							echo $item['price'] . "<br>";
							echo $item['description'] . "<br>";	
						echo "</div>";	
					echo "</div>";
							
				}   
			}
			echo "</div>";	

			function create_dropdown($name,$options){
				$output = "<select name = '$name'>";
				$output .= "<option> ALL</option>";
				foreach ($options as $value) {
					if(isset($_POST[$name]) && $_POST[$name] == $value){
						$output .= "<option selected value = '$value' > $value </option>";
					} else {
						$output .= "<option value='$value'>$value</option>";
					}
				}
				$output .= "</select>";
			
				return $output;
			}

			$category = array_column($items, 'category');
			$category = array_unique($category);
			echo "<form method='POST' action=''>";
			echo create_dropdown('category',$category);
			echo "<input type='submit' name='submit' value='Search'></form>";
		?>


	</div>


		<!-- <footer>
			<span>
				Copyright &copy; 2017 Nike, Inc. All rights reserved.
			</span>
				<a href="https://www.instagram.com">
					<img src="footer-logos/instagram.png" alt="instagram">
				</a>	
				<a href="https://www.twitter.com">
					<img src="footer-logos/twitter.png" alt="twitter">
				</a>	
				<a href="https://www.facebook.com">
					<img src="footer-logos/facebook.png" alt="facebook">
				</a>		
		</footer> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>