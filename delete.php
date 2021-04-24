<?php
require './database.php';

if(isset($_POST['delete'])){
    $deleteId = $_POST['deleteID'];

    $queryDelete = "DELETE FROM accounts WHERE id = $deleteId";
    $sqlDelete = mysqli_query($connection, $queryDelete);
    
    echo '<script> alert("Successfully Deleted") </script>';
    echo '<script> window.location.href = "./index.php" </script>';

}else{
    echo '<script> window.location.href = "./index.php" </script>';
}

?>