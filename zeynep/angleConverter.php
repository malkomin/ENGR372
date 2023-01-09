<?php
require "../components/header.php";


echo '
<html>
<head>
<style>
html {
  color: #222;
  font-size: 1em;
  line-height: 1.4;
}


.converter-body{
  align-content: center;
  align-items: center;
  width: 400px;
  height: 200px;
  position: absolute;
  top: 50%;
  left: 38%;
  transform: translate(-50%,-50%);
  box-shadow: 0 0 2px 1px #cacaca;
  background: #7d7d7d;
  -moz-border-radius: 25px / 25px;
  -webkit-border-radius: 25px / 25px;
  border-radius: 25px / 25px;
}

#image1{
  -moz-border-radius: 25px / 25px;
  -webkit-border-radius: 25px / 25px;
  border-radius: 25px / 25px;
}

.image-arrow{
  top: 50px;
  left: 400px;
  position: absolute;
}

.image-angle{
  top: -258px;
  left: -150px;
  position: relative;
}

.image-time{
  position: absolute;
  top: 100px;
  left: 150px;
}

.converter-title{
  text-align: center;
  margin-top: 0px;
  font-size: 40px;
}

input{
  height: 35px;
  text-align: center;
  border: 1px solid black;
}

#equal{
  margin-left: 153px;
}

#input{
  margin-left: 25px;
  margin-bottom: 500px;
  -moz-border-radius: 25px / 25px;
  -webkit-border-radius: 25px / 25px;
  border-radius: 25px / 25px;
}

#result{
  margin-left: 200px;
  margin-top: -535px;
  -moz-border-radius: 25px / 25px;
  -webkit-border-radius: 25px / 25px;
  border-radius: 25px / 25px;
}


#inputType{
  text-align: center;
  width: 158px;
  height: 35px;
  margin-left: 30px;
  margin-top: -500px;
  color: #7d64ff;
  border: 1px solid black;
  -moz-border-radius: 25px / 25px;
  -webkit-border-radius: 25px / 25px;
  border-radius: 25px / 25px;
}
#resultType{
  text-align: center;
  width: 158px;
  height: 35px;
  margin-left: 205px;
  margin-top: -500px;
  color: #7d64ff;
  border: 1px solid black;
  -moz-border-radius: 25px / 25px;
  -webkit-border-radius: 25px / 25px;
  border-radius: 25px / 25px;
}

#Save{
    margin-top:-460px;
    margin-left: 35px;
}




::-moz-selection {
  background: #b3d4fc;
  text-shadow: none;
}

::selection {
  background: #b3d4fc;
  text-shadow: none;
}
</style>

  <link rel="stylesheet" href="main.css">
  ' . getHeader("Angle Converter") . '
</head>
<body style="background: #0e8c8c">


<div class="converter-body" >

  <form name="myform" action="../database/operations.php" method="post">

    <table border="0">

      <tr>
        <h1 class="converter-title">Angle Converter</h1>
        <td>



          <input type="text" placeholder="Input" id="input" name="from_value">
          <span id="equal">=</span>
          <input type="text" placeholder="Result" id="result" name="to_value">




        </td>


        <td>
          <div class="image-angle">
            <img src="newanglemeter.png" alt="Angle Meter" width="1000px" height="500px" >
          </div>

          <div class="image-arrow">
            <img src="ok_isareti.png" alt="Arrow" width="100px" height="100px" >
          </div>
          <div>
            <input type="submit" name="Save" id="Save" value="SUBMIT">
          </div>

        </td>


      </tr>
      <tr>
        <td>
          <select style="color: #0e8c8c" id="inputType" name="from_unit">
            <option value="degree">degree</option>
            <option value="minute">minute</option>
            <option value="second">second</option>
            <option value="radian">radian</option>
            <option value="revolution">revolution</option>
          </select>


          <select  style="color: #0e8c8c" id="resultType" name="to_unit">
            <option value="degree2">degree</option>
            <option value="minute2">minute</option>
            <option value="second2">second</option>
            <option value="radian2">radian</option>
            <option value="revolution2">revolution</option>
          </select>

        </td>


      </tr>
      <tr>

      </tr>

    </table>
  </form>
