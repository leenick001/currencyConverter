<html>
    <head>
        <title>Currency Converter</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Convert Your Currency</h1>
        <div class="container">
        <form action="CurrencyConverter.php" method="get">

            Enter Amount : <input type="text" name="input" />
            Select Currency : 
            <select name="dropdown">
                <option value="usd">US Dollar</option>
                <option value="ero">Euro</option>
                <option value="gdp">British Pound</option>
            </select>
            <button type="submit" name="sbmt" value="Convert">Convert</button>
        </form>
        </div>
    </body>
    </html>
    <?php

    if(isset($_GET['sbmt'])) {
        $cc_input = $_GET['input'];
        $cc_dropdown = $_GET['dropdown'];
    
        if($cc_dropdown == 'usd') {
            $output = $cc_input * 0.00955192;
            echo "<h1>" . number_format($output,2) . " Dollar" . "</h1>";
        } 
            else if ($cc_dropdown == 'ero') {
            $output = $cc_input * 0.00841979;
            echo "<h1>" . number_format($output,2) . " Euro" . "</h1>";
        }
            else if ($cc_dropdown == 'gdp')  {
            $output = $cc_input * 0.00662901;
            echo "<h1>" . number_format($output,2) . " British Pounds" . "</h1>";
          }
    }

    ?>