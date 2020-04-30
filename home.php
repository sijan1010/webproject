
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stark Cobstruction</title>
</head>
<body>
    <?php
        include 'header.php';
        
    ?>
	<div class="Gallery">
             <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
	<li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slider1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/slider2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/slider3.jpg" alt="New York" width="1100" height="500">
    </div>
	<div class="carousel-item">
      <img src="images/slider.jpg" alt="New York" width="1100" height="500">
    </div>
	<div class="carousel-item">
      <img src="images/slider4.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> 
	</div>
	<p class="Portfolio">company sucessful projects</p>
	<hr>
	<hr>
	<hr>
	<!--class Port= "Portfolio" having div PF1,PF2,PF3,PF4-->
		<div class="Upper_Port">
		<div class="PF1"><img src="images/hospital.jpg" style="width:100%;height:70%">
			<p class="P_object">Corona Hospital</p>
			<input type = "button" name = "Details" value = "Detail" style="padding:15px 32px;
				background-color: #4CAF50;"/>
		</div>
		<div class="PF2"><img src="images/coperate_building.jpg" style="width:100%;height:70%">
			<p class="P_object">Corona Hospital</p>
			<input type = "button" name = "Details" value = "Detail" style="padding:15px 32px;
			background-color: #4CAF50;"/>
		</div>
		<div class="PF3"><img src="images/tunnel_project.jpg" style="width:100%;height:70%">
			<p class="P_object">Corona Hospital</p>
			<input type = "button" name = "Details" value = "Detail" style="padding:15px 32px;
			background-color: #4CAF50;"/>
			
		</div>
		<div class="PF4"><img src="images/hydropower_image.jpg" style="width:100%;height:70%">
			<p class="P_object">Corona Hospital</p>
			<input type = "button" button class="Detail" name = "Details" value = "Detail" style="padding:15px 32px;
			background-color: #4CAF50;"/>
		</div>
	</div>
	<div class = "Lower_Port">
		<div class="PF1"><img src="images/hospital.jpg" style="width:100%;height:70%">
			<p class="P_object">Corona Hospital</p>
			<input type = "button" name = "Details" value = "Detail" style="padding:15px 32px;
				background-color: #4CAF50;"/>
		</div>
		<div class="PF2"><img src="images/coperate_building.jpg" style="width:100%;height:70%">
			<p class="P_object">Corona Hospital</p>
			<input type = "button" name = "Details" value = "Detail" style="padding:15px 32px;
			background-color: #4CAF50;"/>
		</div>
		<div class="PF3"><img src="images/tunnel_project.jpg" style="width:100%;height:70%">
			<p class="P_object">Corona Hospital</p>
			<input type = "button" name = "Details" value = "Detail" style="padding:15px 32px;
			background-color: #4CAF50;"/>
			
		</div>
		<div class="PF4"><img src="images/hydropower_image.jpg" style="width:100%;height:70%">
			<p class="P_object">Corona Hospital</p>
			<input type = "button" button class="Detail" name = "Details" value = "Detail" style="padding:15px 32px;
			background-color: #4CAF50;"/>
		</div>
	</div>
    <?php
        include 'footer.php';
    ?>