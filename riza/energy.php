<?php
require './components/header.php';
require "../components/header.php";
echo '
<html>
    <head>
<meta charset="UTF-8">
<title>Dashboard</title>
</head>
<header>
' . getHeader("energy") . '
</header>
<body>
    <form name="myform" action="../database/operations.php">
    <input type="hidden" name="type" value="energy">
        <div>
            <table id="table" width="949" height="700" background="power.png" border="0"  >

                <tr>
                    <td width="409" height="161"></td>
                    <td width="50"></td>
                    <td width="75"></td>
                    <td width="15"></td>
                    <td width="100"></td>
                    <td width="400"></td>
                </tr>
                <tr>
                    <td width="409" height="30"></td>
                    <td width="50"></td>
                    <td width="75"></td>
                    <td width="15"></td>
                    <td width="100"></td>
                    <td width="400"></td>
                </tr>
                <tr>
                    <td width="409" height="50"></td>
                    <td width="50"><div>Power:</div></td>
                <td width="75"><label for="power"></label><input type="text" name="from_value" id="power" style="width:70px; height:20px;" oninput="convert()" ></td>
                    <td width="15"><div>Sonuç:</div></td>
                    <td width="100"><label for="result"></label><input type="text" name="to_value" id="result"></td>
                    <td width="400"></td>
                    </tr>
                    <tr>
                        <td width="409" height="50"></td>
                        <td width="50"></td>
                        <td width="75">
                            <select id="unit" name="from_unit" size="5" onchange="convert()" class="select">
                                <option value="watts" selected="">Watt</option>
                                <option value="kilowatts">Exawatt</option>
                                <option value="megawatts">Petawatt</option>
                                <option value="joules">Terawatt</option>
                                <option value="kilojoules">Gigawatt</option>
                            </select></td>
                        <td width="15"></td>
                        <td width="100">
                            <select id="result-unit" name="to_unit" size="5" onchange="convert()" class="select">
                                <option value="watts" selected="">Watt</option>
                                <option value="kilowatts">Exawatt</option>
                                <option value="megawatts">Petawatt</option>
                                <option value="joules">Terawatt</option>
                                <option value="kilojoules">Gigawatt</option>
                            </select></td>
                        <td width="400"></td>
                    </tr>
                    <tr>
                        <td width="409"  height="100"></td>
                        <td width="50"></td>
                        <td width="75"></td>
                        <td width="15"></td>
                        <td width="100"></td>
                        <td width="400"></td>
                    </tr>
                    <tr>
                        <td width="409"  height="209"></td>
                        <td width="50"></td>
                        <td width="75"></td>
                        <td width="15"></td>
                        <td width="100"></td>
                        <td width="400"></td>
                    </tr>
            </table>
        </div>

    </form>
<script>
    function convert() {
        var power = document.getElementById("power").value;
        var unit = document.getElementById("unit").value;
        var resultUnit = document.getElementById("result-unit").value;
        var resultelement = document.getElementById("result");
var result = 0;
        

        if (unit == "watts") {
            if (resultUnit == "watts") {
                result = power + " watts";
            } else if (resultUnit == "kilowatts") {
                result = (power * 0.001);
            } else if (resultUnit == "megawatts") {
                result = (power * 0.000001);
            } else if (resultUnit == "joules") {
                result = (power * 3600) ;
            } else if (resultUnit == "Kilojoule") {
                result = (power * 3.6);
            }
        } else if (unit == "kilowatts") {
            if (resultUnit == "watts") {
                result =(power * 1000) ;
            } else if (resultUnit == "kilowatts") {
                result = power ;
            } else if (resultUnit == "megawatts") {
                result = (power * 0.001) ;
            } else if (resultUnit == "joules") {
                result = (power * 3600000);
            } else if (resultUnit == "Kilojoule") {
                result = (power * 3600) ;
            }
        } else if (unit == "megawatts") {
            if (resultUnit == "watts") {
                result =  (power * 1000000);
            } else if (resultUnit == "kilowatts") {
                result =(power * 1000);
            } else if (resultUnit == "megawatts") {
                result = power ;
            } else if (resultUnit == "joules") {
                result = (power * 3600000000) ;
            } else if (resultUnit == "Kilojoule") {
                result = (power * 3600000) ;
            }
        } else if (unit == "joules") {
            if (resultUnit == "watts") {
                result = power (power * 0.0002777778);
            } else if (resultUnit == "kilowatts") {
                result = (power * 0.0000002777778);
            } else if (resultUnit == "megawatts") {
                result =,(power * 0.0000000002777778),;
            } else if (resultUnit == "joules") {
                result = power ,;
            } else if (resultUnit == "Kilojoule") {
                result =,(power * 0.001),;
            }
        } else if (unit == "Kilojoule") {
            if (resultUnit == "watts") {
                result =(power * 0.2777777778);
            } else if (resultUnit == "kilowatts") {
                result = (power * 0.0002777778) ;
            } else if (resultUnit == "megawatts") {
                result = (power * 0.00000002777778);
            } else if (resultUnit == "joules") {
                result = (power * 1000) ;
            } else if (resultUnit == "Kilojuole") {
                result = power;
            }
        }
console.log(result);
        document.getElementById("result").value = result;
    }
</script>
</body>
</html>
';