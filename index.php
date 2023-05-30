<!DOCTYPE html>
<!-- Assign-05-PHP-AdditionTable -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Addition table">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<!-- Favicon -->
  	<link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  	<link rel="manifest" href="./fav_index/site.webmanifest">
  
  	<!-- Link to CSS file -->
  	<link rel="stylesheet" href="./css/style.css">
  
  	<!-- Google's MDL -->
  	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.yellow-blue.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

    <!-- Title -->
  	<title>Addition table</title>
  
  </head>
  <body>

    <!-- Header -->
  	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  		<header class="mdl-layout__header">
  			<div class="mdl-layout__header-row">
  				<span class="mdl-layout-title">Addition table</span>
  			</div>
  		</header>
  	</div>
  	<main class="mdl-layout__content">
  		<br>
      <br>
      <br>
      <img src="./images/addition.png" alt="addition" height="230" width="300">
      
      <!-- Enter an integer -->
      <h6>Enter an integer:</h6>
      <form action="./results.php" method="post" target="results">
        <label for="user-number">Enter an integer:</label>
      <input type="number" id="user-number" placeholder="Enter an integer..."  name="user-number">
      <br>

      <!-- Enter your min -->
      <h6>Enter your minimum number:</h6>
        <label for="user-min">Enter your minimum number:</label>
        <input type="number" id="user-min" placeholder="Enter your min..."  name="user-min">
        <br>

      <!-- Enter your max -->
      <h6>Enter your maximum number:</h6>
        <label for="user-max">Enter your maximum number:</label>
        <input type="number" id="user-max" placeholder="Enter your max..."  name="user-max">
        <br>
        <input type="submit" value="Display sums">
      </form>
      <p>
        <iframe id="results" name="results">
        </iframe>
      </p>
    </main>
     <p><b>Here is a fun fact!</b>
      <br>
      The addition symbol was invented in the 16th century. 
      <br>
      Before this, people had to write math equations using full sentences, making them very time consuming to write.</p>

      <!--embed video-->
      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="788.54" height="443" type="text/html" src="https://www.youtube.com/embed/QUOJA8Q9kNI?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=148&vq=hd1080&origin=https://youtubeembedcode.com">
  </body>
</html>