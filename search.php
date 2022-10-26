<?php
  $mot = "WayToLearnX";
  $str = "Hello, Welcom to WayToLearnX";
   
  // Teste si la chaîne contient le mot
  if(strpos($str, $mot) !== false){
    echo "Le mot existe!";
  } else{
    echo "Le mot n'existe pas!";
  }
?>