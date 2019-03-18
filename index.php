
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title> CSV IMPORT! | Básico</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content=" " />
		<meta name="author" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="index, folow" />
		<!--Icone-->
		<link rel="icon" type="image/x-icon" href="img/logo.ico">
		<!-- CSS Personaliado -->
  		<link rel="stylesheet" href="css/style.css">
		<!-- CSS do Bootstrap -->
  		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!--Font Awesome === ICONES MANEIROS-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
	</head>
	<body class="body">
		<div class="container">
	        <div class="row justify-content-center align-items-center body">
	            <div class="col-md-8 col-sm-12 col-lg-5">
	                
	                <h2 class="text-center"> Upload Arquivo CSV</h2>
	                <?= getFlash('mensagem'); ?>
	                <form method="post" action="gImportar.php" enctype="multpart/form-data">
	                	<div class="jumbotron">
		                	<div class="chekbox">
		                		<label><input type="file" name="csv" /></label>
		                	</div>
		                	<button type="submit" class="btn btn-secondary" name="importar"> Importar </button>
	                	</div>
	                </form>
	            </div>
	        </div>
    	</div>
		



		<!--Bootstrap-->
		<!-- Primeiro o jQuery, depois o Popper.js, e depois o Bootstrap JS -->
  	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<!--/Bootstrap-->
	</body>
</html>