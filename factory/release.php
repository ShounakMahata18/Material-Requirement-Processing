<?php
include "../include/connection.php";
    $qr = mysqli_query($conn, "select * from tbl_workflow WHERE id = 1");
    $db = mysqli_fetch_array($qr);
    $tcount= $db['table_count'];
    $ccount= $db['chair_count'];
    $qr2 = mysqli_query($conn, "select * from tbl_material where product = 'chair'");
    $db2 = mysqli_fetch_array($qr2);
    $qr3 = mysqli_query($conn, "select * from tbl_material where product = 'table'");
    $db3 = mysqli_fetch_array($qr3);
    
    $nailcount = ($ccount * $db2['nails'])+($tcount * $db2['nails']);
    $woodcount = ($ccount * $db2['wood'])+($tcount * $db2['wood']);
    $metalcount = ($ccount * $db2['metal'])+($tcount * $db2['metal']);
    $paintcount = ($ccount * $db2['paint'])+($tcount * $db2['paint']);
    $clampcount = ($ccount * $db2['clamps'])+($tcount * $db2['clamps']);
    if ($nailcount && $woodcount && $metalcount && $paintcount && $clampcount) {
        $inqr1 = mysqli_query($conn, "INSERT INTO `tbl_factory_tender`(`type`, `count`) VALUES ('nails','$nailcount')");
    $inqr2 = mysqli_query($conn, "INSERT INTO `tbl_factory_tender`(`type`, `count`) VALUES ('wood','$woodcount')");
    $inqr3 = mysqli_query($conn, "INSERT INTO `tbl_factory_tender`(`type`, `count`) VALUES ('metal','$metalcount')");
    $inqr4 = mysqli_query($conn, "INSERT INTO `tbl_factory_tender`(`type`, `count`) VALUES ('paint','$paintcount')");
    $inqr5 = mysqli_query($conn, "INSERT INTO `tbl_factory_tender`(`type`, `count`) VALUES ('clamps','$clampcount')");
    $udqr = mysqli_query($conn, "UPDATE tbl_workflow SET chair_count = '0', table_count = '0' WHERE id = 1");
    }
    

    if ($inqr1 && $inqr2 && $inqr3 && $inqr4 && $inqr5 && $udqr) {
        echo "<script>alert('Tenders Released!')</script>";
        echo "<script>window.location.href = 'workflow.php'</script>";
            }
            else{
                echo "INSERT INTO `tbl_factory_tender`(`type`, `count`) VALUES ('nails','$nailcount'";
            }
?>
