<?php
for($number = 1; $number <= 100; $number ++)
{
    if ($number % 3 && $number % 5 == 0)
    {
    echo 'Fizzbuzz ';
  } elseif ($number % 3 == 0)
    {
    echo 'Fizz ';
  } elseif ($number % 5 == 0)
    {
    echo 'Buzz ';
  } else {
    echo $number . ' ';
  }

}
 ?>
