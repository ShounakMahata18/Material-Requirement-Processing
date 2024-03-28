<?php
include "../include/connection.php";
if (isset($_GET['id']) && isset($_GET['by'])) {
    $by = $_GET['by'];
    $id = ($_GET['id']);
    $updateQuery = mysqli_query($conn, "UPDATE tbl_factory_tender SET accepted_status = '1', accepted_by='$by', acceptance_date = NOW() WHERE id = $id");
    
    if ($updateQuery) {
        echo "<script>alert('Successfully updated')</script>";
        echo "<script>window.location.href = 'accept.php'</script>";
        
    } else {
        echo "<script>alert('Some error occured')</script>";
        echo "<script>window.location.href = 'accept.php'</script>";

    }
}
else{
    echo "<script>window.location.href = 'accept.php'</script>";


}
?>
