<?Php
  
echo ("Server Running\n");
$gender = $_POST['gender'];
$age = $_POST['age'];
$height= $_POST['heightCm'];
$weight = $_POST['weightKg'];

$bmi = $weight/ ($height**2);

echo $gender. " " .$age. "  " .$height. " ".$weight. " Subject's BMI is ".$bmi;




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
    <section class="header">
        <div class="container-fluid">
            <div class="jumbotron vertical-center">
                <div class="mx-auto">
                    <h class="display-2">How Fit Are You?</h>
                    <p class="lead">The first step in your fitness journey | Use this simple App to see how fit you are
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h2 class="text-center"> Your Results Are As Follows </h2>


        <!--------------Results Table---------------->
        <table class="table table-striped table-dark">
            <thead>
                <!--------------Table Headers---------------->
                <tr>
                    <th scope="col">Metric</th>
                    <th scope="col"> Your Value</th>
                    <th scope="col"> Standard For Age Range</th>
                </tr>
            </thead>
            <!--------------Table Body---------------->
            <tbody>
                <tr>
                    <th scope="row">Approximate BMR (Base Metobilic Rate)</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row"> Approximate BMI (Body Mass Index)</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
            </tbody>
        </table>

        <!--------------Enter New Values Button---------------->
        <form action="index.php" method="POST">
            <div class="row">
                <div class="col text-center">
                    <input type="submit" class="btn btn-success btn-lg" name="submit" value="Enter New Value Set">
                </div>
            </div>
    </div>
    </div>
</body>

</html>