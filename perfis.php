<?php include 'header.php'; ?>
<!-- Conteúdo -->
<html>

<!-- https://pt.stackoverflow.com/questions/173795/como-criar-p%C3%A1gina-para-cada-usu%C3%A1rio-com-php-->
<?php
require ("conector.php");
?>
<!--Depois disso você vai verificar se a variável 'u' foi indicada ou não.-->
<? if(isset($_GET['u'])){<!--Aqui será o código para o caso da variável ter sido indicada-->}

else{$usuario = $_GET['u'];
	$sql = mysql_query("SELECT * FROM Anunciante WHERE id_usuario = '$usuario' ")
	while($linha = mysql_fetch_array($sql)){
$nome = $linha['nome']; <!--Aqui pegamos o conteúdo do campo NOME de seu banco e deixamos 'salvo' na $nome. Faça isso para todos os campos como foto, descrição, página do facebook ou qualquer outra coisa que queira apresentar na sua página ok.-->

$foto = $linha['foto'];

$usuario = $linha['usuario'];
    }
	
	
	
	
	
	<!--Aqui será o código quando não houve variável indicada, ou seja, a página padrão mesmo ou
	 simplesmente um redirecionamento para uma outra página como index.php ou qualquer outra.
	  Aqui vou deixar um redirecionamento para s
	  ua página index.php ok-->

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=index.php'>";
} ?>

<!--//////////////////mostra o conteudo na pagina////////////////////-->
<img src="<? echo $foto; ?>" width="100"/>

		
</html>
<!-- fim Conteúdo -->	
<?php include 'footer.php'; ?>
