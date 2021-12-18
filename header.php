<!doctype html>
<html lang="en">
  <head>
    <title>DPC</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		
/* Dropdown Button */
.dropbtn {
	background: white;
	color: black;
	padding: 16px;
	font-size: 16px;
	border: none;
  }
  
  /* The container <div> - needed to position the dropdown content */
  .dropdown {
	position: relative;
	display: inline-block;
	background-color: black;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
	display: none;
	position: absolute;
	background-color: #f1f1f1;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1000;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
  }
  
  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #ddd;}
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {display: block;}
  
 .header{
	 position: relative;
 }
 
	</style>

</head>
  <body>
      <?php require 'common.php' ?>


	  <header>
		  <div class="container header my-1" style="height: 100px;">
			<ul class="">
				<li class="d-inline float-left mx-3"><img src="img/loog.jpg" alt="" class="img-fluid" height="100" width="100"></li>
				<li class="d-inline float-right mx-3"><img src="img/loog.jpg" alt="" class="img-fluid" height="100" width="100"></li>
				<li class="d-inline float-right mx-3"><img src="img/loog.jpg" alt="" class="img-fluid" height="100" width="100"></li>
			</ul>
		  </div>
		  
		  <nav class="navbar navbar-expand-sm" style="position: sticky; top:0; background-color:white; border-top:1px solid rgb(58, 58, 58); height: 80px;">
			  <div class="container">

				  <ul class="navbar-nav">
					  <li class="navbar-item"><div class="dropdown">
						<button class="dropbtn "><a href="index.php"  style="text-decoration: none; color:black">Home</a></button>
						
					  </div></li>
					  <li class="navbar-item">
						  <div class="dropdown">
							  <button class="dropbtn">About US</button>
							  <div class="dropdown-content">
								  <a href="#">Link 1</a>
								  <a href="#">Link 2</a>
								  <a href="#">Link 3</a>
								</div>
							</div>
						</li>
						<li class="navbar-item">
							<div class="dropdown">
								<button class="dropbtn">Specialties</button>
								<div class="dropdown-content">
									<a href="#">Link 1</a>
									<a href="#">Link 2</a>
									<a href="#">Link 3</a>
								</div>
							</div>
						</li>
						<li class="navbar-item">
							<div class="dropdown">
								<button class="dropbtn">Patient Care</button>
								<div class="dropdown-content">
									<a href="#">Link 1</a>
									<a href="#">Link 2</a>
									<a href="#">Link 3</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				</nav>
			</header>
			
			

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>