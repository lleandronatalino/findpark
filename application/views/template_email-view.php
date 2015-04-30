<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>E-Mail</title>
</head>
<body style="font-family: Conv_ProximaNova-Light, Arial, Tahoma; font-weight: 500;">
	<div style="border: 1px solid #ccc;">
		<div style="background: #0B2542; padding-top: 10px;">
			<center>
				<h1 style="color: white;">
					Find Park<strong> - Encontre seu Estacionamento.</strong>
				</h1>
			</center>
		</div>
		<div style="margin-left: 10px;">
			<center>
				<h2>Seja Bem Vindo</h2>
			</center>
			<p class="padding-top-0">
				Você se cadastrou no <strong><i>Find Park</i></strong>... 
				<br><br>É um imenso prazer tê-lo como utilizador do sistema, 
				mas antes de acessar o sistema preciso que você valide este <i>e-mail</i>, abaixo você recebeu um código,
				com este código você irá validar este <i>e-mail</i>, confira o passo-a-passo.:
			</p>
		</div>
		<div style="margin-left:50px;">
			<p>
				<strong>Passo 1:</strong>
				Cópie ó código abaixo.
			</p>
			<p>
				<strong>Passo 2:</strong>
				Acesse o sistema com seu <i>login</i> <strong>ou</strong> <i>E-mail</i> e senha.
			</p>
			<p>
				<strong>Passo 3:</strong>
				Cole o código copiado no <strong>passo 1</strong> no campo de validação, e em seguida clique em <strong>Confirmar</strong>.
			</p>
		</div>
		<div>
			<p >
				<small>Abaixo seu código para validar seu acesso ao sistema.:</small>
				<br>
				<center>
					<h2 style="background: #F4F1F1;">
						<strong>Código: </strong> <span><?php if(isset($codigo)) echo $codigo ?></span>
					</h2>
				</center>
			</p>
		</div>
		<hr>	
		<div >
			<center>
				<small>Este e-mail é eletrônico, por favor não responda.</small>
			</center>
		</div>
	</div>
</body>
</html>