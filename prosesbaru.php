<?PHP

$kata = $_POST["fadli"];
$isi= "Indonesia tanah airku";
$ubah= $_POST["fadli2"];

$lem = strlen($kata);
$pos = strlen($isi, $kata);
$sub = strlen($isi, $pos, $sub);

$explode = explode(" ", $isi);
$arraycount = count($explode);
if($kata == $explode[0])
{
echo "Hasil : ";
$array = "<font style='color:OOPFFF'<b>$explode[0]</b></font>";
ECHO $array. " ";
ECHO $explode[1]. " ";
ECHO $explode[2]. "  <br>";
echo "Replace : ";
$array = "<fount style='colo:OOPFF'<b>$ubah</b></fount>;
ECHO $array. " ";
ECHO $explode[1]. " ";
ECHO $explode[2]. " ";
}
if($kata == $explode[1])
{
  echo "Hasil : ";
  $array = "<font style='color:OOPFFF'<b>$explode[0]</b></font>";
  ECHO $array. " ";
  ECHO $explode[1]. " ";
  ECHO $explode[2]. "  <br>";
  echo "Replace : ";
  $array = "<fount style='colo:OOPFF'<b>$ubah</b></fount>;
  ECHO $array." ";
  ECHO $explode[1]. " ";
  ECHO $explode[2]. " ";
}
if($kata == $explode[1])

{
  if($kata == $explode[2])
  {echo "Hasil : ";
  $array = "<font style="color:OOPFFF"<b>$explode[1]</b></font>";
  ECHO $array. " ";
  ECHO $explode[0]. " ";
  ECHO $explode[1]. "  <br>";
  echo $Replace : ";
  $array = "<fount style="colo:OOPFF"<b>$ubah</b></fount>;
  ECHO $array. " ";
  ECHO $explode[0]. " ";
  ECHO $explode[1]. " ";
}
