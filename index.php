<?php
$strings = ["HELLO WORLD", "HELLO PHP", "BYE CAT"];
function setLowerCase($str1)
{
    return strtolower($str1);
}
function concat($str2, $str3)
{
    return "$str2 - $str3";
}

print_r(array_reduce(array_map("setLowerCase", $strings), "concat"));
