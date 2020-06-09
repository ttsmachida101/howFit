
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>How Fit</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel=stylesheet href="./assets/css/all.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    
    
   
    <?Php
echo ("Server Running");

if (isset ($_POST['submit']))
{
    echo("Information submitted");
}
?>

 <body>
<html>

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

 <div class = "container-fluid">
 <div class = "container">
 <div class="mx-auto" style="width: 600px;">
 
   
   <div class="form-group row">
       <form action = "calculation.php" method = "POST">
       <h3> Enter Your Details </h3>
       <div>   
    
         <!----GENDER---->
<br>
<b>Please enter your gender</b></p>
<input type="radio" id="male" name="gender" value="male" required>
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label></div>
<div>
<br>

  <!----Measurements---->
<div>
    <label for = "age"><b> Enter your age</b></label><br>   
    <input type = "number"class="form-control" name = "age" required><br><br>

    <label for = "height"><b> Enter your height</b></label><br>
    <input type = "number" class="form-control" name = "height" required ><br><br>

    <label for = "weight"><b> Enter your weight</b></label><br>
    <input type = "number" class="form-control" name = "weight" required><br><br>
    
</div>
<div>

  <!---- Workout Activity---->
<p><b>How many times per week do you work-out?</b></p>
<input type="radio" id="zero" name="workout" value="zero" required>
<label for="zero">0 -1 times per week</label><br>
<input type="radio" id="two to three times" name="workout" value="two to three times">
<label for="two to three times"> 2- 3 times per week</label><br>
<input type="radio" id="more than three times" name="workout" value="more than three times">
<label for="more than three times"> More than 3 times per week</label>
</div>
  <!----Daily Activity---->
<div>
<p><b>How active are you on a daily baisis</b></p>
<input type="radio" id="Not active" name="activity" value="Not Active" required>
<label for="Not active">Not very active(Office Job - I spend a lot of time sitting)</label><br>
<input type="radio" id="moderately active" name="activity" value="moderately active">
<label for="moderately active">Moderately active(I usually take long walks)</label><br>
<input type="radio" id="very active" name="activity" value="very active">
<label for="very active">Very Active (I Spend the day on my feet)</label>
</div>
</div>

<br><br>
 <div>
<input type = "submit" class="btn btn-success btn-lg" name ="submit" value = "submit">
  </div>       
</form> 
 </div>
  </div>
  </div>
  </div>
  </div>
<script src="" async defer></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

       
    </body>
</html>