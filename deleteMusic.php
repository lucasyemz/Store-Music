 <?php

if (isset($_GET['id'])) {
	session_start();
	$newid = $_SESSION['idAlbum'];
    
    $id  = $_GET['id'];
    $db  = mysqli_connect("localhost", "root", "", "datamusic");
    $sql = "DELETE FROM musics WHERE idMusic='$id'";
    mysqli_query($db, $sql);
    header("Location: editAlbum.php?id=".$newid."");
    session_unset();
} else {
    header("Location: editAlbum.php?id=".$newid."");
       session_unset();
}
?> 