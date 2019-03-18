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
						$objeto = fopen($arquivo, 'r');
							while (($dados = fgetcsv($objeto, 1000, ";")) !== FALSE) {
								
							}
					}

				}
		}
	}