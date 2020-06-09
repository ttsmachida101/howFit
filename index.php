<?Php
echo ("Server Running");
?>
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>How Fit</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    
    
    <body>
    <?Php
echo ("Server Running");
?>
<html>
      <div>
       <form action = "calculation.php" method = "POST">

       <div class = "container">
       <h1>
        Enter Your Details 
       </h1>
       <div>   
         <p>
<br>
<b>Please enter your gender</b></p>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label></div>
<div>
<br>

<div>
    <label for = "height"><b>Enter your height</b></label>
    <input type = "number" name = "height"  >
    <label for = "weight"><b>Enter your weight</b></label>
    <input type = "number" name = "weight">
    <label for = "age"><b>Enter your age</b></label>   
    <input type = "number" name = "age">
</div>
<div>
<p><b>How many times per week do you work-out?</b></p>
<input type="radio" id="zero" name="workout" value="zero">
<label for="zero">0 -1 times per week</label><br>
<input type="radio" id="two to three times" name="workout" value="two to three times">
<label for="two to three times"> 2- 3 times per week</label><br>
<input type="radio" id="more than three times" name="workout" value="more than three times">
<label for="more than three times"> More than 3 times per week</label>
</div>

<div>
<p><b>How active are you on a daily baisis</b></p>
<input type="radio" id="Not active" name="activity" value="Not Active">
<label for="Not active">Not very active(Office Job - I spend a lot of time sitting)</label><br>
<input type="radio" id="moderately active" name="activity" value="moderately active">
<label for="moderately active">Moderately active(I usually take long walks)</label><br>
<input type="radio" id="very active" name="activity" value="very active">
<label for="very active">Very Active (I Spend the day on my feet)</label>
</div>
</div>
</div>
       
       
       
       
       </form> 
        
        <script src="" async defer></script>

        </div>
    </body>
</html>