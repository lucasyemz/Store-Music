

<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "datamusic");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get Informations
    $Band = mysqli_real_escape_string($db,$_POST['Band']);  
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $Data = mysqli_real_escape_string($db,$_POST['Data']);
  	// image file directory
  	$target = "img/".basename($image);

  	$sql = "INSERT INTO bands VALUES ('null','$Band','$image_text','$image','$Data')";
  	// execute query
  	$query = mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Dados enviados com sucesso!";
  	}else{
  		$msg = "Erro ao enviar dados!";
  	}
  }
  
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
                 
            
                
          <form method="POST" action="addAuthors.php" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">
                    <div>
                        Foto do Álbum
                        <input type="file" name="image">
                    </div>
              
                    <div>Banda:
                        <input type="text" name="Band" required>
                    </div>
               <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Descrição da banda!"></textarea>
                        <div>Data de Hoje:
                            <input type="text" name="Data" value="<?php echo date( 'd/m/Y');?>">
                        </div>
                        <button type="submit" name="upload" class="button-save">Salvar</button>
                    
                </form>
              
        </div>
    </body>

    </html>