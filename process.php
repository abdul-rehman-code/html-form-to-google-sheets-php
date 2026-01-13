<?php
// Composer php ki libraries load karna yeh php ka dependency manager hota hy to age mzeed files py 
//depend krti hy. means phly file download hogi agr wo ksi r file py depend krrhi to wo phly download hogi r install hogi.
require 'vendor/autoload.php'; 
//google libraries to create connection
use Google\Client; //main connection tool
use Google\Service\Sheets; // btata hy  k hmy bs sheet k sath km krna
use Google\Service\Sheets\ValueRange; //google api library.

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    
 $spreadsheetId = '1-5sa4PyYbxMYtJtJWI3raTn'; 
    $range = 'Sheet1!A:E'; 

    // Client r Auth setup
    $client = new Client(); //obj jo connectivity ko handle krrh ho
    $client->setAuthConfig('credentials.json'); 
    $client->addScope(Sheets::SPREADSHEETS);
    $service = new Sheets($client);

    $values = [[
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['password'],
        date("Y-m-d H:i:s")
    ]];

    $body = new ValueRange(['values' => $values]);  // pack kr k bhjta h
    $params = ['valueInputOption' => 'RAW'];

    try {
        //google library function. is main already throw inbuild hy
        $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
        echo "<h2 style='color:green; text-align:center;'>Data inserted</h2>";
        echo "<p style='text-align:center;'><a href='index.php'>go back</a></p>";
    } 
    catch (Exception $e) {
       
        echo '<strong>Error:</strong> ' . $e->getMessage();
      
    }
}
?>