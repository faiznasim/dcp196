<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
   fscanf(STDIN, "%f %f\n", $u, $t);
   $res = $u / $t;

   fprintf(STDOUT, "-%.2f\n", $res);
}