<html>
    <head>
    <title>riza</title>
</head>
<body>
<div id="content">
        <h1>Speed Converter</h1>
        <div id="quickcalc" style="display:none;"></div>

        <div id="result" class="resulttext"></div>
        <form>
            <table id="table">
                <tbody><tr>
                        <td class="cell">From:<br><input type="text" name="from" class="input" id="from" onkeyup="UpdateResult();" autofocus=""></td>
                    <td class="cell">To:<br><input type="text" name="to" class="input" id="to" style="background-color:#eeeeee;" readonly=""></td>
                        </tr>
                        <tr>
                            <td class="cell">
                                <select name="ucfromunit" id="fromunit" size="7" onchange="UpdateResult();" class="select">
                                    <option value="meter/second [m/s] [2777777777777.8]" selected="">meter/second [m/s]</option>
                                    <option value="kilometer/hour [km/h] [10000000000000]">kilometer/hour [km/h]</option>
                                    <option value="mile/hour [mi/h] [6213711922373.3]">mile/hour [mi/h]</option>
                                    <option value="meter/hour [m/h] [1.0E+16]">meter/hour [m/h]</option>
                                    <option value="meter/minute [m/min] [1.6666666666667E+14]">meter/minute [m/min]</option>
                                    <option value="kilometer/minute [km/min] [166666666666.67]">kilometer/minute [km/min]</option>
                                    <option value="kilometer/second [km/s] [2777777777.7778]">kilometer/second [km/s]</option>
                                </select>
                            <td class="cell">
                                <select name="tounit" id="tounit" size="7" onchange="UpdateResult();" class="select">
                                    <option value="meter/second [m/s] [2777777777777.8]" selected="">meter/second [m/s]</option>
                                    <option value="kilometer/hour [km/h] [10000000000000]">kilometer/hour [km/h]</option>
                                    <option value="mile/hour [mi/h] [6213711922373.3]">mile/hour [mi/h]</option>
                                    <option value="meter/hour [m/h] [1.0E+16]">meter/hour [m/h]</option>
                                    <option value="meter/minute [m/min] [1.6666666666667E+14]">meter/minute [m/min]</option>
                                    <option value="kilometer/minute [km/min] [166666666666.67]">kilometer/minute [km/min]</option>
                                    <option value="kilometer/second [km/s] [2777777777.7778]">kilometer/second [km/s]</option>
                                </select>
                        </tr>
                        </tbody></table>
                        </form>

                        </body>
                        </html>