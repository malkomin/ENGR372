<?php
require "../components/header.php";
echo '
<html>
    <head>
<meta charset="UTF-8">
<title>Dashboard</title>
</head>
<header>
' . getHeader("speed") . '
</header>
<body>
    <form name="myform" action="../database/operations.php" method="post">
    <input type="hidden" name="type" value="speed">
        <div>
            <style>
               
  div.container {
    font-size: 30px;
    font-family: fantasy;
  }

                table {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
                body {
                    background-color: black;
                    color: white;
                }
                div.container {
    font-size: 20px;
  }

            </style>
            <table id="table" width="1500" height="700" background="speed.png" border="0"  >

                <tr>
                    <td width="620" height="341"></td>
                    <td width="30"></td>
                    <td width="100"></td>
                    <td width="10"></td>
                    <td width="100"></td>
                    <td width="640"></td>
                </tr>
                <tr>
                    <td width="620" height="30"></td>
                    <td width="30"></td>
                    <td width="100"><div class="container"></div></td>
                    <td width="10"></td>
                    <td width="100"><div class="container"><em></em></div></td>
                    <td width="640"></td>
                </tr>
                <tr>
                    <td width="620" height="50"></td>
                    <td width="30"><div>Hız:</div></td>
                    <td width="100"><label for="speed"></label><input type="text" name="from_value" id="speed" oninput="convert()" style="width:100px; height:20px;" ></td>
                    <td width="10"></td>
                    <td width="100"><label for="result">Sonuç:</label><output color="white" type="text" name="to_value" id="result"></td>
                    <td width="640"></td>
                    </tr>
                    <tr>
                        <td width="620" height="50"></td>
                        <td width="30"></td>
                        <td width="100">
                            <select id="unit" name="from_unit" size="5" onchange="convert()" class="select">
                                <option value="mph" selected="">Mil/saat (mph)</option>
                                <option value="kph">Kilometre/saat (kph)</option>
                                <option value="mps">Metre/saniye (m/s)</option>
                                <option value="fps">Fit/saniye (ft/s)</option>
                                <option value="knot">Deniz mili/saat (kn)</option>
                            </select></td>
                        <td width="10"></td>
                        <td width="100">
                            <select id="result-unit" name="to_unit" size="5" onchange="convert()" class="select">
                                <option value="mph" selected="">Mil/saat (mph)</option>
                                <option value="kph">Kilometre/saat (kph)</option>
                                <option value="mps">Metre/saniye (m/s)</option>
                                <option value="fps">Fit/saniye (ft/s)</option>
                                <option value="knot">Deniz mili/saat (kn)</option>
                            </select></td>
                        <td width="640"></td>
                    </tr>
                    <tr>
                        <td width="620"  height="100"></td>
                        <td width="30"></td>
                        <td width="100"></td>
                        <td width="10"></td>
                        <td width="100"></td>
                        <td width="640"></td>
                    </tr>
                    <tr>
                        <td width="620"  height="29"></td>
                        <td width="30"></td>
                        <td width="100"></td>
                        <td width="10"></td>
                        <td width="100"></td>
                        <td width="640"></td>
                    </tr>
            </table>
        </div>

    </form>
<script>
    function convert() {
        
        var speed = document.getElementById("speed").value;
        var unit = document.getElementById("unit").value;
        var resultUnit = document.getElementById("result-unit").value;

        
        var result;
        if (unit == "mph") {
            if (resultUnit == "mph") {
                result = speed + " mph";
            } else if (resultUnit == "kph") {
                result = (speed * 1.60934);
            } else if (resultUnit == "mps") {
                result = speed + " mph = " + (speed * 0.44704) + " m/s";
            } else if (resultUnit == "fps") {
                result = speed + " mph = " + (speed * 1.466667) + " ft/s";
            } else if (resultUnit == "knot") {
                result = speed + " mph = " + (speed * 0.868976) + " kn";
            }
        } else if (unit == "kph") {
            if (resultUnit == "mph") {
                result = speed + " kph = " + (speed * 0.621371) + " mph";
            } else if (resultUnit == "kph") {
                result = speed + " kph";
            } else if (resultUnit == "mps") {
                result = speed + " kph = " + (speed * 0.277778) + " m/s";
            } else if (resultUnit == "fps") {
                result = speed + " kph = " + (speed * 0.911344) + " ft/s";
            } else if (resultUnit == "knot") {
                result = speed + " kph = " + (speed * 0.539957) + " kn";
            }
        } else if (unit == "mps") {
            if (resultUnit == "mph") {
                result = speed + " m/s = " + (speed * 2.236936) + " mph";
            } else if (resultUnit == "kph") {
                result = speed + " m/s = " + (speed * 3.6) + " kph";
            } else if (resultUnit == "mps") {
                result = speed + " m/s";
            } else if (resultUnit == "fps") {
                result = speed + " m/s = " + (speed * 3.28084) + " ft/s";
            } else if (resultUnit == "knot") {
                result = speed + " m/s = " + (speed * 1.943844) + " kn";
            }
        } else if (unit == "fps") {
            if (resultUnit == "mph") {
                result = speed + " ft/s = " + (speed * 0.681818) + " mph";
            } else if (resultUnit == "kph") {
                result = speed + " ft/s = " + (speed * 1.09728) + " kph";
            } else if (resultUnit == "mps") {
                result = speed + " ft/s = " + (speed * 0.3048) + " m/s";
            } else if (resultUnit == "fps") {
                result = speed + " ft/s";
            } else if (resultUnit == "knot") {
                result = speed + " ft/s = " + (speed * 0.592484) + " kn";
            }
        } else if (unit == "knot") {
            if (resultUnit == "mph") {
                result = speed + " kn = " + (speed * 1.150779) + " mph";
            } else if (resultUnit == "kph") {
                result = speed + " kn = " + (speed * 1.852) + " kph";
            } else if (resultUnit == "mps") {
                result = speed + " kn = " + (speed * 0.514444) + " m/s";
            } else if (resultUnit == "fps") {
                result = speed + " kn = " + (speed * 1.687809) + " ft/s";
            } else if (resultUnit == "knot") {
                result = speed + " kn";
            }
        }
        document.getElementById("result").innerHTML = result;
    }
</script>
</body>
</html>
';