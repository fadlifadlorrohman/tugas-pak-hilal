<?PHP
$txu=$_POST["isi"];
$tja=$_POST["isi2"];

$pa = explode(" ",$tja);

      for($x=0;$x<count($pa);$x++){
        if($pa[$x] == $txu){
           echo $pa[$x] = "<b>$txu</b>"." ";
     }
     else
         {echo $pa [$x]." ";
    }
}
?>
