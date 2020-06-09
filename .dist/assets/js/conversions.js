function feetToCm(valNum) {
  document.getElementsByName("outputMeters").innerHTML = valNum / 0.0022046;
}

function cmToFeet(valNum) {
 document.getElementsByName("heightFeet").innerHTML=valNum*0.032808;
}

function lbToKg(valNum) {
  document.getElementsByName("weightKg").innerHTML=valNum*0.453592;
}
function kgToLb(valNum) {
  document.document.getElementsByName("weightLb").innerHTML=valNum*2.20462;
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