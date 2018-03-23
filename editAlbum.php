<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "datamusic");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
     session_start();
      $_SESSION['idAlbum'] = $id;

    // Initialize message variable
    $msg = "";

    // If upload button is clicked ...
    if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // Get Informations

        $Album     = mysqli_real_escape_string($db, $_POST['Album']);
        $Publisher = mysqli_real_escape_string($db, $_POST['Publisher']);
        $Year      = mysqli_real_escape_string($db, $_POST['Year']);
        $Genrer   = mysqli_real_escape_string($db, $_POST['Genrer']);
        $Data      = mysqli_real_escape_string($db, $_POST['Data']);

        // image file directory
        $target = "img/" . basename($image);

        $sql = "UPDATE albums SET Album = '$Album', Publisher = '$Publisher', Year = '$Year',Data = '$Data',Image = '$image',Genrers = '$Genrer' WHERE idAlbums='$id';";
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Dados enviados com sucesso!";
        } else {
            $msg = "Erro ao enviar dados!";
        }
    }
    $result = mysqli_query($db, "SELECT * FROM albums WHERE idAlbums = '$id'");

?>

    <!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
  <meta name="description" content="StoreMusic">
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <meta name="author" content="Yem">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StoreMusic</title>
        <link rel="stylesheet" href="css/style.css"  type="text/css">
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        
    </head>
        <body>
            <div class="top">
              <a href="index.php"><div class="logo"></div></a>
                
               <section class="flexbox">
                    <div class="stretch">
                        <input type="text" name="search_text" id="search_text" placeholder="Pesquisar..." />
                    </div>
            </section>
                <ul class="list">
                <a href="index.php"><li>Home</li></a>
                <a href="#"><li>Lançamentos</li></a>     
                <a href="#"><li>Bandas</li></a>
                <a href="#"><li>Álbums</li></a>    
                <a href="#"><li>Perfil</li></a>
                <a href="addAuthors.php"><li>Adicionar Banda</li></a>      
                </ul>
            </div>
            <div class="body" id="result">
            <?php
    $Album;
    $Publisher;
    $Year;
    $Genrer;
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div2'>";
        echo "<img src='img/" . $row['Image'] . "' >";
        echo "<p class='albumname'>" . $row['Album'] . "</p>";

        $Album     = $row['Album'];
        $Publisher = $row['Publisher'];
        $Year      = $row['Year'];
        $Genrer    = $row['Genrers'];

    }

?>
                <form method="POST" action="editAlbum.php?id=<?php
    echo $id;
?>" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">
                    <div>
                        Foto do Álbum:
                        <input type="file" name="image" style="margin-top:20px">
                    </div>
                    <div>

                    </div>
                    <div><p class="album">Álbum:</p>
                        <input type="text" name="Album" value="<?php
    echo $Album;
?>" required>
                    </div>

                    <div>Publicadora:
                        <input type="text" name="Publisher" value="<?php
    echo $Publisher;
?>" required>
                    </div>
                      
                    <div>
                        <div>Ano de Lançamento:
                            <input type="text" name="Year" value="<?php
    echo $Year;
?>" required>
                        </div>
                        <div>Gênero:
                            <select name="Genrer"  required>
                              <option value="<?php echo $Genrer;?>" selected><?php echo $Genrer;?></option>
                               <option value=" Alternative Music"> Alternative Music</option>
                             <option value="Blues">Blues</option>
                            <option value="Classical Music">Classical Music</option>
                              <option value="Country Music">Country Music</option>
                                <option value="Dance Music">Dance Music</option>
                                <option value="Easy Listening">Easy Listening</option>
                                 <option value="Eletronic Music">Eletronic Music</option>
                                <option value="Folk/Pop">Folk/Pop</option>
                                 <option value="Hip Hop/Rap">Hip Hop/Rap</option>
                                 <option value="Indie Pop">Indie Pop</option>
                               <option value="Inspirational">Inspirational</option>
                                 <option value="Asia Pop">Asian Pop</option>
                                  <option value="Jazz">Jazz</option>
                                 <option value="Latin Music">Latin Music</option>
                                 <option value="New Age">New Age</option>
                                 <option value="Opera">Opera</option>
                               <option value="Pop">Pop</option>
                                <option value="R&B/Soul">R&B/Soul</option>
                                <option value="Reggae">Reggae</option>
                                  <option value="Rock">Rock</option>
                                 <option value="Singer/Song Writer">Singer/Song Writer</option>
                               <option value="World Music">World Music</option>
                            </select>
                        </div>
                        <div>Data de Hoje:
                            <input type="text" name="Data" value="<?php
    echo date('d/m/Y');
?>">
                        </div>
                        <button type="submit" name="upload" class="button-save">Salvar</button>

                    </div>
                    <?php
}
?>
                </form><?php echo "</div>"; ?>
                <form class="musics" method="post" action="addMusic.php?id=<?php echo $id?>"> 
                    Músicas(Envie de uma por uma):<input type="text" name="Music"><button type="submit">Enviar Música</button>
                 
                 </form>
                 <form class="musics" method="post" action="addMusic.php?id=<?php echo $id?>"> 
                    Músicas(Envie de uma por uma):<input type="text" name="Music"><button type="submit">Enviar Música</button>
                 
                 </form>
                 <form class="musics" method="post" action="addMusic.php?id=<?php echo $id?>"> 
                    Músicas(Envie de uma por uma):<input type="text" name="Music"><button type="submit">Enviar Música</button>
                 
                 </form>
                
                <table id="musics">
                    Músicas do Álbum:
                <tr>
                    <th>ID</th>
                    <th>Músicas</th>
                    <th></th>
                </tr>
                     <?php
                    $pMusic = "SELECT * FROM musics WHERE albumId='$id'";
                     $resultMusic = mysqli_query($db,$pMusic);
                      while($row = mysqli_fetch_array($resultMusic)){

                          echo  "<tr>";
                            echo    "<td>".$row['idMusic']."</td>";
                            echo    "<td>".$row['Music']."</td>";
                         echo "<td><a href='deleteMusic.php?id=" . $row['idMusic'] . "'><button type='submit' title='Deletar Banda' class='icons'><img src='icons/x.png' class='icons'></button></a></td>
                ";
                          echo "</tr>";
                      }
                    
                    ?>
                    </table>
        </div>
            
    </body>
    

    </html>