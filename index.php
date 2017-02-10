<!--
Created by: Mahmoud Enani
Class: CSCI E-15
Assignment: Assignment 1
Completed: 02/09/2017
Purpose: One page bio with php random quote generator 
-->


<?php require ('scripts/quoteGenerator.php'); ?>
<!DOCTYPE html>
<html>
<head>

    <title>Mahmoud Enani</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link href='css/main.css' rel='stylesheet'>

</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1>Mahmoud Enani</h1>
      </div>
    </div>

    <div class="row" id="top">
      <div class="col-md-12">
        <img src='images/Arashiyama_MEnani.jpg' alt='Mahmoud Enani - Arashiyama Bamboo Forest (Kyoto, Japan)'>
      </div>
    </div>

    <div class="row"  id="bottom">
      <div class="col-md-12">
        <h2>ABOUT ME</h2>
        <p>
          My name is Mahmoud Enani. I was born in Fort Lee, NJ and but have lived in Gainesville, FL for several years. I received
          my Bachelors of Science in Statistics from the University of Florida and I'm currently employed by the University as an Application Programmer.
          I am currently pursuing the Web Technologies Certificate and hope to complete the Masters in Digital Media Design. I love to code, run, read fiction,
          travel, and play videogames (when I have the time).
        </p>
        <h2>RANDOM QUOTE</h2>
        <blockquote>
          <?php echo $random; ?>
        </blockquote>
      </div>
    </div>
  </div>
</body>
</html>
