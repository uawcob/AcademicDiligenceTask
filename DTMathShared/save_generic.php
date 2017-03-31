<?php
   //Capture data from $_POST array
   $record = $_POST['record'];
   $file_name = $_POST['file_name'];
   //Make one big string in a format Flash understand
   $toSave = $record;
   //Open a file in write mode
   //$fp = fopen("../php_data/hello.txt", "a");
   $fp = fopen($file_name, "a");
   if(fwrite($fp, $toSave)) echo "writing=Ok";
   else echo "writing=Error";
   fclose($fp);
?>
