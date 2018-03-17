 <?php

if (isset($_GET['id'])) {
    
    $id  = $_GET['id'];
    $db  = mysqli_connect("localhost", "root", "", "datamusic");
    $sql = "DELETE FROM bands WHERE idBand='$id'";
    mysqli_query($db, $sql);
    header('Location: index.php ');
} else {
    header(' Location: index.php ');
}
?> 