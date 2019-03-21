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
	<!-- CSS Personaliado--> 
	<link rel="stylesheet" href="css/table.css">
	<!-- CSS do Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--Font Awesome === ICONES MANEIROS-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
	

	<!--DataTables-->
	<!--Default-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<!--Estilização-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>
	<div class="container" style="margin-top: 20px">
		<div class="row col-12">

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
						flash("mensagem", "Por favor, insira um arquivo CSV!", "danger");
						header("Location: index.php");
					} else {
					//processe
						if($extesao !== "csv"){
							flash("mensagem", "Extensão Inválida!", "danger");
							header("Location: index.php");
						} else {

							?>
							<div class="table-responsive text-nowrap ">
								<table class="table table-striped table-bordered" cellspacing="0" style="width:100%" >
									<?php
									$csv = file($arquivo);
									foreach ($csv as $row => $line) {
										$th[] = explode(";", utf8_encode($line));
										$td[] = explode(" ", utf8_encode($line));
										$row++;
										$column = str_getcsv(utf8_encode($line), ';');
										?><?php
										if($row == 1){
											?>
											<thead>
												<tr>
													<?php
													foreach($th as $value){
														$cols = 17;
														for ($i=0; $i < $cols; $i++) { 
															?>
															<th scope="col" style="font-size: 12px"><?= $value[$i] ?></th>
															<?php
														}
													}
													?>
												</tr>
											</thead>
											
											<?php
										}
										?>
										
										<?php
										if($row !== 1){
											?>
											<tbody>

												<tr>
													<?php
													for ($i=0; $i < count($column); $i++) { 
														?>
														<td class="lead th" style="font-size: 12px"><?=$column[$i]?></td>
														<?php
													}
													?>	

												</tr>
											</tbody>

											<?php
										}	
									}
									?>
								</table>
							</div>

							<?php
						}
					}
				}
			}
			?>
		</div>
	</div>
</div>

<!--Bootstrap-->
<!-- Primeiro o jQuery, depois o Popper.js, e depois o Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--/Bootstrap-->

<!--Plugin DataTables-->
<!--Default-->
<script  charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!--Estilização-->
<script  charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script  charset="utf8" src=""></script>
	<!--
		<script  charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>-->

		<!--Configuração-->
		<script type="text/javascript">
			$(document).ready( function () {
				$('.table').DataTable({
					"processing": true,
					"paging":   false,
					"ordering": true,
					"scrollX": true,
					"scrollY":        "400px",
					"scrollCollapse": true,
					"searching": true,
					"info": false,
					"responsive": true,
				});
			} );


		</script>
	</body>
</html>


