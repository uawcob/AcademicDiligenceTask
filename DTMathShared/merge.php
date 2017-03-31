<?php
 $files = glob("./logs/*.txt");
 $out = fopen("./logs/merged/merged.txt", "w");

 echo count($files);
 foreach($files as $file){
//	echo $file;
       $in = fopen($file, "r");
	while (($line = fgets($in)) !== false) {	
            fwrite($out, $line);
       }
       fclose($in);
  }
  fclose($out);
?>
