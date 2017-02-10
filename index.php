<?php require ('quoteGenerator.php'); ?>
<!DOCTYPE html>
<html>
<head>

    <title>Mahmoud Enani</title>
    <meta charset="uft-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href='css/main.css' rel='stylesheet'>

</head>
<body>

    <div class="container">

        <h1>Mahmoud Enani</h1>

        <img src='images/Arashiyama_MEnani.jpg' alt='Mahmoud Enani - Arashiyama Bamboo Forest (Kyoto, Japan)'>

        <h2>About Me</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mattis semper lobortis.
          Aliquam purus tellus, laoreet quis semper et, sodales sed risus. In congue dapibus magna.
          Proin vulputate venenatis condimentum. Curabitur at feugiat ipsum. Mauris quis ante bibendum,
          pellentesque dui eget, egestas purus. Nulla et fermentum justo, et vestibulum risus. Proin
          sagittis sem in tellus luctus, eu iaculis tellus laoreet. Phasellus sagittis libero sit amet
          odio luctus, a vehicula nunc convallis. Quisque cursus malesuada diam at maximus. Curabitur sit
          amet dolor at lacus vehicula rutrum. Fusce dictum efficitur bibendum.

        </p>

        <h2>Random Quote</h2>
        <blockquote>
		  <?php echo $random; ?>
		</blockquote>



    </div>

</body>
</html>