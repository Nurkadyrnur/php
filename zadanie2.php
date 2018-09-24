<?php

$arr = array('---','--x','-w-','-wx','r--','r-x','rw-','rwx');
do {
  $out='';
  $input = readline("vedite chislo\n");
  if(is_numeric($input) && strlen($input)==3){
    for ($i=0; $i < 3; $i++) {
      if($arr[$input[$i]]==null){
        echo "please print valid input\n";
        break;
      }else {
        $out = $out.$arr[$input[$i]];
      }

    };
    if (strlen($out)==9){
      echo $out."\n";
    }

  }elseif ($input != null){
    echo "please print valid input\n";
  }
} while ($input);


 ?>
