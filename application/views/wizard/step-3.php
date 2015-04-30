<h3 class="text-center padding-top-0">
	<i class="fa fa-user-plus"></i>&nbsp;Dados do responsável
	<hr>
	<small>Campos obrigatórios são marcados com <i class="text-red">*</i></small>
</h3>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Nome <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtNome" class="form-control" placeholder="Nome do responsável" 
		value="<?php echo set_Value('txtNome') ?>" data-error="Informe o nome do responsável" required maxlength="100"/>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">CPF <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<input  maxlength="11" type="text" name="txtCPF" id="txtCPF" class="form-control" placeholder="999.999.999-99"
		value="<?php echo set_Value('txtCPF') ?>" data-error="Informe um CPF válido" required maxlength="14"/>
		<div class="help-block with-errors"></div> 
		<span class="display-none text-red" id="mostraCPF" style="float: left;">* Por favor, informe um CPF válido</span>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">CEP <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<div class=" input-group">
			<input  maxlength="8" type="text" name="txtCepResp" id="txtCepResp" class="form-control" placeholder="CEP do Estacionamento"
			value="<?php echo set_Value('txtCepResp') ?>" data-error="Informe CEP válido" required maxlength="10"/>
			<div class="help-block with-errors"></div> 
			<span class="input-group-btn">
				<button class="btn btn-success not-border-radius" type="button" id="btnBuscaCepResp">
					<i class="glyphicon glyphicon-search" title="Buscar CEP"></i>
				</button>
			</span>
		</div>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Rua <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtRuaResp" id="txtRuaResp" class="form-control" placeholder="Rua do Estacionamento"
		value="<?php echo set_Value('txtRuaResp') ?>" data-error="Informe o logradouro do responsável" required maxlength="100"/>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Numero º <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<input  maxlength="10" type="text" name="txtNumResp" class="form-control" placeholder="Numero do local"
		value="<?php echo set_Value('txtNumResp') ?>" data-error="Informe o numero" required maxlength="6"/>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Bairro <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtBairroResp" id="txtBairroResp" class="form-control" placeholder="Bairro do Estacionamento"
		value="<?php echo set_Value('txtBairroResp') ?>" data-error="Informe o bairro do responsável" required maxlength="100"/>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Complemento</span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" class="form-control" name="txtCompResp" placeholder="Complemento"
		value="<?php echo set_Value('txtCompResp') ?>" maxlength="250"/>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Cidade <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtCidadeResp" id="txtCidadeResp" class="form-control" placeholder="Cidade do Estacionamento"
		value="<?php echo set_Value('txtCidadeResp') ?>" data-error="Informe a cidade pertencente ao responsável" required maxlength="100"/>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">UF <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<input  maxlength="100" type="text"  name="txtUfResp" id="txtUfResp" class="form-control" placeholder="Cidade do Estacionamento"
		value="<?php echo set_Value('txtUfResp') ?>" data-error="Informe a estado pertencente ao responsável" required maxlength="3"/>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Telefone</span>
	<div class="col-md-2">
		<input  maxlength="9" type="text" class="form-control" name="txtTelResp" id="txtTelResp"  maxlength="15"
		placeholder="9999-99999" value="<?php echo set_Value('txtTelResp') ?>" />
	</div>
</div>

<div class="col-md-2 stepwizard setup-panel stepwizard-step">
	<div class="">
	<div class="col-md-11">
			<input id="btnNext4" class="btn nextBtn btn-primary btn-lg not-border-radius pull-right" type="button" value="Próximo"></input>
			<a class="btn btn-f-error btn-lg not-border-radius pull-right margin-right-0" href="#step-2">Voltar</a>
		</div>
	</div>
</div>