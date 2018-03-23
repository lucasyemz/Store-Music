 <?php

if (isset($_GET['id'])) {
    
    $id  = $_GET['id'];
    $db  = mysqli_connect("localhost", "root", "", "datamusic");
    $sqlMusic = "DELETE FROM musics WHERE albumId = $id";
    mysqli_query($db,$sqlMusic);
    $sql = "DELETE FROM albums WHERE idAlbums='$id'";
    mysqli_query($db, $sql);
    header('Location: index.php ');
} else {
    header(' Location: index.php ');
}
?> 