</div>


</body>

<script>
  var input = document.getElementById("input");
  var result = document.getElementById("result");
  var inputType = document.getElementById("inputType");
  var resultType = document.getElementById("resultType");
  var option_from, option_to;


  input.addEventListener("keyup", calculateAngle);
  inputType.addEventListener("change", calculateAngle);
  resultType.addEventListener("change", calculateAngle);

  option_from = inputType.id;
  option_to = resultType.id;

  function calculateAngle() {
    option_from = inputType.value;
    option_to = resultType.value;


    if (option_from === "degree" && option_to === "degree2") {
      result.value = Number(input.value);
    } else if (option_from === "degree" && option_to === "minute2") {
      result.value = Number(input.value) * 60;
    } else if (option_from === "degree" && option_to === "second2") {
      result.value = Number(input.value) * 3600;
    } else if (option_from === "degree" && option_to === "radian2") {
      result.value = Number(input.value) * 1.745 * Math.pow(10, -2);
    } else if (option_from === "degree" && option_to === "revolution2") {
      result.value = Number(input.value) * 2.778 * Math.pow(10, -3);
    } else if (option_from === "minute" && option_to === "degree2") {
      result.value = Number(input.value) * 1.667 * Math.pow(10, -2);
    } else if (option_from === "minute" && option_to === "minute2") {
      result.value = Number(input.value);
    } else if (option_from === "minute" && option_to === "second2") {
      result.value = Number(input.value) * 60;
    } else if (option_from === "minute" && option_to === "radian2") {
      result.value = Number(input.value) * 2.909 * Math.pow(10, -4);
    } else if (option_from === "minute" && option_to === "revolution2") {
      result.value = Number(input.value) * 4.630 * Math.pow(10, -5);
    } else if (option_from === "second" && option_to === "degree2") {
      result.value = Number(input.value) * 2.778 * Math.pow(10, -4);
    } else if (option_from === "second" && option_to === "minute2") {
      result.value = Number(input.value) * 1.667 * Math.pow(10, -2);
    } else if (option_from === "second" && option_to === "second2") {
      result.value = Number(input.value);
    } else if (option_from === "second" && option_to === "radian2") {
      result.value = Number(input.value) * 4.848 * Math.pow(10, -4);
    } else if (option_from === "second" && option_to === "revolution2") {
      result.value = Number(input.value) * 7.716 * Math.pow(10, -7);
    } else if (option_from === "radian" && option_to === "degree2") {
      result.value = Number(input.value) * 57.30;
    } else if (option_from === "radian" && option_to === "minute2") {
      result.value = Number(input.value) * 3438;
    } else if (option_from === "radian" && option_to === "second2") {
      result.value = Number(input.value) * 2.063 * Math.pow(10, 5);
    } else if (option_from === "radian" && option_to === "radian2") {
      result.value = Number(input.value);
    } else if (option_from === "radian" && option_to === "revolution2") {
      result.value = Number(input.value) * 0.1592;
    } else if (option_from === "revolution" && option_to === "degree2") {
      result.value = Number(input.value) * 360;
    } else if (option_from === "revolution" && option_to === "minute2") {
      result.value = Number(input.value) * 2.16 * Math.pow(10, 4);
    } else if (option_from === "revolution" && option_to === "second2") {
      result.value = Number(input.value) * 1.296 * Math.pow(10, 5);
    } else if (option_from === "revolution" && option_to === "radian2") {
      result.value = Number(input.value) * 6.283;
    } else if (option_from === "revolution" && option_to === "revolution2") {
      result.value = Number(input.value);
    }
  }

</script>
</html>
';
