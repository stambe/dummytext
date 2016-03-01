<?PHP
print $request_body = file_get_contents('php://input');
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $request_body);
fclose($myfile);
?>