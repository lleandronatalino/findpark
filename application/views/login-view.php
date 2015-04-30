<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<!-- Carregamento do HEADER  -->
<?php $this->load->view('_includes/header') ?>
<body class="bg-img-login not-padding-bottom">

	<!-- Incluindo o conteudo -->
	<div class="container padding-top-0">
		<div class="col-md-offset-4 col-md-4 col-md-offset-4 text-center margin-bottom-0">
			<div class="row">
				<div class="col-md-12">
					<a class="no-link" href="../home/index"><img src="../content/img/logo.png" alt="Find park"></a>
				</div>
			</div>
		</div>	

		<!-- ADD formulário -->
		<form class="form-signin" role="form" method="post" action="<?php echo base_url('home/login') ?>" data-toggle="validator" data-delay="0">

			<div class="row">
				<div class="col-md-offset-4 col-md-4 col-md-offset-4 text-center box-white">
					<div class="row">
						<div class="col-md-12">
							<h3><strong>Login</strong></h3>
						</div>
					</div>
					<?php 
					echo validation_errors("<p>","</p>"); 
					if (isset($userInvalid))
						echo $userInvalid;
					?>

					<div class="row">
						<div class="form-group padding-top-0">
							<div style="margin-bottom: 25px" class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon not-border-radius"><i class="fa fa-user"></i></span>
									<input id="login-username" type="text" class="form-control" name="username" value="<?php echo set_Value('username') ?>" 
									placeholder="Email ou Login" data-error="Informe o LOGIN ou E-MAIL" required />
								</div>    
								<div class="help-block with-errors"></div>                          
							</div>
						</div>

						<div class="form-group padding-top-0">
							<div style="margin-bottom: 25px" class="col-md-12">
								<div class="input-group">
									<span class="input-group-addon not-border-radius"><i class="fa fa-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="userpassword" value="" 
									placeholder="Senha" required data-minlength="6" maxlength="32" data-error="Informe sua senha"/>         
								</div>    
								<div class="help-block with-errors"></div>
								<span class="help-block">Minimo de 6 caracteres</span>                       
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-f-error not-border-radius pull-right width-10" type="submit">
								Entrar&nbsp;<i class="fa fa-sign-in"></i>
							</button>
						</div>
					</div>
					<div class="row padding-top-0">
						<hr>
					</div>
					<div class="row">
						<div class="col-md-12 padding-top-0">
							<h4>Esqueceu sua senha?</h4>
						</div>
						<div class="col-md-12">
							<small><a href="#">Clique aqui</a>&nbsp;para resetar sua senha</small>
							<br><br>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- Fechando o FRM -->
	</div>
	<script type="text/javascript" src="<?php echo base_url('content/js/jquery-1.11.2.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('content/js/validator.min.js') ?>"></script>
</body>
</html>