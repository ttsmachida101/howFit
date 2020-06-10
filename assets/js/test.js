
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}

function lengthConverter(valNum) {
  document.getElementById("outputMeters").innerHTML = valNum / 0.0022046;
}

/*height conversions*/
function heightConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputFeet = document.getElementById("inputFeet");
  var inputcm = document.getElementById("inputcm");
 
  if (source=="inputFeet") {
    inputcm.value=(valNum/0.032808).toFixed();
  }
}

/* Weight Conversions */
function weightConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var input = document.getElementById("inputFeet");
  var inputcm = document.getElementById("inputcm");
 
  if (source=="inputFeet") {
    inputcm.value=(valNum/0.032808).toFixed();
  }
}
