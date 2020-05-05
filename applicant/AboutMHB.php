<!DOCTYPE HTML>
<html>
<title>About MHB Website </title>
<?php
include('../HF/headerMHB.php') ?>
<link rel="stylesheet" type="text/css" href="../css/about-us-1.css">
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Micro Housing Booking</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="AboutMHB.php">About Us</a></li>
			<li><a href="ViewResidence.php">View Residence</a></li>
			<li><a href="ViewApplication-Officer.php">View Application</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $_SESSION['username']; ?>!<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="Profil.php">Profile</a></li>
					<li><a href="logout.php" >Logout</a></li>
			</li>
		</ul>
	</div>
</nav>
<div class="ct-pageWrapper" id="ct-js-wrapper">
  <section class="company-heading intro-type" id="parallax-one">
    <div class="container">
      <div class="row product-title-info">
        <div class="col-md-12">
          <center><h1>About Us</h1></center>
          <br><br><br>
        </div>
      </div>
    </div>
    <div class="parallax" id="parallax-cta" style="#"></div>
  </section>
  <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
    <div class="container text-center">
      <h2>WHAT DRIVES US</h2>
      <div class="col-md-8 col-md-offset-2">
        <div class="red-border"></div>
        <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">
          Micro-housing System: One Solution into Millennials' Housing Crisis is
           a project developed to provide information regarding micro-housing
           in Kuala Lumpur. The micro-housing itself is a help offered by Kuala
            Lumpur City Hall (DBKL) by providing affordable rental prices.
        </p>
        <h3>About Micro Housing Booking system</h3>
        <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">
          It's no secret that the capital city is a destination for people who want to
          find work or education that is more standard than where they lived before.
          No exception for major cities in Malaysia, namely Kuala Lumpur.
        </p>
        <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">
          However, as we already know that the cost of living in big cities is
          expensive. Not only daily needs but also for a place to live in the city.
           Moreover, young people and new graduates who are faced with conditions
           must have a place to live close to where they work.
        </p>
        <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">
          Micro-housing System: One Solution into Millennials' Housing Crisis is a
           project developed to provide information regarding micro-housing in Kuala
           Lumpur. The micro-housing itself is a help offered by Kuala Lumpur City
           Hall (DBKL) by providing affordable rental prices.
        </p>
      </div>
    </div>
  </section>
  <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
    <div class="container">
      <left><div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3>Team members</h3>
        </div>
			</left></div>
      <div class="row ct-u-paddingBoth20">
        <div class="col-xs-6 col-md-4">
          <div class="company-icons-white">
            <i class="fa fa-medkit" aria-hidden="true"></i>
            <p>Team Leader - Febrilia Eka Putri </p>
            <p class="company-icons-subtext ">
              (CP: febrilia74@gmail.com)
            </p>
          </div>
        </div>
      <div class="col-xs-6 col-md-4">
        <div class="company-icons-white">
          <i class="fa fa-medkit" aria-hidden="true"></i>
	          <p>Team Member - Ida Ayu Nanda Dewi Pradnyani </p>
	          <p class="company-icons-subtext ">(CP: dayunanda9@gmail.com)</p>
        </div>
      </div>
		</div>
	</div>
  </section>
</div>
</body>
</html>
