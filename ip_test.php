<?php

$var = "<html>test</html>";
strip_tags($var);
var_dump($var);
var_dump(strip_tags($var));
