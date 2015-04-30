<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
	<!-- Carregamento do HEADER  -->
	<?php $this->load->view('_includes/header') ?>
<body>
	<!-- Carregamento do MENU -->
	<?php $this->load->view('_includes/menu') ?>

	<!-- Incluindo o conteudo -->
	<div class="container">
		<div class="col-md-12  text-center padding-top-0">
			<h2>Agora o <strong class="text-green"><i>Find Park</i></strong> está na sua mão!</h2>
			<h4>Procure o estacionamento no seu celular ou tablet</h4>
		</div>
	</div>

	<!-- Carregando a imagem dispositivos -->
	<div class="row center padding-top-1">
		<div class="col-md-12 box-gray">
			<img src="/findpark/content/img/smart-oficial.png" class="img-responsive center" alt="Responsive image">
		</div>
	</div>

	<!-- Incluindo o conteudo  -->
	<div class="container padding-top-2">
		<div class="row">
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
		
		<div class="padding-top-1">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center"><strong>...Mas afinal, como funciona o <i class="text-green">Find Park</i>?</strong></h3>
				</div>
			</div>
			<div class="row padding-top-0">
				<div class="col-md-12">
					<p class="text-justify">
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o 
						século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
						Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente 
						inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais 
						recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
					</p>
					<p class="text-justify">
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o 
						século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de 
						tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo 
						essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, 
						e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Carregamento do FOOTER -->
	<?php $this->load->view('_includes/footer') ?>
</body>
</html>