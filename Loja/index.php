<?php
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#loja" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha para casa de marmitas da Dona Rita, e escolha a sua marmita!!!</h1>
                    </header>
                    <p> Confira a lista de marmitas</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_loja">
			<header class="main_loja_header">
				<h1><a name="loja">Confira as marmitas</h1></a>
				<p>Aqui voce encontra nosso cardapio</p>
			</header>
			<?php
			if(is_array($lista) && !empty($lista)){
				foreach($lista as $key => $value){
			?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Sem marmitas no momento!!!";
		}
			?>
			
		</section>
	</main>

    <footer>
      <div class="body-content">
        <p>Desenvolvido por Thiago de Freitas Malta - RA20008957-5</p>
      </div>
    </footer>

</div>
</body>
</html>