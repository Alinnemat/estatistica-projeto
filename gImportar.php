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
	            <?php
//-----includes------
require_once 'functions/functions.php';
carregaIncludes("functions/", array("config", "conexao", "database"));
//-----/includes-----
	//gravar dados e checar
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['importar']) || !empty($_POST['importar'])){

		$arquivo = $_FILES["file"]["tmp_name"];
		$nome = $_FILES["file"]["name"];

		$ext = explode(".", $nome);
		$extesao = $ext[1];
		if(!isset($arquivo) || empty($arquivo)){
			flash("mensagem", "Por favor, insira um arquivo!", "danger");
			header("Location: index.php");
		} else {
					//processe
			if($extesao !== "csv"){
				flash("mensagem", "Extensão Inválida!", "danger");
				header("Location: index.php");
			} else {
				
				?>
				<div class="table-responsive">
                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
				
					<thead>
						<tr>
							<?php
							$objeto = fopen($arquivo, 'r');
							//$d = 17;
							$count = 17;
							while (($dados = fgetcsv($objeto, 1000, ";")) !== FALSE) {
								
								//titulo das colunas
								for ($i=0; $i < $count; $i++) { 
									echo "<th>".$dados[$i]."</th>";
								}

								
								

							}
							fclose($objeto);
							?>
						</tr>
					</thead>
					<tbody>
						<tr>

							<?php
							$objeto = fopen($arquivo, 'r');
							while (($dados = fgetcsv($objeto, 1000, ";")) !== FALSE) {
								$max = 17;

								for ($i=1; $i < $max; $i++) { 
									echo "<td>".print_r($dados[$i])."</td>";
								}
								//
								

							}
							fclose($objeto);
							?>
						</tr>
					</tbody>
				</table>
			</div>
			<?php			
			}
		}
	}
}


?>
		<!--Bootstrap-->
		<!-- Primeiro o jQuery, depois o Popper.js, e depois o Bootstrap JS -->
  	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<!--/Bootstrap-->
	</body>
</html>


