<h3 class="text-center padding-top-0">
	<i class="fa fa-pencil"></i>&nbsp;Dados da Empresa
	<hr>
	<small>Campos obrigatórios são marcados com <i class="text-red">*</i></small>
</h3>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Nome Fantasia <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtNmFantasia" class="form-control" placeholder="Nome do Estacionamento"  maxlength="250"
		value="<?php echo set_Value('txtNmFantasia') ?>" data-error="Informe o nome fantasia do estacionamento" required />
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Razão Social <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtDsRazaoSocial" class="form-control" placeholder="Razão Social do Estacionamento" maxlength="1000" 
		value="<?php echo set_Value('txtDsRazaoSocial') ?>" data-error="Informe a razão social do estacionamento" required />
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">CNPJ <i class="text-red">*</i></span>
	<div class="col-md-3">
		<input  maxlength="14" type="text" required="required" id="txtCnpj" name="txtCnpj" class="form-control" placeholder="CNPJ do Estacionamento"
		value="<?php echo set_Value('txtCnpj') ?>" data-error="Informe um CNPJ válido" required maxlength="18" />
		<div class="help-block with-errors"></div>
		<span class="display-none text-red" id="mostraCNPJ" style="float: left;">* Por favor, informe um CNPJ válido</span>
	</div>
</div>

<div class="col-md-11">
	<button id="btnNext2" class="btn nextBtn btn-primary btn-lg not-border-radius pull-right" type="button">Próximo</button>	
</div>