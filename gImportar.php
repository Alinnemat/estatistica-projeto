<?php
//-----includes------
  require_once 'functions/functions.php';
  carregaIncludes("functions/", array("config", "conexao", "database"));
//-----/includes-----
	//gravar dados e checar
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['entrar']) || !empty($_POST['entrar'])){
			$arquivo = $_FILES["file"]["tmp_name"];
			$nome = $_FILES["file"]["name"];

			$ext = explode(".", $nome);
			$extesao´= end($ext);
				if(!isset($arquivo) || empty($arquivo)){
					flash("mensagem", "Por favor, insira um arquivo!", "danger");
					header("Location: index.php");
				} else {
					//processe
					if($extensao !== "csv"){
						flash("mensagem", "Extensão Inválida!", "danger");
						header("Location: index.php");
					} else {
						flash("mensagem", "Extensão Inválida!", "danger");
						header("Location: index.php");
					}

				}
		}
	}