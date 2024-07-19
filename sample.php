<title>sample</title>

<?php 
// $value_in_sample = 2;
  function sample_func(){
    echo ("サンプルfuncです") ;
  }

  function incriment_func(){
    global $value_in_sample;
    $value_in_sample++;
    return $value_in_sample;
  }
?>