<h3 class="text-center padding-top-0">
	<i class="fa fa-sign-in"></i>&nbsp;Dados de Acesso
	<hr>
	<small>Campos obrigatórios são marcados com <i class="text-red">*</i></small>

</h3>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">E-mail <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="email" name="txtEmail" class="form-control not-border-radius" placeholder="E-mail do responsável" 
		value="<?php echo set_Value('txtEmail') ?>" data-error="Informe um e-mail válido" required maxlength="100"/>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Login <i class="text-red">*</i></span>
	<div class="col-md-9 ">
		<input  maxlength="100" type="text" name="txtLogin" class="form-control" placeholder="Login para acesso"
		value="<?php echo set_Value('txtLogin') ?>" data-error="Informe um login para acesso" required data-minlength="4" maxlength="25"/>
		<span class="help-block">Minimo de 4 caracteres</span>
		<div class="help-block with-errors"></div> 
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Senha <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<input  maxlength="30" type="password" id="txtSenha" name="txtSenha" class="form-control not-border-radius" data-error="Informe sua senha" 
		placeholder="Informe uma senha" required data-minlength="6" maxlength="32"/>
		<div class="help-block with-errors"></div> 
		<span class="help-block">Minimo de 6 caracteres</span>
	</div>
</div>

<div class="form-group padding-top-0">
	<span class="col-md-2 control-label">Confirmar senha <i class="text-red">*</i></span>
	<div class="col-md-3 ">
		<input  maxlength="30" type="password" name="txtConfSenha" class="form-control not-border-radius" data-error="Confirme sua senha" 
		data-match="#txtSenha" data-match-error="Ops, As senhas são diferentes" placeholder="Confirme sua senha" required maxlength="32">
      <div class="help-block with-errors"></div>
	</div>
</div>

<div class="col-md-2 stepwizard setup-panel stepwizard-step">
	<div class="">
	<div class="col-md-11">
			<button class="btn btn-f-sucess nextBtn btn-lg not-border-radius pull-right" type="submit">Cadastrar</button>
			<a class="btn btn-f-error btn-lg not-border-radius pull-right margin-right-0" href="#step-3">Voltar</a>
		</div>
	</div>
</div>