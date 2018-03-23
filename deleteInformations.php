 <?php

if (isset($_GET['id'])) {
    
    $id  = $_GET['id'];
    $db  = mysqli_connect("localhost", "root", "", "datamusic");
    $sqlMusic = "DELETE FROM musics WHERE bandId = $id";
    mysqli_query($db,$sqlMusic);
    $sql = "DELETE FROM albums WHERE albumId='$id'";
    mysqli_query($db, $sql);
    $sql = "DELETE FROM bands WHERE idBand='$id'";
    mysqli_query($db, $sql);
    header('Location: index.php ');
} else {
    header(' Location: index.php ');
}
?> 