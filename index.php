<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="palavras-chave-do-meu-site">
	<meta name="description" content="Descrição do meu website">
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>imagens/favicon.ico" type="image" type="image/x-icon">
	<meta charset="utf-8">
</head>
<body>

	<?php 
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;
			
			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}

	?>

	<?php //new Email(); ?>

	<header>
		<div class="center">
		<div class="logo left"><a href="/">Logomarca</div><!--logo-->
		<nav class="desktop right">
			<ul>	
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<nav class="mobile right">
			<div class="botao-menu-mobile"><i class="fa-solid fa-bars"></i></div>
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>
<?php 

	if(file_exists('pages/'.$url.'.php')){
		include('pages/'.$url.'.php');
	}else{
		//Podemos fazer oque quiser.
		if ($url != 'depoimentos' && $url != 'servicos') {
			$pagina404 = true;
			include('pages/404.php');
		}else{
			include('pages/home.php');
		}
	}

?>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>	
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

	<?php
		if($url == 'home' || $url == ''){

 	?>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php } ?>


	<?php
		if($url == 'contato'){

 	?>
	<script>
		(g => {
		var h, a, k, p = "The Google Maps JavaScript API",
		c = "google",
		l = "importLibrary",
		q = "__ib__",
		m = document,
		b = window;
		b = b[c] || (b[c] = {});
		var d = b.maps || (b.maps = {}),
		r = new Set,
		e = new URLSearchParams,
		u = () => h || (h = new Promise(async (f, n) => {
		await (a = m.createElement("script"));
		e.set("libraries", [...r] + "");
		for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
		e.set("callback", c + ".maps." + q);
		a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
		d[q] = f;
		a.onerror = () => h = n(Error(p + " could not load."));
		a.nonce = m.querySelector("script[nonce]")?.nonce || "";
		m.head.append(a)
		}));
		d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
		})({
		key: "AIzaSyA6iYArY4u6LhQ1o8pLzhjQODWTfBgh9XY",
		v: "weekly",
		 });
	</script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<?php } ?>

</body>
</html>

