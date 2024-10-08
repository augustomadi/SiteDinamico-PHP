<section class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/bg-form2.jpg');" class="banner-single"></div><!--banner-single-->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/bg-form3.jpg');" class="banner-single"></div><!--banner-single-->
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/bg-form4.jpg');" class="banner-single"></div><!--banner-single-->
	<div class="overlay"></div><!--overlay-->	
		<div class="center">
		    
			<?php 
			    if(isset($_POST['acao'])){
			        // Verificando se o formulário foi enviado
			        if($_POST['email'] != '' ){
			            // $email = $_POST['email'];
			            // if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			                // É um email válido, você pode enviar
			                // $mail = new Email("vps...",'seu-email','user','nome');
			                // $mail->addAdress('email','nome');
			                // $info = array('assunto'=>'Um novo e-mail cadastrado no site!','corpo'=>$email);
			                // $mail->formatarEmail($info);
			                // if($email->enviarEmail()){
			                //     echo '<script>alert("Enviado com sucesso!")</script>';
			                // }
			            // } else {
			            //     echo '<script>alert("Não é um e-mail válido!");</script>';
			            // }
			        } else {
			            echo '<script>alert("Campos vazios não são permitidos!");</script>';
			        }
			    }
			?>
		 
		    <form method="post">
		        <h2>Qual o seu melhor e-mail?</h2>
		        <input type="email" name="email" required />
		        <input type="submit" name="acao" value="Cadastrar!">
		    </form>
		</div><!--center-->

	<div class="bullets">
			


	</div><!--bullets-->
</section><!--banner-principal-->

	<section class=" descricao-autor">
		<div class="center">
		<div class="w50 left">
			<h2>Augusto Madi</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac eros a sem elementum aliquet. Sed congue ligula et felis convallis, vitae dictum felis faucibus. Praesent tincidunt nibh at nisl maximus, a gravida nisi porta. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ex elit, venenatis id efficitur id, ultricies nec arcu. Suspendisse eu justo id elit ultrices viverra pharetra ac sem. Mauris lacus tortor, placerat sit amet ligula a, laoreet tincidunt augue.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac eros a sem elementum aliquet. Sed congue ligula et felis convallis, vitae dictum felis faucibus. Praesent tincidunt nibh at nisl maximus, a gravida nisi porta. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ex elit, venenatis id efficitur id, ultricies nec arcu. Suspendisse eu justo id elit ultrices viverra pharetra ac sem. Mauris lacus tortor, placerat sit amet ligula a, laoreet tincidunt augue.</p>
		</div><!--w50-->
		<div class="w50 left">
			<!--pegar imagem depois-->
			<img class="right" src="<?php echo INCLUDE_PATH; ?>imagens/foto_Copia.jpeg" />

		</div><!--w50-->
		<div class="clear"></div>
		</div><!--center-->
	</section><!--descricao-autor-->
	<section class="especialidades">
		<div class="center">
		<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-css3"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue ligula et felis convallis, vitae dictum felis faucibus.</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue ligula et felis convallis, vitae dictum felis faucibus.</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-js"></i></h3>
				<h4>JavaScript</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue ligula et felis convallis, vitae dictum felis faucibus.</p>
			</div><!--box-especialidade-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->

	<section class="extras">
		<div class="center">
			<div id="depoimentos" class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac eros a sem elementum aliquet. Sed congue ligula et felis convallis, vitae dictum felis faucibus. Praesent tincidunt nibh at nisl maximus, a gravida nisi porta. Aliquam erat volutpat.</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac eros a sem elementum aliquet. Sed congue ligula et felis convallis, vitae dictum felis faucibus. Praesent tincidunt nibh at nisl maximus, a gravida nisi porta. Aliquam erat volutpat.</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac eros a sem elementum aliquet. Sed congue ligula et felis convallis, vitae dictum felis faucibus. Praesent tincidunt nibh at nisl maximus, a gravida nisi porta. Aliquam erat volutpat.</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->
			
			<div id="servicos" class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				</ul>
			</div><!--servicos-->
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->

	</section><!--extras-->