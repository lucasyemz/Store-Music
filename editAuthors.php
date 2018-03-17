<?php

$connect = mysqli_connect("localhost", "root", "", "datamusic");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM bands join albums join musics 
  on  bands.Band  LIKE '%".$search."%' and albums.albumId = bands.idBand and musics.albumId = albums.idAlbums
  OR albums.Album    LIKE '%".$search."%' and albums.albumId = bands.idBand and musics.albumId = albums.idAlbums
  OR musics.Music LIKE '%".$search."%' and albums.albumId = bands.idBand and musics.albumId = albums.idAlbums
  OR albums.Year  LIKE '%".$search."%' and albums.albumId = bands.idBand and musics.albumId = albums.idAlbums
 ";
}
else
{
 $query = "
  SELECT * FROM bands ORDER BY Band
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0){

   
 while($row = mysqli_fetch_array($result))
 {
 echo "<div id='img_div'>";
    echo "<img src='img/" . $row['Image'] . "' >";
   if(isset($row['Album']) && $row['Album'] == true) {  echo "<p style='font-size:10px'>" .$row['Album'] . "</p>"; }
    echo "<p style='font-size:10px'>" . $row['Band'] . "</p>";
    
    
    echo "<a href='editInformationsBand.php?id=" . $row['idBand'] . "'><button type='submit' title='Editar Banda'><img src='icons/editpencil.png' class='icons'></button></a>";
    echo "<a href='addAlbum.php?id=" . $row['idBand'] . "'><button type='submit' title='Adcionar Álbum'><img src='icons/albumAdd.png' class='icons'></button></a>";
    echo "<a href='selectAlbum.php?id=" . $row['idBand'] . "'><button type='submit' title='Editar Álbums'><img src='icons/editAlbum.png' class='icons'></button></a>";
    echo "<a href='deleteInformations.php?id=" . $row['idBand'] . "'><button type='submit' title='Deletar Banda'><img src='icons/x.png' class='icons'></button></a>
                ";
    echo "</div>";
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>