<?php require('logic.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
	<title>Project 1 - Tatiana Flint</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <link href="styles/global.css" rel="stylesheet">
</head>
<body>

  <div class="container aligncenter">
    <h1>Tatiana Flint</h1>
    <img class="aligncenter" src="images/tanya.jpg" alt="Tanya">
    <h2>About Me</h2>
    <p>I like to go snowboarding, although with the busy schedule it’s been hard to get out to the slopes this year. I enjoy traveling and visiting new places. I am planning a trip to the Czech Republic in May, and possibly visit Germany, Austria, and Hungry while I am there!</p>
    <h2>Random Quote</h2>
    <blockquote><?=$selectedQuote?></blockquote>
  </div>
</body>
</html>
