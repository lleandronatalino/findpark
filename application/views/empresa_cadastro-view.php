<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<!-- Carregamento do HEADER  -->
<?php $this->load->view('_includes/header') ?>

<body>
	<!-- Carregamento do MENU -->
	<?php $this->load->view('_includes/menu') ?>

	<div class="container padding-top-2">
		<div class="stepwizard">
			<div class="stepwizard-row setup-panel">
				<div class="stepwizard-step">
					<p>Passo</p>
					<a href="#step-1" type="button" class="btn btn-f-sucess btn-circle"><span class="text-font-2">1</span></a>
				</div>
				<div class="stepwizard-step">
					<p>Passo</p>
					<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><span class="text-font-2">2</span></a>
				</div>
				<div class="stepwizard-step">
					<p>Passo</p>
					<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><span class="text-font-2">3</span></a>
				</div>
				<div class="stepwizard-step">
					<p>Passo</p>
					<a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled"><span class="text-font-2">4</span></a>
				</div>
			</div>
		</div>
		<!-- Validação de ERROS -->
		<?php 
		echo validation_errors("<p>","</p>");
		if (isset($erro))
			echo $erro; 
		?>

		<form id="frmCadastro" class="form-horizontal" role="form" method="post" action="<?php echo base_url('home/empresa_cadastro') ?>"
			data-toggle="validator" data-delay="0" >
			<br>
			<div class="setup-content" id="step-1">

				<!-- Carregando PARTIAL VIEW - STEP 1 -->
				<?php $this->load->view("wizard/step-1"); ?>
			</div>
			
			<div class="setup-content" id="step-2">
				
				<!-- Carregando PARTIAL VIEW - STEP 2 -->
				<?php $this->load->view("wizard/step-2"); ?>
			</div>
			<div class="setup-content" id="step-3">

				<!-- Carregando PARTIAL VIEW - STEP 3 -->
				<?php $this->load->view("wizard/step-3"); ?>
			</div>
			<div class="setup-content" id="step-4">
				
				<!-- Carregando PARTIAL VIEW - STEP 4 -->
				<?php $this->load->view("wizard/step-4"); ?>
			</div>
		</form>
	</div>


	<!-- Carregamento do FOOTER -->
	<?php $this->load->view('_includes/footer') ?>

	<script type="text/javascript" src="<?php echo base_url('content/js/wizard.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('content/js/jquery.maskedinput.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('content/js/webServices_correiros.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('content/js/webServices_google_maps.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('content/js/validator.min.js') ?>"></script>
	<script type="text/javascript">

		function verificaCNPJ(_cnpj){
			if(!_cnpj)
				$('#btnNext2').prop('disabled', true);
			else
				$("#btnNext2").prop('disabled', false);
		}

		function verificaCPF(_cpf){
			if(!_cpf)
				$("#btnNext4").prop('disabled', true);
			else
				$("#btnNext4").prop('disabled', false);
		}

		$(document).ready(function () {

			verificaCNPJ(false);
			verificaCPF(false);

			$("#txtCnpj").mask("99.999.999/9999-99");
			$("#txtCPF").mask("999.999.999-99");

			$("#txtCepResp").mask("99.999-999");
			$("#txtCepEmpresa").mask("99.999-999");

			$("#txtTelEmpresa").mask("(999) 9999-9999?9");
			$("#txtTelResp").mask("(999) 9999-9999?9");

			$("#txtCnpj").blur(function (){
				var cnpj = $("#txtCnpj").val();

				if(cnpj.length >= 14){
					var result = validarCNPJ(cnpj);

					if(!result){
						verificaCNPJ(false);
						$("#mostraCNPJ").removeClass('display-none');
					}
					else{
						verificaCNPJ(true);
						$("#mostraCNPJ").addClass('display-none');
					}
				}
			});

			$("#txtCPF").blur(function (){
				var cpf = $("#txtCPF").val();

				if(cpf.length >= 11){
					var result = validarCPF(cpf);

					if(!result){
						verificaCPF(false);
						$("#mostraCPF").removeClass('display-none');
					}
					else{
						verificaCPF(true);
						$("#mostraCPF").addClass('display-none');
					}
				}
			});

			$('#btnMarcaEndereco').click(function (e){
				var rua = $("#txtRuaEmpresa").val();
				var numero = $("#txtNumEmpresa").val();
				var bairro = $("#txtBairroEmpresa").val();
				var cidade = $("#txtCidadeEmpresa").val();
				var uf = $("#txtUfEmpresa").val();
				var cep = $("#txtCepEmpresa").val().replace('.','').replace('-','');

				var endereco = rua +', ' + numero +' - '+ bairro + ', ' + cidade +' - '+ uf +', '+ cep;

				if((rua != '' || rua !== "") && (numero != '' || numero !== "") && (bairro != '' || bairro !== "") 
					&& (cidade != '' || cidade !== "") && (uf != '' || uf !== "") && (cep != '' || cep !== ""))
				{
					carregarNoMapa(endereco);
				}

			});


			$("#btnBuscaCepEmpresa").click(function (e) {
				var cep = $("#txtCepEmpresa").val().replace('.','').replace('-','');

				if(cep == '' || isNaN(cep))
					return false;

				ConsultarCep(cep, "Empresa");
			});

			$("#btnBuscaCepResp").click(function (e) {
				var cep = $("#txtCepResp").val().replace('.','').replace('-','');

				if(cep == '' || isNaN(cep))
					return false;

				ConsultarCep(cep, "Resp");
			});
		});
</script>
</body>
</html>