<?php
$filename="C:\\Users\\HP\\Documents\\Web-Devlopment\\PHP\\07.File\\f1.txt";
// a mode a ager data rakhe dey
$fp=fopen("f2.txt","a");
fwrite($fp,"Marcury\n");
fwrite($fp,"Venus\n");
fwrite($fp,"Earth\n");
//$exiostIngData=file_get_contents("f2.txt");
//fwrite($fp,$exiostIngData);
fclose($fp);

?>