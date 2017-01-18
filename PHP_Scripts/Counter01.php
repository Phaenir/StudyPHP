<html>
<head>
    <title>Counter</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: RSadykov
 * Date: 18.01.2017
 * Time: 16:03
 */

$counter_file='../File_Dates/count.dat';
if (!($fp=fopen($counter_file,'r'))){
    die('Could not open file '.$counter_file);
}
$counter=(int)fread($fp,20);
fclose($fp);
$counter++;

echo "<p>You are a visitor #$counter.</p>";

$fp=fopen($counter_file,'w');
fwrite($fp,$counter);
fclose($fp);

?>


</body>
</html>


