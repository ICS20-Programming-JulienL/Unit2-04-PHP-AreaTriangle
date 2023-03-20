<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My second webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>User Input with PHP :  Area of a Triangle</title>
  </head>
  <!--Header and Text-->
  <body>
    <center>
    <?php echo "<h1> Area of a Triangle</h1>" ?>
    <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
    <?php echo "<h4>Course: ICS20 Promgramming</h4>" ?>
    <br>
    <br>
    <!--User Input-->
    <?php echo "<h3>Please enter the following:</h3>" ?>
    <form action="./results.php" method="post" target="result">
      <label for="theBase">Base</label>
      <input type="number" id="base" placeholder="Enter the base" name="base"><br><br>
      <label for="theHeight">Height</label>
      <input type="number" id="height" placeholder="Enter the height" name="height"><br><br>
      <input type="submit" value="Enter">
    </center>
			<br><br>	
    </form>
<div id="result"></div>
    <center>
      <!--Final Result of User Input-->
      <iframe id="result" name="result">
        The area of the triangle is  " + $area + cm<sup>2</sup>
      </iframe>
    </center>
  </body>
</html>