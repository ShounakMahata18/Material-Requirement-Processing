<?php
include "../include/connection.php";
if (isset($_GET['id'])) {
    $id = ($_GET['id']);
    $updateQuery = mysqli_query($conn, "UPDATE tbl_factory_tender SET delivered = 1 WHERE id = $id");
    
    if ($updateQuery) {
        echo "<script>alert('Successfully updated')</script>";
        echo "<script>window.location.href = 'viewtenders.php'</script>";
        
    } else {
        echo "<script>alert('Some error occured')</script>";
        echo "<script>window.location.href = 'viewtenders.php'</script>";

    }
}
else{
    echo "<script>window.location.href = 'viewtenders.php'</script>";


}
?>
