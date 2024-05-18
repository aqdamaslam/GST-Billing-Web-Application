<?php
// Create log line 
$logline = $ipaddress . '|' . $date . '|' . $time . '|' . $useragent . '|' . $remotehost . '|' . $page . "\n"; 

// Write to log file: 
$logfile = 'Logfile.xls'; 

// Open the log file in "Append" mode 
if (!$handle = fopen($logfile, 'a+')) { 
    die("Failed to open log file"); 
} 

// Write $logline to our logfile. 
if (fwrite($handle, $logline) === FALSE) { 
    die("Failed to write to log file"); 
} 
   
fclose($handle);
?>
