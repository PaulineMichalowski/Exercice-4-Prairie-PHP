<?php
$number = 1;
for($number = 1; $number <= 100; $number ++)
{
  echo $number.' ';
    if (($number % 3) == 0)
    {
    echo 'Fizz', ' ';
    }
    if (($number % 5) == 0)
    {
    echo 'Buzz', ' ';
    }
    if (($number % 5 && 3) == 0)
    {
    echo 'FizzBuzz', ' ';
    }
}
 ?>
