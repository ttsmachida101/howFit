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
       <link rel="stylesheet" href="./assets/css/style.css">
    </head>




 <body>
<!--------------Header---------------->
<section class = "header">
 <div class = "container-sm">
<div class="jumbotron vertical-center">
 <div class="mx-auto">
  <h class="display-2">How Fit Are You?</h>
  <h4 class="lead">The first step in your fitness journey | Use this simple App to see how fit you are</h4>
  </div>
</div>
</div>
</section>

<!--------Data Collection Container-------->
 <section class = "data collection"> 
 <div class = "container" id = "dataCollection">

 <div class = "workoutimage"> 


 
   <!----Form Section Begins---->
 <div class="form-group row">
<form action = "calculation.php" method = "POST">
<h3 class="text-center"><u>Enter Your Details</u>  </h3>
<div>   
    
         <!----GENDER---->
<br>


<div class="form-row">
<div class="col-md-6">
<h5 class="text"> Please enter your gender :</h5>
</div>
<div class="form-check form-check-inline"> 

<div class="col-md-6">
<label for="male">Male</label>
<input class="form-check-input" type="radio" id="male" name="gender" value="male" required>
</div>

<div class="col-md-6">
<label for="female">Female</label>
<input class="form-check-input" type="radio" id="female" name="gender" value="female">
</div>

<div class="col-md-6">
<label for="other">Other</label>
<input class="form-check-input" type="radio" id="other" name="gender" value="other">
</div>

</div>
</div>

<br><br>

  <!----Measurements---->
<div>
  <div class="form-row">
    <div class="col-sm">
    <label for = "age"><b> Enter your age</b></label><br> 
     </div>  
    <div class="col">
    <input type = "number"class="form-control" name = "age" required><br><br>
</div>
</div>

    <div class="form-row">
    <div class="col-sm">
    <label for = "height"><b> Enter your height</b></label><br>
</div>
    <div class="col-sm">
   <input type = "number" class="form-control" name = "heightCm" placeholder="Cm" required ><br><br>
   </div>
     <div class="col-sm">
    <input type = "number" class="form-control" name = "heightFt" placeholder="Feet" required ><br><br>

</div>
</div>
</div>
 <div class="form-row">
    <div class="col-sm">
  <label for = "weight"><b> Enter your weight</b></label><br>
  </div>
    <div class="col-sm">
   <input type = "number" class="form-control" name = "weightKg" placeholder="Kg" required><br><br>
   </div>
    <div class="col-sm">
    <input type = "number" class="form-control" name = "weightLb" placeholder="Lb">
      </div>
</div>


  <!---- Workout Activity---->
 <div class="form-check form-check-inline">
<p><b>How many times per week do you work-out?</b></p>
<input class="form-check-input" type="radio" id="zero" name="workout" value="zero" required>
<label for="zero">0 -1 times per week</label><br>
<input class="form-check-input" type="radio" id="two to three times" name="workout" value="two to three times">
<label for="two to three times"> 2- 3 times per week</label><br>
<input class="form-check-input" type="radio"id="more than three times" name="workout" value="more than three times">
<label for="more than three times"> More than 3 times per week</label>
</div>


  <!----Daily Activity---->
<div>
    <div class="form-check form-check-inline">
<p><b>How active are you on a daily baisis</b></p>
<input class="form-check-input" type="radio" id="Not active" name="activity" value="Not Active" required>
<label for="Not active">Not very active(Office Job - I spend a lot of time sitting)</label><br>
<input class="form-check-input" type="radio"id="moderately active" name="activity" value="moderately active">
<label for="moderately active">Moderately active(I usually take long walks)</label><br>
<input class="form-check-input" type="radio" id="very active" name="activity" value="very active">
<label for="very active">Very Active (I Spend the day on my feet)</label>
</div>
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
  </section>
  
  <!---------Scripts--------->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

       
    </body>
</html>