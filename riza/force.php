<?php
require "../components/header.php";
echo '
<html>
    <head>
<meta charset="UTF-8">
<title>Dashboard</title>
</head>
<header>
' . getHeader("force") . '
</header>
<body>
    <form name="myform" action="../database/operations.php" method="post">
    <input type="hidden" name="type" value="force">
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
                <td width="75"><label for="power"></label>
                <input type="text" name="from_value" id="power" style="width:70px; height:20px;" oninput="convert()" ></td>
                    <td width="15"><div>Sonuç:</div></td>
                    <td width="100"><label for="result"></label>
                    <input type="text" name="to_value" readonly id="result"></td>
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
                            </select>
                            </td>
                        <td width="15">
                        
</td>
                        <td width="100">
                            <select id="result-unit" name="to_unit" size="5" onchange="convert()" class="select">
                                <option value="watts" selected="">Watt</option>
                                <option value="kilowatts">Exawatt</option>
                                <option value="megawatts">Petawatt</option>
                                <option value="joules">Terawatt</option>
                                <option value="kilojoules">Gigawatt</option>
                            </select>
                            </td>
                        <td width="400"></td>
                    </tr>
                    <tr>
                        <td width="409"  height="100"></td>
                        <td width="50"></td>
                        <td width="75">
        <input type="submit" value="Kaydet"></td>
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
                result = (power * 1.60934);
            } else if (resultUnit == "megawatts") {
                result = power + " watts = " + (power * 0.44704) + " megawatts";
            } else if (resultUnit == "joules") {
                result = power + " watts = " + (power * 1.466667) + " joules";
            } else if (resultUnit == "Kilojoule") {
                result = power + " watts = " + (power * 0.868976) + " Kilojoule";
            }
        } else if (unit == "kilowatts") {
            if (resultUnit == "watts") {
                result = power + " kilowatts = " + (power * 0.621371) + " watts";
            } else if (resultUnit == "kilowatts") {
                result = power + " kilowatts";
            } else if (resultUnit == "megawatts") {
                result = power + " kilowatts = " + (power * 0.277778) + " megawatts";
            } else if (resultUnit == "joules") {
                result = power + " kilowatts = " + (power * 0.911344) + " joules";
            } else if (resultUnit == "Kilojoule") {
                result = power + " kilowatts = " + (power * 0.539957) + " Kilojoule";
            }
        } else if (unit == "megawatts") {
            if (resultUnit == "watts") {
                result = power + " megawatts = " + (power * 2.236936) + " watts";
            } else if (resultUnit == "kilowatts") {
                result = power + " megawatts = " + (power * 3.6) + " kilowatts";
            } else if (resultUnit == "megawatts") {
                result = power + " megawatts";
            } else if (resultUnit == "joules") {
                result = power + " megawatts = " + (power * 3.28084) + " joules";
            } else if (resultUnit == "Kilojoule") {
                result = power + " megawatts = " + (power * 1.943844) + " Kilojoule";
            }
        } else if (unit == "joules") {
            if (resultUnit == "watts") {
                result = power + " joules = " + (power * 0.681818) + " watts";
            } else if (resultUnit == "kilowatts") {
                result = power + " joules = " + (power * 1.09728) + " kilowatts";
            } else if (resultUnit == "megawatts") {
                result = power + " joules = " + (power * 0.3048) + " megawatts";
            } else if (resultUnit == "joules") {
                result = power + " joules";
            } else if (resultUnit == "Kilojoule") {
                result = power + " joules = " + (power * 0.592484) + " Kilojoule";
            }
        } else if (unit == "Kilojoule") {
            if (resultUnit == "watts") {
                result = power + " Kilojoule = " + (power * 1.150779) + " watts";
            } else if (resultUnit == "kilowatts") {
                result = power + " Kilojoule = " + (power * 1.852) + " kilowatts";
            } else if (resultUnit == "megawatts") {
                result = power + " Kilojoule = " + (power * 0.514444) + " megawatts";
            } else if (resultUnit == "joules") {
                result = power + " Kilojoule = " + (power * 1.687809) + " joules";
            } else if (resultUnit == "knot") {
                result = power + " Kilojoule";
            }
        }
console.log(result);
        document.getElementById("result").value = result;
    }
</script>
</body>
</html>
';