<?php
require '../components/header.php';
echo '
<html>
    <head>
        <style>
            body{
                background-color: white;
            }
            input[type="number"]{
                background-color: #BFFCFE; /*transparent*/
                color:black;
                border-radius:20px;
                border : 1;
                border-color: #1B76BA;
                height: 30px;
                width : 180px;
            }

            input[type="number"]:focus{
                color: black;
            }

            input[type="number"]:hover{
                color:black;
            }

            input[type="button"]{
                border-radius: 20px;
                background-color: darkcyan;
                color: white;
                border: 0;
            }
            input[type="button"]:hover{
                background-color: darkcyan; /*transparent*/
                color: #FFFF84;
                border-radius:20px;
            }

            input[name="mynumber2"]{
                margin-top:70px;
                margin-right: 77px;
            }

            #secondType{
                border-radius: 20px;
                background: #67E089;
                color: black;
                margin-left: 27px;
                margin-top: 10px;
                margin-bottom: 25px;
            }

            input[name="myNumber"]{
                margin-top:45px;
                margin-left: 90px;
            }
            #firstType{
                border-radius: 20px;
                background: #FFFF84;
                color: black;
                margin-left:125px;
                margin-bottom:30px;
                margin-top:5px;
            }
            #btnConvert{
                margin-top:-10px;
                margin-left:205px;
                height: 40px;
                width: 120px;
            }
            #btnSwitch{
                margin-top: 10px;
                margin-left:220px;
                height: 30px;
                width: 90px;
            }
            option:checked{
                color: white;
                background-color: black;
            }

            #resText{
                color: darkcyan;
                font-size: 20px;
                font-style: italic;
                padding-left: 35px;
            }
            #headerStyle{
                font-size: 27px;
                font-weight: bold;
                color: darkslategray;
            }
            #userInput{
                background-color: #FFFF84;
            }
            #result{
                background-color: #67E089;
            }





        </style>

    <script>

        function convert() {
            x = document.myform.userInput.value;

            TypeOne = document.myform.firstType.value;
            TypeTwo = document.myform.secondType.value;





            if (TypeOne === "cubicmeter") {
                totalMililiter = x * 1000000;
            } else if (TypeOne === "liter") {
                totalMililiter = x * 1000;
            } else if (TypeOne === "mililiter") {
                totalMililiter = x;
            } else if (TypeOne === "gallon") {
                totalMililiter = x * 3785.411784;
            } else if (TypeOne === "quart") {
                totalMililiter = x * 946.352946;
            } else if (TypeOne === "pint") {
                totalMililiter = x * 473.176473;
            }

            if (TypeTwo === "cubicmeter") {
                result = totalMililiter / 1000000;
            } else if (TypeTwo === "liter") {
                result = totalMililiter / 1000;
            } else if (TypeTwo === "mililiter") {
                result = totalMililiter;
            } else if (TypeTwo === "gallon") {
                result = totalMililiter / 3785.411784;
            } else if (TypeTwo === "quart") {
                result = totalMililiter / 946.352946;
            } else if (TypeTwo === "pint") {
                result = totalMililiter / 473.176473;
            }


            document.myform.result.value = result;
            document.getElementById("note").innerHTML = x + " " + TypeOne;
            document.getElementById("note2").innerHTML = " is equals ";
            document.getElementById("note3").innerHTML = result + " " + TypeTwo;


        }


        function switchPlaces() {

            TypeOne = document.myform.firstType.value;
            TypeTwo = document.myform.secondType.value;


            document.myform.firstType.value = TypeTwo;
            document.myform.secondType.value = TypeOne;

            convert();

        }


    </script>
    <header>
    '.getHeader("Weight Converter").'
    </header>

</head>
<body>

<div align="center">


    <br><br>
    <div id="headerStyle"> VOLUME CONVERTER </div>

    <form name="myform" action="../database/operations.php" method="post">
        <table border="0" height="575" width="613" background="beher.png">
            <tr height="50" align="right">

                <td width="350"></td>

            <tr><td>
            <input type="number" id="userInput" name="myNumber" onchange="convert()" placeholder="From"/>
            <select name="firstType" id = "firstType" onchange="convert()">
                <option value="cubicmeter"  id="cubicM"   >Cubic meter [m&#179]</option>
                <option value="liter"   id="L"   >Liter [L]</option>
                <option value="mililiter"   id="ml"   >Mililiter [ml]</option>
                <option value="gallon"   id="gal"  >Gallon [gal]</option>
                <option value="quart"    id="qt"  >Quart [qt]</option>
                <option value="pint"   id="pt"  >Pint [pt]</option>
            </select>
            </td>

            <td id="resText" align="left">
            <div id="note"></div>
            <div id="note2"></div>
            <div id="note3"></div>
            </td>

            </tr>

            <tr><td>
            <input type="button" id="btnConvert" value="CONVERT" onclick="convert()"/>

            <input type="button" id="btnSwitch" value="SWITCH" onclick="switchPlaces()"/>
            </td></tr>





            <tr>

                <td></td>

                <td>

            <input type="number" id="result" name="mynumber2" placeholder="To" />
            <select name="secondType" id = "secondType" onchange="convert()" >
                <option value="cubicmeter"  id="cubicM"   >Cubic meter [m&#179]</option>
                <option value="liter"   id="L"   >Liter [L]</option>
                <option value="mililiter"   id="ml"   >Mililiter [ml]</option>
                <option value="gallon"   id="gal"  >Gallon [gal]</option>
                <option value="quart"    id="qt"  >Quart [qt]</option>
                <option value="pint"   id="pt"  >Pint [pt]</option>
            </select> 


            </td>

            </tr>

        </table>

    </form>

</div>
</body>
</html>';