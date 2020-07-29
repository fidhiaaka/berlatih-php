<?php
function tukar_besar_kecil($string)
{
  //kode di sini
  $arr = array();
  $data = '';

  for($i=0; $i<strlen($string); $i++)
  {
    // $random = rand(1, strlen($string));
    if($string[$i]>= 'a' && $string[$i]<= 'z')
    {
      $data = $data.strtoupper($string[$i]);
      // echo  "<br>";
    }
    else
    {
      $data = $data.strtolower($string[$i]);
      // echo "<br>";
    }
  }
  print_r($data);
  echo "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>