<?php
	include("config.php");
	switch ($_REQUEST["acao"]) {
		case 'cadastrarcompromisso':
			$sql = "INSERT INTO compromissos 
						(local_compromisso, data_compromisso, voluntario_resp, cidade, uf)
					VALUES
						('".$_POST["local_compromisso"]."','".$_POST["data_compromisso"]."','".$_POST["voluntario_resp"]."','".$_POST["cidade"]."','".$_POST["uf"]."')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='compromissos.php';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar.');</script>";
				print "<script>location.href='compromissos.php';</script>";
			}
			break;
		
		case 'editarcompromisso':
			$sql = "UPDATE compromissos SET
						local_compromisso='".$_POST["local_compromisso"]."',
						data_compromisso='".$_POST["data_compromisso"]."',
						voluntario_resp='".$_POST["voluntario_resp"]."',
						cidade='".$_POST["cidade"]."',
						uf='".$_POST["uf"]."'
					WHERE
						id=".$_POST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='compromissos.php';</script>";
			}else{
				print "<script>alert('Não foi possível editar.');</script>";
				print "<script>location.href='compromissos.php';</script>";
			}
			break;

		case 'excluircompromisso':
			$sql = "DELETE FROM compromissos WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='compromissos.php';</script>";
			}else{
				print "<script>alert('Não foi possível excluir.');</script>";
				print "<script>location.href='compromissos.php';</script>";
			}
			break;
	}
?>