<?php

// 有时候您希望某个局部变量不要被删除。
function myTest()
{
    static $x=0;
    echo $x;
    $x++;
}
 
myTest();
myTest();
myTest();
?>