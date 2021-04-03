<?php
$Company="estra";
$Service="COACHTECH";

echo $Company."は".$Service."を運営しています";


for ($i = 1; $i <= 100; $i++) {
   if ($i % 3 === 0 && $i % 5 === 0) {
       echo "fizzbuzz";
       echo "\n";
    //    continue;
   }
   if ($i % 5 === 0) {
       echo "buzz";
       echo "\n";
    //    continue;
   }
   if ($i % 3 === 0) {
       echo "fizz";
       echo "\n";
    //    continue;
   }
   echo $i;
   echo "\n";
}
;
