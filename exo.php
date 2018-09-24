<?php
function igra()
{
  $sif = rand(1,100);
  $distanc=0;
  $distanc1=0;
  do {
      $input = intval(readline("угадайте число: \n"));
      $distanc1 = abs($sif-$input);
      if (abs($input-$sif) == 0){

        echo "molodes ugadal\n";
        break;
      }elseif (abs($input-$sif)<3) {

        echo "ochen garecho\n";
      }elseif (abs($input-$sif)<5) {

        echo "garecho\n";
      }elseif ($distanc<$distanc1) {
        echo "xolodna \n";
      }else {
        echo "teplee \n";
      };

      $distanc = abs($sif-$input);
  } while ($input);

};






do {
    echo "хочеш поиграть (y/n)";
    $input = readline();
    if ($input=='y'){
      igra();
    }else {
      break;
    };


} while (True);

echo "Программа остановлена.\n";
