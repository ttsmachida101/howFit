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
    <section class="header">
        <div class="container-sm">
            <div class="jumbotron vertical-center">
                <div class="mx-auto">
                    <h class="display-2">How Fit Are You?</h>
                    <h4 class="lead">The first step in your fitness journey | Use this simple App to see how fit you
                        are</h4>
                </div>
            </div>
        </div>
    </section>

    <!--------Data Collection Container-------->
    <section class="data collection">
        <div class="container" id="dataCollection">

            <div class="workoutimage">



                <!----Form Section Begins---->
                <div class="form-group row">
                    <form action="calculation.php" method="POST">
                        <h3 class="text-center"><u>Enter Your Details</u> </h3>
                        <div>

                            <!----GENDER---->
                            <br>


                            <div class="form-row">
                                <div class="col-md-6">
                                    <p class="text"> Please enter your gender :</p>
                                </div>
                                <div class="form-check form-check-inline">

                                    <div class="col-md-6">
                                        <label for="male">Male</label>
                                        <input class="form-check-input" type="radio" id="male" name="gender"
                                            value="male" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="female">Female</label>
                                        <input class="form-check-input" type="radio" id="female" name="gender"
                                            value="female">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="other">Other</label>
                                        <input class="form-check-input" type="radio" id="other" name="gender"
                                            value="other">
                                    </div>

                                </div>
                            </div>

                            <br><br>

                            <!----Measurements---->
                            <div>
                                <div class="form-row">
                                    <div class="col-sm">
                                        <label for="age"><b> Enter your age</b></label><br>
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" min="1" name="age" required><br><br>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-sm">
                                        <label for="height"><b> Enter your height</b></label><br>
                                    </div>
                                    <div class="col-sm">
                                        <input type="number" id="inputCMeters" class="form-control" step="any" min="50"
                                            name="heightCm" placeholder="CM" required
                                            oninput="heightConverter(this.id,this.value)"
                                            onchange="heightConverter(this.id,this.value)"><br><br>

                                    </div>
                                    <div class="col-sm">
                                        <input type="number" id="inputFeet" class="form-control" step="any" min="2"
                                            name="heightFt" placeholder="Feet"
                                            oninput="heightConverter(this.id,this.value)"
                                            onchange="heightConverter(this.id,this.value)">
                                        <br><br>

                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm">
                                    <label for="weight"><b> Enter your weight</b></label><br>
                                </div>
                                <div class="col-sm">
                                    <input type="number" id="inputKg" class="form-control" name="weightKg" step="any"
                                        min="5" placeholder="Kg" required oninput="weightConverter(this.id,this.value)"
                                        onchange="weightConverter(this.id,this.value)">
                                    <br><br>

                                </div>

                                <div class="col-sm">
                                    <input type="number" id="inputLb" class="form-control" name="weightLb" step="any"
                                        min="5" placeholder="Lb" oninput="weightConverter(this.id,this.value)"
                                        onchange="weightConverter(this.id,this.value)">
                                </div>
                            </div>


                            <!---- Workout Activity---->
                            <div class="form-row">
                                <div class="col-md-4">
                                    <p><b>How many times per week do you work-out?</b></p>
                                </div>
                                <div class="form-check form-check-inline">


                                    <div class="col-md-6">
                                        <label for="zero">0 -1 times per week</label>
                                        <input class="form-check-input" type="radio" id="zero" name="workout"
                                            value="zero" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="two to three times"> 2- 3 times per week</label>
                                        <input class="form-check-input" type="radio" id="two to three times"
                                            name="workout" value="two to three times">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="more than three times"> More than 3 times per week</label>
                                        <input class="form-check-input" type="radio" id="more than three times"
                                            name="workout" value="more than three times">

                                    </div>
                                </div>
                            </div>



                            <br></br>

                            <!----Daily Activity---->

                            <div class="form-row">

                                <div class="form-check form-check-inline">
                                    <div class="col-md-4">
                                        <p><b>How active are you on a daily baisis?</b></p>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="Not active">Not very active - ( Office Job - I spend a lot of time
                                            sitting)</label>
                                        <input class="form-check-input" type="radio" id="Not active" name="activity"
                                            value="Not Active" required>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="moderately active">Moderately active - ( I usually take long
                                            walks)</label>
                                        <input class="form-check-input" type="radio" id="moderately active"
                                            name="activity" value="moderately active">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="very active">Very Active - ( I Spend the day on my feet)</label>
                                        <input class="form-check-input" type="radio" id="very active" name="activity"
                                            value="very active">

                                    </div>
                                </div>
                            </div>

                            <br></br>
                            <div class="row">
                                <div class="col text-center">
                                    <input type="submit" class="btn btn-success btn-lg" name="submit" value="submit">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!---------Scripts--------->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="./assets/js/conversions.js"></script>
</body>

</html>