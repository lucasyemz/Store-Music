<?php
$db = mysqli_connect('localhost', 'root', '', 'datamusic');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_GET['id'])) {
    
    $id    = $_GET['id'];
    $Music = $_POST['Music'];
    
    
    $sqlName = "SELECT * FROM albums WHERE idAlbums='$id';";
    
    $queryName = mysqli_query($db, $sqlName);
    
    
    $Album;
    $bandId;
    $idAlbum;
    while ($row = mysqli_fetch_array($queryName)) {
        $Album   = $row['Album'];
        $bandId  = $row['albumId'];
        $idAlbum = $row['idAlbums'];

            $sqlNewMusic = "INSERT INTO musics  VALUES(null,'$Music','$bandId','$idAlbum');";
            mysqli_query($db, $sqlNewMusic);
    }
    
    header("Location: editAlbum.php?id=$id");
    
}





