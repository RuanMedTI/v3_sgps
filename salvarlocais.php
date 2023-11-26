<?php
	include("config.php");
	switch ($_REQUEST["acao"]) {
		case 'cadastrarlocal':
			$sql = "INSERT INTO locais 
						(local_nome, endereco, cep, cidade, uf)
					VALUES
						('".$_POST["local_nome"]."','".$_POST["endereco"]."','".$_POST["cep"]."','".$_POST["cidade"]."','".$_POST["uf"]."')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='locais.php';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar.');</script>";
				print "<script>location.href='locais.php';</script>";
			}
			break;
		
		case 'editarlocal':
			$sql = "UPDATE locais SET
						local_nome='".$_POST["local_nome"]."',
						endereco='".$_POST["endereco"]."',
						cep='".$_POST["cep"]."',
						cidade='".$_POST["cidade"]."',
						uf='".$_POST["uf"]."'
					WHERE
						id=".$_POST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='locais.php';</script>";
			}else{
				print "<script>alert('Não foi possível editar.');</script>";
				print "<script>location.href='locais.php';</script>";
			}
			break;

		case 'excluirlocal':
			$sql = "DELETE FROM locais WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='locais.php';</script>";
			}else{
				print "<script>alert('Não foi possível excluir.');</script>";
				print "<script>location.href='locais.php';</script>";
			}
			break;
	}
?>