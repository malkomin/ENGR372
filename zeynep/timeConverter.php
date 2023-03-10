<?php
require "../components/header.php";


echo '
<html>
<head>
  <meta charset="utf-8">
  <title>Time Converter</title>
  <link rel="stylesheet" href="main.css">
  ' . getHeader("Time Converter") . '
</head>
<body style="background: #8a73ff">

  <div class="image-time">
    <img id="image1" src="time.jpg" alt="Time" width="1500px" height="670px" >
  </div>

  <div class="converter-body">
  <form name="myform" action="../database/operations.php" method="post">
    <h1 class="converter-title">Time Converter</h1>

    <input type="text" placeholder="Input" id="input" name="from_value">
    <span id="equal">=</span>
    <input type="text" placeholder="Result" id="result" name="to_value">

    <select  id="inputType" name="from_unit">
      <option value="second">second [s]>second</option>
      <option value="milisecond">milisecond [ms]</option>
      <option value="minute">minute[min]</option>
      <option value="hour">hour</option>
      <option value="microsecond">microsecond</option>
      <option value="nanosecond">nanosecond</option>
    </select>

    <select id="resultType" name="to_unit">
      <option value="second2">second [s]>second</option>
      <option value="milisecond2">milisecond [ms]</option>
      <option value="minute2">minute[min]</option>
      <option value="hour2">hour</option>
      <option value="microsecond2">microsecond</option>
      <option value="nanosecond2">nanosecond</option>
    </select>
    <input type="submit" name="Save">

  </form>
  </div>

</body>

<script>
  var input = document.getElementById("input");
  var result = document.getElementById("result");
  var inputType = document.getElementById("inputType");
  var resultType = document.getElementById("resultType");
  var option_from;
  var option_to;


  input.addEventListener("keyup",calculateTime);
  inputType.addEventListener("change",calculateTime);
  resultType.addEventListener("change",calculateTime);

  option_from = inputType.id;
  option_to = resultType.id;

  function calculateTime(){
    option_from = inputType.value;
    option_to = resultType.value;


    if(option_from === "second" && option_to === "second2"){
      result.value = Number(input.value);
    }else if(option_from === "second" && option_to === "milisecond2"){
      result.value = Number(input.value)*1000;
    }else if(option_from === "second" && option_to === "minute2"){
      result.value = Number(input.value)/60;
    }else if(option_from === "second" && option_to === "hour2"){
      result.value = Number(input.value)/3600;
    }else if(option_from === "second" && option_to === "microsecond2"){
      result.value = Number(input.value)*1000000;
    }else if(option_from === "second" && option_to === "nanosecond2"){
      result.value = Number(input.value)*1000000000;
    }else if(option_from === "milisecond" && option_to === "second2"){
      result.value = Number(input.value)/1000;
    }else if(option_from === "milisecond" && option_to === "milisecond2"){
      result.value = Number(input.value);
    }else if(option_from === "milisecond" && option_to === "minute2"){
      result.value = Number(input.value)/60000;
    }else if(option_from === "milisecond" && option_to === "hour2"){
      result.value = Number(input.value)/3600000;
    }else if(option_from === "milisecond" && option_to === "microsecond2"){
      result.value = Number(input.value)*1000;
    }else if(option_from === "milisecond" && option_to === "nanosecond2"){
      result.value = Number(input.value)*1000000;
    }else if(option_from === "minute" && option_to === "second2"){
      result.value = Number(input.value)*60;
    }else if(option_from === "minute" && option_to === "milisecond2"){
      result.value = Number(input.value)*60000;
    }else if(option_from === "minute" && option_to === "minute2"){
      result.value = Number(input.value);
    }else if(option_from === "minute" && option_to === "hour2"){
      result.value = Number(input.value)/60;
    }else if(option_from === "minute" && option_to === "microsecond2"){
      result.value = Number(input.value)*60000000;
    }else if(option_from === "minute" && option_to === "nanosecond2"){
      result.value = Number(input.value)*60000000000;
    }else if(option_from === "hour" && option_to === "second2"){
      result.value = Number(input.value)*3600;
    }else if(option_from === "hour" && option_to === "milisecond2"){
      result.value = Number(input.value)*3600000;
    }else if(option_from === "hour" && option_to === "minute2"){
      result.value = Number(input.value)*60;
    }else if(option_from === "hour" && option_to === "hour2"){
      result.value = Number(input.value);
    }else if(option_from === "hour" && option_to === "microsecond2"){
      result.value = Number(input.value)*3600000000;
    }else if(option_from === "hour" && option_to === "nanosecond2"){
      result.value = Number(input.value)*3600000000000;
    }else if(option_from === "microsecond" && option_to === "second2"){
      result.value = Number(input.value)/1000000;
    }else if(option_from === "microsecond" && option_to === "milisecond2"){
      result.value = Number(input.value)/1000;
    }else if(option_from === "microsecond" && option_to === "minute2"){
      result.value = Number(input.value)/60000000;
    }else if(option_from === "microsecond" && option_to === "hour2"){
      result.value = Number(input.value)/3600000000;
    }else if(option_from === "microsecond" && option_to === "microsecond2"){
      result.value = Number(input.value);
    }else if(option_from === "microsecond" && option_to === "nanosecond2"){
      result.value = Number(input.value)*1000;
    }else if(option_from === "nanosecond" && option_to === "second2"){
      result.value = Number(input.value)/1000000000;
    }else if(option_from === "nanosecond" && option_to === "milisecond2"){
      result.value = Number(input.value)/1000000;
    }else if(option_from === "nanosecond" && option_to === "minute2"){
      result.value = Number(input.value)/60000000000;
    }else if(option_from === "nanosecond" && option_to === "hour2"){
      result.value = Number(input.value)/3600000000000;
    }else if(option_from === "nanosecond" && option_to === "microsecond2"){
      result.value = Number(input.value)/1000;
    }else if(option_from === "nanosecond" && option_to === "nanosecond2"){
      result.value = Number(input.value);
    }
  }


</script>


</html>
';
