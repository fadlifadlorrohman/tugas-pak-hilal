<?PHP
$var1= $_POST['fadli1'];
$var2= $_POST['fadli2'];
$var3= $_POST['fadli3'];

if($var1 > $var2 && $var1 < $var3){
echo "$var3 Ialah Angka Terbesar <br>
      $var1 Ialah Angka Menengah <br>
      $var2 Ialah Angka Terkecil <br>";
}
else if($var2 > $var1 && $var1 < $var3){
echo "$var2 Ialah Angka Terbesar <br>
      $var3 Ialah Angka Menengah <br>
      $var1 Ialah Angka Terkecil <br>";
}
else if($var1 > $var3 && $var2 < $var3){
echo "$var1 Ialah Angka Terbesar <br>
      $var3 Ialah Angka Menengah <br>
      $var2 Ialah Angka Terkecil <br>";
}
else if($var3 > $var2 && $var1 < $var2){
  echo "$var3 Ialah Angka Terbesar <br>
        $var2 Ialah Angka Menengah <br>
        $var1 Ialah Angka Terkecil <br>";
}
else if ($var1 > $var2 && $var3 < $var2){
  echo "$var1 Ialah Angka Terbesar <br>
        $var2 Ialah Angka Menengah <br>
        $var3 Ialah Angka Terkecil <br>";
}
else if($var2 > $var1 && $var1 < $var3){
   echo "$var2 Ialah Angka Terbesar <br>
         $var1 Ialah Angka Menengah <br>
         $var3 Ialah Angka Terkecil <br>";
}
