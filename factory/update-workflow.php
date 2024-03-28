<?php
include "../include/connection.php";
if (isset($_GET['id'])) {
    $id = ($_GET['id']);
    $qr = mysqli_query($conn, "select * from tbl_user_orders WHERE id = $id");
    $qr2 = mysqli_query($conn, "select * from tbl_workflow WHERE id = 1");
    $db = mysqli_fetch_array($qr);
    $db2 = mysqli_fetch_array($qr2);
    $newChairCount = $db2['chair_count'] + $db['chair_count'];
    $newTableCount = $db2['table_count'] + $db['table_count'];
    $udqr = mysqli_query($conn, "UPDATE tbl_workflow SET chair_count = $newChairCount, table_count = $newTableCount WHERE id = 1");
    $updateQuery = mysqli_query($conn, "UPDATE tbl_user_orders SET workflow_added = 1 WHERE id = $id");
    
    if ($updateQuery) {
        echo "<script>alert('Successfully updated')</script>";
        echo "<script>window.location.href = 'checkorders.php'</script>";
        
    } else {
        echo "<script>alert('Some error occured')</script>";
        echo "<script>window.location.href = 'checkorders.php'</script>";

    }
}
else{
    echo "<script>window.location.href = 'checkorders.php'</script>";


}
?>
