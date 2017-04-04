<?php
   //Capture data from $_POST array
   $record = $_POST['record'];
   $file_name = $_POST['file_name'];

   // make sure the filename is of the form ./logs/DTMathShared-something.txt
   if ( preg_match('~^\./logs/DTMathShared\-.+\.txt$~', $file_name) !== 1 ) {
        throw new Exception("invalid filename: $file_name");
   }

   //Make one big string in a format Flash understand
   $toSave = $record;
   //Open a file in write mode
   //$fp = fopen("../php_data/hello.txt", "a");
   $fp = fopen($file_name, "a");
   if(fwrite($fp, $toSave)) echo "writing=Ok";
   else echo "writing=Error";
   fclose($fp);
?>
