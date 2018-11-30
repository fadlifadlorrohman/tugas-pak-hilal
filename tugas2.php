<html>
<head>
  <title> birth lops</title>
</head>
<body align = center>
  Your date of birth<br>
  <form method="post" action="tugas2.php">
    <select name="Bulan">
      <?php
      $i=1;
      $month =  strtotime('2018-01-01');
      while ($i <13){
        $month_name = date('F',$month);

        echo "<option value=Bulan> $month_name <option>";
        $month = strtotime('+ month',$month);
        $i++;
}
?>
</select>
<select name="hari">
  <?php
  $k=1;
  while ($k < 32){

    echo "<option value=hari>$k</option>";
    $k++;
}
?>
</select>
<select name="hari">
  <?php
  $k=1;
  while ($k < 32){

    echo "<option value=hari>$k</option>";
    $k;
}
?>
</select>
<select name="Tahun">
<?php
$Fadli=1945;
while($Fadli < 2001){
echo "<option>$Fadli<option>";
$Fadli++;
}
?>
</select>
<Input type="submit" name="submit" value="submit">
<p>
<font size="+1"><b>Note : </b> tugas2.php adalah tugas2.php.</font>
</body>
</html>
