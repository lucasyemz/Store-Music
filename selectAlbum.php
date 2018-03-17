<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "datamusic");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Initialize message variable
    
    $result  = mysqli_query($db, "SELECT * FROM albums WHERE albumId='$id'");
    $result2 = mysqli_query($db, "SELECT * FROM bands WHERE albumId='$id'");
    
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
        <h2>Escolha o álbum que deseja utilizar:</h2>
          <?php
    
    while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
        echo "<img src='img/" . $row['Image'] . "' >";
        echo "<p>" . $row['Album'] . "</p>";
        echo "<a href='editAlbum.php?id=" . $row['idAlbums'] . "'><button type='submit' title='Editar Álbum'><img src='icons/editAlbum.png' class='icons'></button></a>";
        echo "<a href='deleteAlbum.php?id=" . $row['idAlbums'] . "'><button type='submit' title='Deletar Álbum'><img src='icons/x.png' class='icons'></button></a>";
        echo "</div>";
        
    }
}

?>
    
        </div>
    </body>

    </html>