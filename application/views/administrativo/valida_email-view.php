<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Validação de E-mail</title>
    <!-- Carregamento do HEADER  -->
    <?php $this->load->view('_includes/administrativo/header') ?>
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Validação de E-mail<hr></h1>
            </div>
        </div>
        <div class="row">
            <strong> 
                <!-- Validação de ERROS -->
                <?php 
                $div = "<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> <span class='sr-only'>Error:</span>";
                $_div = "</div>";
                echo validation_errors($div,$_div);

                if(isset($userInvalid))
                    echo $div. $userInvalid.$_div;

                if(isset($sendEmail))
                    echo $div. $userInvalid.$_div;
                ?>
            </strong>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>
                    Para validar seu usuário, informe o código de validação que foi enviado no seu email.
                </h4>
                <br>
                <h4>Seu E-mail.: <strong><?php if(isset($emailUser)) echo $emailUser;else echo "Não foi possivel identificar o usuário."; ?></strong></h4>
            </div>
            <div class="col-md-12">
                <p>
                    Caso você não tenha recebido um e-mail com o código, <a href="<?php echo base_url('estacionamento/reenviar_email') ?>">clique aqui</a>.
                </p>
            </div>
        </div>
        <form id="frmCadastro" class="form-horizontal" role="form" method="post" action="<?php echo base_url('estacionamento/validacao_email') ?>"
            data-toggle="validator" data-delay="0">
            <div class="form-group padding-top-0">
                <span class="col-md-1 control-label">Codigo<i class="text-red">*</i></span>
                <div class="col-md-3 ">
                    <input  maxlength="6" type="text" name="txtCodigoEmail" class="form-control not-border-radius" placeholder="Informe seu código aqui"
                    data-error="Informe o codigo de validacao" required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="col-md-1">
                    <input class="btn nextBtn btn-primary not-border-radius pull-right" required type="submit" value="Confirmar"></input>
                </div>
            </div>
        </form>
    </div>

    <!-- Carregamento do FOOTER -->
    <script type="text/javascript" src="<?php echo base_url('content/js/jquery-1.11.2.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('content/js/validator.min.js') ?>"></script>

</body>
</html>