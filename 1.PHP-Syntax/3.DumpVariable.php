<?php
function varDump($var) {
    if (is_numeric($var)) {
        var_dump($var);
    } else {
        echo gettype($var);
        echo "<br />\n";
    }
}

varDump("hello");
varDump(15);
varDump(1.234);
varDump(array(1,2,3));
varDump((object)[2,34]);
?>