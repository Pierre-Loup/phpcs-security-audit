<?php

preg_replace("/.*/ei", 'aaaaaaa', 'bbbbb');
preg_replace("/.*/ei", $_GET['a'], 'aaaaaaa');
preg_replace($_GET['b'], $_GET['a'], $_GET['c']);
preg_replace($b, $_GET['a'], 'aaaaaa');
preg_replace("aaa", $_GET['a'], 'ababaaa');
