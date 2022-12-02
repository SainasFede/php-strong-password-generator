<?php 

function randomPsw($lenght, $string){
  $pswUser = '';
  if(!empty($lenght)){
    var_dump($string);
    var_dump($lenght);
    for($i = 0; $i <= $lenght; $i++) {
      $index = rand(0, strlen($string) -1);
      $pswUser .= $string[$index];
    };
    return $pswUser;
  }else {
    return '';
  };
};

?>