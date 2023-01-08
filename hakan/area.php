<?php
require "././database/operations.php";
require "././components/header.php";
echo'
<html>
    <head>
        <meta charset="UTF-8">
        <title>Area Calculator</title>
        <header>
            '.getHeader("Area Calculator").'
        </header>
        <style>
            body{
                background-image: url("images/areabg.jpg");
            }
            input:focus{
                background-color: lightsalmon;
            }
            input[type="button"]:hover{
                background-color: lightsalmon;
            }
            input:focus,select:focus{
                background-color: lightsalmon;
            }
            input[type="number"]:hover{
                background-color: lightsalmon;
            }
            input:focus,select:hover{
                background-color: lightsalmon;
            }
            input[type="number"]{
                width: 20ch;
            }
            td{
                font-size: 20px;
            }
            input,select{
                width: 20ch;
                border-radius: 8px;
            }
            table.conversion{
                border: 5px solid red;
                border-radius: 30px;
            }
            li,h1,h4{
                font-family:"verdana";
            }
            table.area{
                border: 5px solid green;
                border-radius: 20px;
            }
            input[type="button"]:active{
                background-color: rgb(100, 30, 2);
            }
        </style>
        <script>
            function calculate(){
                var input = document.myform.input.value;
                var to = document.getElementById("to");
                var from = document.getElementById("from");

                if (from.value=="m2" && to.value=="m2"){
                    document.myform.result.value=input;
                }else if(from.value=="m2" && to.value=="km2"){
                    document.myform.result.value=input*0.000001;
                }else if(from.value=="m2" && to.value=="mm2"){
                    document.myform.result.value=input*1000000;
                }else if(from.value=="km2" && to.value=="m2"){
                    document.myform.result.value=input*1000000;
                }else if(from.value=="km2" && to.value=="km2"){
                    document.myform.result.value=input;
                }else if(from.value=="km2" && to.value=="mm2"){
                    document.myform.result.value=input*1000000000000;
                }else if(from.value=="mm2" && to.value=="m2"){
                    document.myform.result.value=input*0.000001;
                }else if(from.value=="mm2" && to.value=="km2"){
                    document.myform.result.value=input*1.E-12;
                }else if(from.value=="mm2" && to.value=="mm2"){
                    document.myform.result.value=input;
                }else if(from.value=="m2" && to.value=="ha"){
                    document.myform.result.value=input*0.0001;
                }else if(from.value=="m2" && to.value=="ac"){
                    document.myform.result.value=input*0.0002471054;
                }else if(from.value=="km2" && to.value=="ha"){
                    document.myform.result.value=input*100;
                }else if(from.value=="km2" && to.value=="ac"){
                    document.myform.result.value=input*3280;
                }else if(from.value=="mm2" && to.value=="ha"){
                    document.myform.result.value=input*1.E-10;
                }else if(from.value=="mm2" && to.value=="ac"){
                    document.myform.result.value=input*2.471053814E-10;
                }else if(from.value=="ha" && to.value=="m2"){
                    document.myform.result.value=input*10000;
                }else if(from.value=="ha" && to.value=="km2"){
                    document.myform.result.value=input*0.01;
                }else if(from.value=="ha" && to.value=="mm2"){
                    document.myform.result.value=input*10000000000;
                }else if(from.value=="ha" && to.value=="ha"){
                    document.myform.result.value=input;
                }else if(from.value=="ha" && to.value=="ac"){
                    document.myform.result.value=input*2.4710538147;
                }else if(from.value=="ac" && to.value=="m2"){
                    document.myform.result.value=input*4046.8564224;
                }else if(from.value=="ac" && to.value=="km2"){
                    document.myform.result.value=input*0.0040468564;
                }else if(from.value=="ac" && to.value=="mm2"){
                    document.myform.result.value=input*4046856422.4;
                }else if(from.value=="ac" && to.value=="ha"){
                    document.myform.result.value=input*0.4046856422;
                }else if(from.value=="ac" && to.value=="ac"){
                    document.myform.result.value=input;
                }
            }
        </script>
    </head>
    
    <body>
        <br>
        <form name="myform">
        <div align="center">
        <h1 class="calculator-title">Area Calculator</h1>
        <br>

        <table class="area" width="781" height="113" border="0" bordercolor="black" background="images/area.jpg">
            <tr>
                <td align="center" valign="bottom"><input type="number" placeholder="From" id="input" name="from_value"></td><td align="center" valign="bottom">&#8594&#8594</td>
                <td align="center" valign="bottom"><input type="number" placeholder="To" name="to_value" id="result"></td><td><input type="submit" value="SUBMIT"></td>
            </tr>
            <tr>
                <td align="center" valign="top"><select name="from_unit" id="from">
                    <option value="m2">Square Meter(m^2)</option>
                    <option value="km2">Square Kilometer(km^2)</option>
                    <option value="mm2">square millimeter(mm^2)</option>
                    <option value="hectare">Hectare(ha)</option>
                    <option value="acre">Acre(ac)</option></select></td>
                <td align="center" valign="top">&#8594&#8594</td>
                <td align="center" valign="top"><select name="to_unit" id="to">
                    <option value="m2">Square Meter(m^2)</option>
                    <option value="km2">Square Kilometer(km^2)</option>
                    <option value="mm2">Square Millimeter(mm^2)</option>
                    <option value="ha">Hectare(ha)</option>
                    <option value="ac">Acre(ac)</option></select></td>
                <td align="left" valign="top"><input type="button" value="  CALCULATE  " onclick="calculate()"></td>
                </tr>
            </table>
            <br>
        <table class="conversion" width="800" height="800" border="0" bordercolor="black" style="background-color:#FFFFFF">
            <tr>
                <td div align="center" height="50"><h4>Conversion table for every unit:</h4></td>
            </tr>
            <tr>
                <td div align="left" height="50"><ul style="list-style-type:disc;"><li>1 square meter = 0.000001 square kilometer</li>
                    <li>1 square meter = 1 square meter</li>
                    <li>1 square meter = 1000000 square millimeter</li>
                    <li>1 square meter = 0.0001 hectare</li>
                    <li>1 square meter = 0.0002471054 acre</li>
                    <li>1 square kilometer = 1 square kilometer</li>
                    <li>1 square kilometer = 1000000 square meter</li>
                    <li>1 square kilometer = 1000000000000 square millimeter</li>
                    <li>1 square kilometer = 100 hectare</li>
                    <li>1 square kilometer = 247.10538147 acre</li>
                    <li>1 square millimeter = 0.000000000001 square kilometer</li>
                    <li>1 square millimeter = 0.000001 square meter</li>
                    <li>1 square millimeter = 1 square millimeter</li>
                    <li>1 square millimeter = 1.E-10 hectare</li>
                    <li>1 square millimeter = 2.471053814E-10 acre</li>
                    <li>1 hectare = 10000 square meter</li>
                    <li>1 hectare = 0.01 square kilometer</li>
                    <li>1 hectare = 10000000000 square millimeter</li>
                    <li>1 hectare = 1 hectare</li>
                    <li>1 hectare = 2.4710538147 acre</li>
                    <li>1 acre = 4046.8564224 square meter</li>
                    <li>1 acre = 0.0040468564 square kilometer</li>
                    <li>1 acre = 4046856422.4 square millimeter</li>
                    <li>1 acre = 0.4046856422 hectare</li>
                    <li>1 acre = 1 acre</li>
                </ul></td>
            </tr>
            <tr></tr>
        </table>
    </form>
    </body>
</html>';