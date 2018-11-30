<?PHP
$var1=$_POST['fadli1'];
$var2=$_POST['fadli2'];
$var3=$_POST['fadli3'];
$var4=$_POST['fadli4'];
$var5=$_POST['radio1'];
$var6=$_POST['radio2'];
$var7=$_POST['radio3'];
$var8=$_POST['radio4'];

if ($var1 && $var5 == "Pria"){
echo "<font color='cccccc'>$var1</font>Jenis Kelamin Pria<br>";
}
else {
echo "<font color='0000ff'>$var1</font>Jenis Kelamin Wanita<br>";
}

if ($var2 && $var6 == "Pria"){
  echo "<font color='cccccc'>$var2</font>Jenis Kelamin Pria<br>";
}
else {
  echo "<font color='0000ff'>$var2</font>Jenis Kelamin Wanita<br>";
}

if ($var3 && $var7 == "Pria"){
  echo "<font color='cccccc'>$var3</font> Jenis Kelamin Pria<br>";
}
else {
  echo "<font color='0000ff'>$var3</font>Jenis Kelamin Wanita<br>";
}

if ($var4 && $var8 == "Pria"){
  echo "<font color='cccccc'>$var4</font>Jenis Kelamin Pria<br>";
}
else {
  echo "<font color='0000ff'>$var4</font>Jenis Kelamin Wanita<br>";
}
?>
