<?php
$x=5;
$y=10;
// 函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：
function myTest()
{
    global $x,$y;
    $y=$x+$y;
}
 
myTest();
echo $y; // 输出 15
?>