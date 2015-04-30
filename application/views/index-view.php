<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<!-- Carregamento do HEADER  -->
<?php $this->load->view('_includes/header') ?>
<link rel="stylesheet" href="<?php echo base_url('content/css/jquery-ui.min.css') ?>"></link>
<link rel="stylesheet" href="<?php echo base_url('content/css/jquery-ui.theme.min.css') ?>"></link>
<body>
	<!-- Carregamento do MENU -->
	<?php $this->load->view('_includes/menu') ?>

	<!-- Incluindo o CONTEUDO -->
	<div class="container">
		<div class="text-center padding-top-0">
			<h1>Procurando <strong class="text-green">estacionamento</strong>? Encontrou!</h1>
			<h3><strong class="text-green"><i>Find Park</i></strong> é um serviço para melhorar a procura por estacionamentos.</h3>
		</div>
		<div class="row padding-top-2">
			<div class="col-md-12">
				<div id="custom-search-input">
					<div class="input-group col-md-12">
						<input type="text" id="txtEndereco" class="form-control input-lg not-border-radius" 
						placeholder="Digite aqui um endereço, Ex.: Av. Amazonas Belo Horizonte - MG" />
						<span class="input-group-btn">
							<button class="btn btn-success btn-lg not-border-radius" type="button" id="btnBuscarEndereco">
								<i class="glyphicon glyphicon-search" title="Buscar"></i>
							</button>
						</span>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Carregando o MAPS -->
		<div class="row padding-top-1">
			<div id="googleMaps" class="col-md-12 height-0">
			</div>
		</div>
		
		<!-- Campos ocultos do GOOGLE MAPS -->
		<input type="hidden" id="txtLatitude" name="txtLatitude" />
		<input type="hidden" id="txtLongitude" name="txtLongitude" />
	</div>

	<!-- Carregamento do FOOTER -->
	<?php $this->load->view('_includes/footer') ?>

	<!-- Include API Google Maps -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAo1-Y1cbxgXNPjF0epru7GGG6q4h94V_w&sensor=SET_TO_TRUE_OR_FALSE"></script>
	<script type="text/javascript" src="<?php echo base_url('content/js/maps.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('content/js/jquery-ui.min.js') ?>"></script>

	<script type="text/javascript">
		$(document).ready(function () {
		    //Inicializa o google MAPS
		    initialize();

		    //Carrega os pontos para marcar no google MAPS
		    carregarPontos();

		    $("#btnBuscarEndereco").click(function() {
		    	if($.trim($("#txtEndereco").val()) != "")
		    		carregarNoMapa($("#txtEndereco").val());
		    });

		    //Atualiza os marcadores quando ele é movimentado no map
		    atualizaMarcador();

		    $("#txtEndereco").autocomplete({
		    	source: function (request, response) {
		    		geocoder.geocode({ 'address': request.term + ', Brasil - Minas Gerais - Belo Horizonte', 'region': 'BR' }, 
		    			function (results, status) {
		    				response($.map(results, function (item) {
		    					return {
		    						label: item.formatted_address,
		    						value: item.formatted_address,
		    						latitude: item.geometry.location.lat(),
		    						longitude: item.geometry.location.lng()
		    					}
		    				}));
		    			})
		    	},
		    	select: function (event, ui) {
		    		$("#txtLatitude").val(ui.item.latitude);
		    		$("#txtLongitude").val(ui.item.longitude);
		    		var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
		    		marker.setPosition(location);
		    		map.setCenter(location);
		    		map.setZoom(17);
		    	}
		    });
		});
	</script>
</body>
</html>