<?php
require "../components/header.php";
echo'
<html>
    <head>
        <meta charset="UTF-8">
        <title>Length Calculator</title>
        <header>
        '.getHeader("Length Calculator").'
        </header>
        <style>
            body{
                background-image: url("images/BG.jpg");
            }
            input:focus{
                background-color: #e9b764;
            }
            input[type="button"]:hover{
                background-color: #e9b764;
            }
            input:focus,select:focus{
                background-color: #e9b764;
            }
            input[type="number"]:hover{
                background-color: #e9b764;
            }
            input:focus,select:hover{
                background-color: #e9b764;
            }
            input[type="number"]{
                width: 20ch;
            }
            td{
                font-size: 20px;
            }
            input[type="submit"]:hover{
                background-color: #e9b764;
            }
            input,select{
                width: 20ch;
                border-radius: 8px;
            }
            li,h1,h4{
                font-family:"verdana";
            }
            table.conversion{
                border: 5px solid red;
                border-radius: 30px;
            }
            input[type="button"]:active{
                background-color: rgb(100, 60, 0);
            }
        </style>
        <script>
            function calculate(){
                var input = document.myform.input.value;
                var to = document.getElementById("to");
                var from = document.getElementById("from");
                               
                if (from.value=="m" && to.value=="m"){
                    document.myform.result.value=input;
                }else if(from.value=="m" && to.value=="km"){
                    document.myform.result.value=input*0.001;
                }else if(from.value=="m" && to.value=="mm"){
                    document.myform.result.value=input*1000;
                }else if(from.value=="km" && to.value=="m"){
                    document.myform.result.value=input*1000;
                }else if(from.value=="km" && to.value=="km"){
                    document.myform.result.value=input;
                }else if(from.value=="km" && to.value=="mm"){
                    document.myform.result.value=input*1000000;
                }else if(from.value=="mm" && to.value=="m"){
                    document.myform.result.value=input*0.001;
                }else if(from.value=="mm" && to.value=="km"){
                    document.myform.result.value=input*0.000001;
                }else if(from.value=="mm" && to.value=="mm"){
                    document.myform.result.value=input;
                }else if(from.value=="m" && to.value=="in"){
                    document.myform.result.value=input*39.37;
                }else if(from.value=="m" && to.value=="ft"){
                    document.myform.result.value=input*3.28;
                }else if(from.value=="km" && to.value=="in"){
                    document.myform.result.value=input*39370;
                }else if(from.value=="km" && to.value=="ft"){
                    document.myform.result.value=input*3280;
                }else if(from.value=="mm" && to.value=="in"){
                    document.myform.result.value=input*0.03937;
                }else if(from.value=="mm" && to.value=="ft"){
                    document.myform.result.value=input*0.00328;
                }else if(from.value=="in" && to.value=="m"){
                    document.myform.result.value=input*0.0254;
                }else if(from.value=="in" && to.value=="km"){
                    document.myform.result.value=input*0.0000254;
                }else if(from.value=="in" && to.value=="mm"){
                    document.myform.result.value=input*25.4;
                }else if(from.value=="in" && to.value=="in"){
                    document.myform.result.value=input;
                }else if(from.value=="in" && to.value=="ft"){
                    document.myform.result.value=input*0.0833;
                }else if(from.value=="ft" && to.value=="m"){
                    document.myform.result.value=input*0.3048;
                }else if(from.value=="ft" && to.value=="km"){
                    document.myform.result.value=input*0.0003048;
                }else if(from.value=="ft" && to.value=="mm"){
                    document.myform.result.value=input*304.8;
                }else if(from.value=="ft" && to.value=="in"){
                    document.myform.result.value=input*12;
                }else if(from.value=="ft" && to.value=="ft"){
                    document.myform.result.value=input;
                }
        }
        </script>
    </head>
    <body>
        <br>
        <form name="myform" action="../database/operations.php" method="post"><input type="hidden" name="type"  value="Length">
        <div align="center">
        <h1 class="calculator-title">Length Calculator</h1>
        <br>
    
        <table width="781" height="113" border="0" bordercolor="black" background="images/ruler.png">
            <tr>
                <td align="center" valign="bottom"><input type="number" placeholder="From" id="input" name="from_value"></td><td align="center" valign="bottom">&#8594&#8594</td>
                <td align="center" valign="bottom"><input type="number" placeholder="To" name="to_value" id="result"></td><td div align="left" valign="bottom"><input type="submit" value="SUBMIT"></td>
            </tr>
            <tr>
                <td height="30" align="center" valign="top"><select name="from_unit" id="from">
                    <option value="m">Meter(m)</option>
                    <option value="km">Kilometer(km)</option>
                    <option value="mm">Millimeter(mm)</option>
                    <option value="in">Inches(in)</option>
                    <option value="ft">Feet(ft)</option></select></td>
                <td align="center" valign="top">&#8594&#8594</td>
                <td align="center" valign="top"><select name="to_unit" id="to">
                    <option value="m">Meter(m)</option>
                    <option value="km">Kilometer(km)</option>
                    <option value="mm">Millimeter(mm)</option>
                    <option value="in">Inches(in)</option>
                    <option value="ft">Feet(ft)</option></select></td>
                <td align="left" valign="top"><input type="button" value="  CALCULATE  " onclick="calculate()"></td>
            </tr>
        </table>
        <br>
        <table class="conversion" width="800" height="800" border="0" bordercolor="black" style="background-color:#FFFFFF">
            <tr>
                <td div align="center" height="50"><h4>Conversion table for every unit:</h4></td>
            </tr>
            <tr>
                <td div align="left" height="50"><ul style="list-style-type:disc;"><li>1 meter = 0.001 kilometer</li>
                    <li>1 meter = 1 meter</li>
                    <li>1 meter = 1000 millimeter</li>
                    <li>1 meter = 39.37 inches</li>
                    <li>1 meter = 3.28 feet</li>
                    <li>1 kilometer = 1 kilometer</li>
                    <li>1 kilometer = 1000 meter</li>
                    <li>1 kilometer = 1000000 millimeter</li>
                    <li>1 kilometer = 39370 inches</li>
                    <li>1 kilometer = 3280 feet</li>
                    <li>1 millimeter = 0.000001 kilometer</li>
                    <li>1 millimeter = 0.001 meter</li>
                    <li>1 millimeter = 1 millimeter</li>
                    <li>1 millimeter = 0.03937 inches</li>
                    <li>1 millimeter = 0.00328 feet</li>
                    <li>1 inch = 0.0254 meter</li>
                    <li>1 inch = 0.0000254 kilometer</li>
                    <li>1 inch = 25.4 milimeter</li>
                    <li>1 inch = 1 inch</li>
                    <li>1 inch = 0.083 feet</li>
                    <li>1 foot = 0.3048 meter</li>
                    <li>1 foot = 0.0003048 kilometer</li>
                    <li>1 foot = 304.8 millimeter</li>
                    <li>1 foot = 12 inches</li>
                    <li>1 foot = 1 foot</li>
                </ul></td>
            </tr>
            <tr></tr>
        </table>
    </form>
    </body>
</html>';