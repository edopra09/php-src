--TEST--
Test dechex() - basic function dechex()
--FILE--
<?php
$values = array(10,
                3950.5,
                3.9505e3,
                03,
                0x5F,
                "10",
                "3950.5",
                "3.9505e3",
                "039",
                "0x5F",
                true,
                false,
                null,
                );

foreach ($values as $value) {
    try {
        var_dump(dechex($value));
    } catch (TypeError $exception) {
        echo $exception->getMessage() . "\n";
    }
}

?>
--EXPECT--
string(1) "a"
string(3) "f6e"
string(3) "f6e"
string(1) "3"
string(2) "5f"
string(1) "a"
string(3) "f6e"
string(3) "f6e"
string(2) "27"
dechex(): Argument #1 ($number) must be of type int, string given
string(1) "1"
string(1) "0"
string(1) "0"
