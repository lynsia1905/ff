
<?php
header ('Content-type: text/html; charset=utf-8'); 

include "connect.php";

if(isset($_POST['ad']) || isset($_POST['soyad'])) {
    if(isset($_POST['ad']) && isset($_POST['soyad'])) {
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $sql = "SELECT * FROM sorgu18 WHERE ad='$ad' and soyad='$soyad'";
    } else {
        $tc = $_POST['Idenity'];
        $sql = "SELECT * FROM sorgu18 WHERE TC='$tc'";
    }
}
$result = mysqli_query($con, $sql) or die("Error in Selecting " . mysqli_error($con));

$fayujarray = array();
    while($row = mysqli_fetch_assoc($result)) {

    $fayujarray[] = $row;

  }

echo json_encode($fayujarray, JSON_UNESCAPED_UNICODE);


?>