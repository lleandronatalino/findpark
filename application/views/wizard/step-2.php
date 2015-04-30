<h3 class="text-center padding-top-0">
	<i class="fa fa-home"></i>&nbsp;Endereço e contado da Empresa
	<hr>
	<small>Campos obrigatórios são marcados com <i class="text-red">*</i></small>
</h3>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">CEP <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<div class=" input-group">
			<input type="text" style="width: 260px;" id="txtCepEmpresa" name="txtCepEmpresa" class="form-control" placeholder="CEP do Estacionamento"
			value="<?php echo set_Value('txtCepEmpresa') ?>" data-error="Informe um CNPJ válido" required maxlength="10" />
			<div class="help-block with-errors"></div>
			<span class="input-group-btn">
				<button class="btn btn-success not-border-radius" type="button" id="btnBuscaCepEmpresa">
					<i class="glyphicon glyphicon-search" title="Buscar CEP"></i>
				</button>
			</span>
		</div>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Rua <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtRuaEmpresa" id="txtRuaEmpresa" class="form-control" placeholder="Rua do Estacionamento"
		value="<?php echo set_Value('txtRuaEmpresa') ?>"  data-error="Informe o logradouro do estacionamento" required maxlength="100"/>
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Numero º <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<input  maxlength="10" type="text" name="txtNumEmpresa" id="txtNumEmpresa" class="form-control" placeholder="Numero do local" maxlength="6"
		value="<?php echo set_Value('txtNumEmpresa') ?>" data-error="Informe o numero" required maxlength="6"/>
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Bairro <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtBairroEmpresa" id="txtBairroEmpresa" class="form-control" placeholder="Bairro do Estacionamento"
		value="<?php echo set_Value('txtBairroEmpresa') ?>" data-error="Informe o bairro" required  maxlength="100"/>
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Complemento</span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" class="form-control" name="txtCompEmpresa" placeholder="Complemento"
		value="<?php echo set_Value('txtCompEmpresa') ?>" maxlength="250"/>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Cidade <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtCidadeEmpresa" id="txtCidadeEmpresa" class="form-control" placeholder="Cidade do Estacionamento"
		value="<?php echo set_Value('txtCidadeEmpresa') ?>" data-error="Informe a cidade pertencente ao estacionamento" required  maxlength="100"/>
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">UF <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<input  maxlength="100" type="text" name="txtUfEmpresa" id="txtUfEmpresa" class="form-control" placeholder="Cidade do Estacionamento"
		value="<?php echo set_Value('txtUfEmpresa') ?>" data-error="Informe a estado pertencente ao estacionamento" required  maxlength="3"/>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Telefone</span>
	<div class="col-md-2">
		<input  maxlength="16" type="text" class="form-control" style="width: 175px;" name="txtTelEmpresa" id="txtTelEmpresa" placeholder="(999) 9999-99999" 
		value="<?php echo set_Value('txtTelEmpresa') ?>" maxlength="15"/>
	</div>
</div>

<div class="col-md-2 stepwizard setup-panel stepwizard-step">
	<div class="">
		<div class="col-md-11">
			<button id="btnMarcaEndereco" class="btn btn-primary nextBtn btn-lg not-border-radius pull-right" type="button">Próximo</button>
			<a class="btn btn-f-error btn-lg not-border-radius pull-right margin-right-0" href="#step-1">Voltar</a>
		</div>
	</div>
</div>

<!-- Campos ocultos do GOOGLE MAPS -->
<input type="hidden" id="txtLatitude" name="txtLatitude" />
<input type="hidden" id="txtLongitude" name="txtLongitude" />
