<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Carregamento do HEADER  -->
	<?php $this->load->view('_includes/administrativo/header') ?>
</head>
<body>
	<div id="wrapper">
		<!-- Carregamento do HEADER  -->
		<?php $this->load->view('_includes/administrativo/menu') ?>

		<div id="page-wrapper">
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2><i class="fa fa-home"></i>&nbsp;<strong><?php echo $NomeFantasia; ?></strong></h2>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6">
						Usuario Cadastrados
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						Total de Serviços
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						Total de Vagas
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						Vagas Disponiveis
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Carregamento do MENU -->
	<?php $this->load->view('_includes/administrativo/footer') ?>	
</body>
</html>