<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<!-- Carregamento do HEADER  -->
<?php $this->load->view('_includes/header') ?>
<body>
	<!-- Carregamento do MENU -->
	<?php $this->load->view('_includes/menu') ?>

	<div class="container padding-top-2">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Cadastre sua empresa aqui...</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 text-justify">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>

		<div class="row padding-top-2">
			<div class="col-sm-12 col-md-4">
				<div class="text-center">
					<i class="fa fa-dot-circle-o fa-4x"></i>
					<h3>
						<strong><i>Nosso objetivo</i></strong>
					</h3>
				</div>
				<p class="text-formatted">
					Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado 
					desde o século XVI
				</p>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="text-center">
					<i class="fa fa-question fa-3x"></i><i class="fa fa-question fa-4x"></i><i class="fa fa-question fa-3x"></i>
					<h3>
						<strong><i>Por quê?</i></strong>
					</h3>
				</div>
				<p class="text-formatted">
					Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado 
					desde o século XVI
				</p>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="text-center">
					<i class="fa fa-lightbulb-o fa-4x"></i>
					<h3>
						<strong><i>Uma Solução!</i></strong>
					</h3>
				</div>
				<p class="text-formatted">
					Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado 
					desde o século XVI
				</p>
			</div>
		</div>

		<br>
	</div>

	<!-- Carregamento do FOOTER -->
	<?php $this->load->view('_includes/footer') ?>
</body>
</html>