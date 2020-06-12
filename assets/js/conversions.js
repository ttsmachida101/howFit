
/*-------------------height conversions---------------------------------*/
function heightConverter(source, valNum) {
  valNum = parseFloat(valNum);
  var inputFeet = document.getElementById("inputFeet");
  var inputCMeters = document.getElementById("inputCMeters");
 
  if (source=="inputFeet") {
   inputCMeters.value=(valNum/0.032808).toFixed(2);
  }

   if (source=="inputCMeters") {
     inputFeet.value = (valNum * 0.032808).toFixed(2);
  }
    /*------------------- End Of Height Conversions----------------------------------*/
}

/*-------------------Weight Conversions----------------------------------*/
function weightConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputLb = document.getElementById("inputLb");
  var inputKg = document.getElementById("inputKg");
 
  if (source=="inputLb") {
    inputKg.value=(valNum*0.453592).toFixed(2);
  }
   if (source=="inputKg") {
    inputLb.value=(valNum*2.20462).toFixed(2);
  }
  /*------------------- End Of Weight Conversions----------------------------------*/
}