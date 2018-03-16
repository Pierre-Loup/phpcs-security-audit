<?php

$_GET['a'] = 'xss';
print("aaa" . $_GET['a']);
echo($_GET['a']);
echo $_GET['a'];
echo "{$_GET['a']}";
print "${_GET['a']}";
echo a($_GET['b']);
echo (allo(a($_GET['c'])));
echo arg(1);
die( htmlspecialchars("" . $_GET['a']) );
exit("exit" . $_GET['a']);
