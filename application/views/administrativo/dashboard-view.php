<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Área Restrita</title>
	<!-- Carregamento do HEADER  -->
	<?php $this->load->view('_includes/administrativo/header') ?>
</head>
<body>
	<div id="wrapper" class="active">
		<!-- Carregamento do MENU -->
		<?php $this->load->view('_includes/administrativo/menu') ?>
		<div id="page-content-wrapper">
			<div class="row">
				<!-- Carregamento do INFO LOGIN -->
				<?php $this->load->view('_includes/administrativo/info_login') ?>
				<br><hr>
				<div class="col-md-12 text-center padding-top-0">
					<h1><strong><?php echo $NomeFantasia; ?></strong></h1>
				</div>

			</div>

			<div class="row padding-top-1">
				<div class="col-md-offset-2 col-md-2 border text-center">
					<img class="lib-img-show img-responsive" src="/findpark/content/img/estacionamentos/sem-imagem.png" />
					<br>
					<span class="text-center"><a href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Editar</a></span>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="form-group">
							<label class="col-sm-3 control-label">Nome Fantasia:</label>
							<div class="col-sm-9">
								<?php echo $NomeFantasia; ?>						
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label class="col-sm-3 control-label">Razão Social:</label>
							<div class="col-sm-9">
								<?php echo $DsRazaoSocial; ?>						
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label class="col-sm-3 control-label">CNPJ:</label>
							<div class="col-sm-9">
								<?php echo $cnpj; ?>						
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label class="col-sm-3 control-label">CEP:</label>
							<div class="col-sm-9">
								<?php echo $cep; ?>						
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label class="col-sm-3 control-label">Endereço:</label>
							<div class="col-sm-9">
								<?php echo $Rua.' - '.$Numero.', '.$Bairro.' - '.$Cidade.' - '.$UF; ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label class="col-sm-3 control-label">Telefone:</label>
							<div class="col-sm-9">
								<?php echo $Telefone; ?>						
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label class="col-sm-3 control-label">Complemento:</label>
							<div class="col-sm-9">
								<?php echo $Complemento; ?>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
		</div>
		<!-- Carregamento do MENU -->
		<?php $this->load->view('_includes/administrativo/footer') ?>	
	</div>
</body>
</html>