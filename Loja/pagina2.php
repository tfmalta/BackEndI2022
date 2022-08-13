<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
<style>

.main_tutorial img{
    width: 30%;
}

.main_tutorial p{
    margin: 10px 0;
	font-size: 1.2em;
	text-align: justify;
}

.main_tutorial h3{
    font-size: 0.9em;
}

.main_tutorial article{
    flex-basis: 100%;
    margin-bottom: 10px;
}

</style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>	
		<section class="main_loja">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					//echo "ID = ". $_GET['id'];
					$id = $_GET['id'];//validar o recebimento do id
					foreach($lista as $key => $value){
						if($value['id'] == $id){
					?>
						<header class="main_loja_header">
							<h1><?=$value['titulo'];?></h1>
						</header>

						<article>
						<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">

						<p><?=$value['descricao'];?></p>
						</article>			
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Ver mais marmitas</h1>
			</header>
			<?php
			$id = 0;
				foreach($lista as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
				}
			?>
		</section>
	</main>

    <footer>
      <div class="body-content">
        <p>Desenvolvido por Thiago de Freitas Malta - RA20008957-5</p>
      </div>
    </footer>
</body>
</html>