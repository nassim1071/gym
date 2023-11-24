<?php
    // Get the XML data from the POST request
    $xmlData = file_get_contents("php://input");

    // Load the XML string
    $xml = simplexml_load_string($xmlData);

    // Extract UID from the XML
    $UIDresult = (string)$xml->UIDresult;

    // Process the UID as needed
    // For example, you can store it in a file or a database
    file_put_contents('UIDContainer.php', '<?php $UIDresult="' . $UIDresult . '"; echo $UIDresult; ?>');
    
    // Send a response (optional)
    echo "Received UID: " . $UIDresult;
?>
