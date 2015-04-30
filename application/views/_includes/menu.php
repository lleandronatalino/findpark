<nav class="navbar navbar-inverse navbar-fixed-top nav-custom" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand legenda-bottom" href="/findpark/home/index" title="Find Parking - Encontre seu estacionamento">
                <img src="<?php echo base_url('content/img/logo.png') ?>" alt="Responsive image" style="margin-top: -17px;">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empresa <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="text-center"><?php echo anchor('home/empresa', 'Como Funciona') ?></li>
                        <li class="text-center"><?php echo anchor('home/empresa_cadastro', 'Cadastro') ?></li>
                    </ul>
                </li>
                <li><?php echo anchor('home/sobre', 'Sobre') ?></li>
                <li><?php echo anchor('home/login', 'Login') ?></li>
            </ul>
        </div>
    </div>
</nav>