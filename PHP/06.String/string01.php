<?php
$name="Rakib";
$string01="my name is $name";
echo $string01."\n";
$heredoc=<<<EOD
data 1
new line{$name} \n
more text
EOD;
echo $heredoc."\n";

$heredoc=<<<'EOD'
data 1
new line{$name} \n
more text
EOD;
echo $heredoc;

?>