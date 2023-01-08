<?php
require "./components/header.php";
require "./database/operations.php";
$conversions = getOperations();
echo '
<html>
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
</head>
<header>
' . getHeader("Anasayfa") . '
<link rel="stylesheet" href="./main.css">
</header>
<body>
<div class="container-calculator">
<div class="calculator-box">
    <div class="row">
    <div class="col align-self-center align-items-center mb-3">
        <label for="first_input">İlk değer</label>
        <input onchange="calculate()" id="first_input" type="number" >
    </div>
    <div class="col align-self-center align-items-center mb-3">
        <label for="select">İşlem</label>
        <br>
        <select onchange="calculate()" id="select" style="width: 100px; height: 30px">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multi">*</option>
        <option value="divide">/</option>
        </select>
    </div>
     <div class="col align-self-center align-items-center mb-3">
        <label for="second_input">İkinci değer</label>
        <input onchange="calculate()" id="second_input" type="number" >
    </div>
    </div>
     <div class="row">
    <div class="col align-self-center align-items-center mb-3">
        <button onclick="passValue();"  class="btn btn-primary" style="vertical-align: 0px;">Sonucu Aktar</button>
        <b style="font-size: 25px; margin: 20px">Sonuç : </b>
        <b id="result" style="font-size: 25px; margin: 20px"></b>
        
        <b style="font-size: 25px; margin: 20px">Birim : </b>
        <b id="unit" style="font-size: 25px; margin: 20px"></b>
    </div>
    </div>
</div>
<div class="operations-box ">
    <div class="scroll-list">
   <ul>';
    foreach($conversions as $conversion)
    {
        echo '<li>
      <h5>'.$conversion->from_value.' '.$conversion->from_unit.' -> '.$conversion->to_value.' '.$conversion->to_unit.'</h5>
      <button onclick="setValue('.$conversion->to_value.' , \''.$conversion->to_unit.'\', true);" class="btn-primary" style="margin-top: 5px">1. değere aktar</button>
      <button onclick="setValue('.$conversion->to_value.' , \''.$conversion->to_unit.'\', false);" class="btn-primary"  style="margin-top: 5px">2. değere aktar</button>
        </li>';
    }
    echo '
    </div>
</div>
</div>
</body>
<script type="text/javascript">
    var unit = "";
    function setValue(toValue, toUnit, toFirstValue)
    {
        var unitEle = document.getElementById("unit");
        unitEle.innerHTML = toUnit;
        unit = toUnit;
        if(toFirstValue)
        {
            var firstInput = document.getElementById("first_input");
            firstInput.value = toValue;
        } else {
            var secondInput = document.getElementById("second_input");
            secondInput.value = toValue;
        }
        calculate();
    }
    
    function passValue()
    {
        var resultEle = document.getElementById("result");
        var res = parseFloat(resultEle.innerHTML);
        setValue(res, unit, true);
        calculate();
    }
    
    function calculate() 
    {
        var firstInputEle = document.getElementById("first_input");
        var secondInputEle = document.getElementById("second_input");
        var resultEle = document.getElementById("result");
        var firstInput = parseFloat(firstInputEle.value);
        var secondInput = parseFloat(secondInputEle.value);
        var result = 0;
        var e = document.getElementById("select");
        var value = e.value;
        if(value === "plus")
        {
            result = firstInput + secondInput;
        }   
        else if(value === "minus")
        { 
             result = firstInput - secondInput;
        }
        else if(value === "multi")
        { 
             result = firstInput * secondInput;
        }
        else if(value === "divide")
        { 
             result = firstInput / secondInput;
        }
        resultEle.innerHTML = result;
    }
</script>
</html>


';