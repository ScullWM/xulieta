--TEST--
Report a warning in case of missing PHP open tag
--FILE--
<?php

$checkRunner = require __DIR__ . '/init.php';

$checkRunner('tests/assets/syntax-error.rst');

--EXPECTF--
Finding documentation files on tests/assets/syntax-error.rst

Wrong code on file: tests/assets/syntax-error.rst
Syntax error, unexpected '}', expecting ';' on line 5

<?php

if (true) {
    echo 'Hello World!'
}


     Operation failed!
