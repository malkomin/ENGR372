<?php
require "../components/header.php";


echo '

<html>
    <head>

    <meta charset="UTF-8">
    <title>Dashboard</title>
    <header>
    '.getHeader("Weight Converter").'
    </header>

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
                background-color: black;
                color:white;
            }
            input[type="number"]:hover{
                background-color: black;
                color:white;
            }

            input[type="button"]{
                border-radius: 20px;
                background-color: white;
                color: #1B76BA;
                border: 0;
            }
            input[type="button"]:hover{
                background-color: black; /*transparent*/
                color: white;
                border-radius:20px;
            }
            input[type="submit"]{
                border-radius: 20px;
                background-color: white;
                color: #1B76BA;
                border: 0;
            }
            input[type="submit"]:hover{
                background-color: black; /*transparent*/
                color: white;
                border-radius:20px;
            }
            select{
                border-radius: 20px;
                background: #ccffff;
                color:#000099;
                margin-top: -65px;
                margin-left: 45px;
            }
            option:checked{
                color: white;
                background-color: black;
            }

            #btnConvert{
                margin-right: 10px;
                height: 40px;
                width: 120px;
            }
            #btnSwitch{
                margin-left: 27px;
                height: 30px;
                width: 90px;
            }
            #note{
                margin-top: -120px;
            }
            #note2{
                margin-bottom: 0;
            }
            #note3{
                margin-bottom: 0;
            }

            #resText{
                color: #1B76BA;
                font-style: italic;
                font-weight: bold;
                font-size: 20px;
            }
            #headerStyle{
                font-size: 27px;
                font-weight: bold;
                color: #1958BD;
            }
            #btnSubmit{
                margin-bottom: -30px;
                height: 30px;
                width: 75px;
                margin-right: 10px;
            }

        </style>

    <script>

        function convert() {
            x = document.myform.userInput.value;

            TypeOne = document.myform.from_unit.value;
            TypeTwo = document.myform.to_unit.value;


            if (TypeOne === "kilogram") {
                totalGrams = x * 1000;
            } else if (TypeOne === "gram") {
                totalGrams = x;
            } else if (TypeOne === "miligram") {
                totalGrams = x / 1000;
            } else if (TypeOne === "ton") {
                totalGrams = x * 1000000;
            } else if (TypeOne === "pound") {
                totalGrams = x / 0.00220462262185;
            } else if (TypeOne === "ounce") {
                totalGrams = x / 0.035273962;
            }

            if (TypeTwo === "kilogram") {
                result = totalGrams / 1000;
            } else if (TypeTwo === "gram") {
                result = totalGrams;
            } else if (TypeTwo === "miligram") {
                result = totalGrams * 1000;
            } else if (TypeTwo === "ton") {
                result = totalGrams / 1000000;
            } else if (TypeTwo === "pound") {
                result = totalGrams * 0.00220462262185;
            } else if (TypeTwo === "ounce") {
                result = totalGrams * 0.035273962;
            }



            document.myform.resultofConvert.value = result;
            document.getElementById("note").innerHTML = x + " " + TypeOne;
            document.getElementById("note2").innerHTML = " is equals ";
            document.getElementById("note3").innerHTML = result + " " + TypeTwo;


        }


        function switchPlaces() {

            TypeOne = document.myform.from_unit.value;
            TypeTwo = document.myform.to_unit.value;


            document.myform.from_unit.value = TypeTwo;
            document.myform.to_unit.value = TypeOne;

            convert();

        }


    </script>


</head>
<body>

<div align="center">


    <br><br>
    <div id="headerStyle"> WEIGHT CONVERTER </div>


    <form name="myform" action="../database/operations.php" method="post">
        <table border="0" height="500" width="613" background="weight.png">
        <input type="hidden" name="type" value="Weight">


            <tr height="320">
                <td>
                </td>

                <td align="center" id="resText">
            <div id="note"></div>
            <div id="note2"></div>
            <div id="note3"></div>
            </td>

            <td>
            </td>


            </tr>


            <tr height="50">

                <td width="230" align="right">
            <input type="number" id="userInput" name="from_value" onchange="convert()" placeholder="From"/>

            </td>


            <td>
            <input type="button" id="btnSwitch" value="SWITCH" onclick="switchPlaces()"/>
            </td>

            <td width="215">
            <input  type="number" id="resultofConvert" name="to_value" placeholder="To"/>

            </td>

            </tr>



            <tr>
                <td align="center" >

                    <select name="from_unit" id = "firstType" onchange="convert()">
                        <option value="kilogram"  id="kg"  >Kilogram [kg]</option>
                        <option value="gram"      id="g"   >Gram [g]</option>
                        <option value="miligram"  id="mg"  >Miligram [mg]</option>
                        <option value="ton"       id="t"   >Ton(metric) [t]</option>
                        <option value="pound"     id="lbs"  >Pound [lbs]</option>
                        <option value="ounce"     id="oz"   >Ounce [oz]</option>
                    </select>   

                </td>

                <td align="center">
            <input type="button" id="btnConvert" value="CONVERT" onclick="convert()"/>
            <input type="submit" id="btnSubmit" value="SUBMIT" />
            </td>              

            <td>
                <select name="to_unit" id = "secondType" onchange="convert()" >
                    <option value="kilogram"  id="kg"  >Kilogram [kg]</option>
                    <option value="gram"      id="g"   >Gram [g]</option>
                    <option value="miligram"  id="mg"  >Miligram [mg]</option>
                    <option value="ton"       id="t"   >Ton(metric) [t]</option>
                    <option value="pound"     id="lbs"  >Pound [lbs]</option>
                    <option value="ounce"     id="oz"   >Ounce [oz]</option>
                </select> 

            </td>

            </tr>



        </table>

    </form>

</div>
</body>
</html>


';