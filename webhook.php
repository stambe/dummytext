<?PHP
print_r($_REQUEST);
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, json_encode($_REQUEST));
fclose($myfile);
?>