  <?Php
echo ("Server Running");

if (isset ($_POST['submit']))
{
    echo("Information submitted");
}
?>


<html>
    <head>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>How Fit Are You</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel=stylesheet href="./assets/css/all.min.css">
       <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    </head>

     <body>
<!--------------Header---------------->
<section class = "header">
 <div class = "container-fluid">
<div class="jumbotron fa-align-justify">
 <div class="mx-auto" style="width: 600px;">
  <h class="display-2">How Fit Are You?</h>
  <p class="lead">The first step in your fitness journey | Use this simple App to see how fit you are</p>
  </div>
</div>
</div>
</section>

<div class = "container">
<h2 class="text-center"> Your Results Are As Follows </h2>
<form action = "index.php" method = "POST">
<input type = "submit" class="btn btn-success btn-lg" name ="submit" value = "Try Again">
</div>


</div>




</body>
</html>
