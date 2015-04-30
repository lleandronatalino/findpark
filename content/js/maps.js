var geocoder;
var map;
var marker;

//Inicializando o google maps
function initialize() {
	var latlng = new google.maps.LatLng(-19.9192706, -43.938660200000015);
	var options = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById("googleMaps"), options);
	geocoder = new google.maps.Geocoder();
	marker = new google.maps.Marker({
		map: map,
		draggable: true,
	});

	/*marker.setPosition(latlng);*/
	infoWindow = new google.maps.InfoWindow();

   // Evento que fecha a infoWindow com click no mapa.
   google.maps.event.addListener(map, 'click', function() {
   	infoWindow.close();
   });
}

//Função para carregar endenreço no google maps
function carregarNoMapa(endereco) {
	geocoder.geocode({ 'address': endereco + ', Brasil', 'region': 'BR' }, function (results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			if (results[0]) {
				var latitude = results[0].geometry.location.lat();
				var longitude = results[0].geometry.location.lng();

				$('#txtEndereco').val(results[0].formatted_address);
				$('#txtLatitude').val(latitude);
				$('#txtLongitude').val(longitude);

				var location = new google.maps.LatLng(latitude, longitude);
				marker.setPosition(location);
				map.setCenter(location);
				map.setZoom(26);
			}
		}
	});
}

//Atualiza o txtEndereco quando o marcador mudar de local
function atualizaMarcador(){
	google.maps.event.addListener(marker, 'drag', function () {
		geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				if (results[0]) { 
					$('#txtEndereco').val(results[0].formatted_address);
					$('#txtLatitude').val(marker.getPosition().lat());
					$('#txtLongitude').val(marker.getPosition().lng());
				}
			}
		});
	});
}

//Carrega os pontos no google maps
function carregarPontos() {
	var _url = "/findpark/home/selecionaTodasEmpresas";
	
	$.getJSON( _url, function(pontos) {
		$.each(pontos, function(index, ponto) {

			var statusVagas = ponto.Vagas > 0 ? "Há vagas disponiveis" : "Não á vagas.";
			var iconeVagas = ponto.Vagas > 0 ? "/findpark/content/img/icon_verde.png" : "/findpark/content/img/icon_vermelho.png" ;

			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
				title: statusVagas,
				map: map,
				id: ponto.id,
				img: ponto.Imagem == null ? "/FindPark/content/img/estacionamentos/sem_foto.png" : ponto.Imagem,
				nome: ponto.NomeFantasia,
				endereco: ponto.endereco,
				qtdVagas: ponto.Vagas == undefined ? "0": ponto.Vagas,
				icon : iconeVagas
			});

			infowindow = new google.maps.InfoWindow(), marker;

			google.maps.event.addListener(marker, 'click', function() {

				var container = "<div class='container-maps'><div class='row'><div class='col-md-4'>";
				var imagem ="<img src='" + marker.img +"' class='img-responsive center img-small' alt='Responsive image'></div>";
				var coluna = "<div class='col-md-8'><h4 class='text-center'>"+ marker.nome +"</h4>";
				var endereco = "<span>"+ marker.endereco +"</span><br /></div></div>";
				var footer = "<div class='row'><div class='col-md-5 col-md-offset-4'><span> Vagas disponiveis: "+ marker.qtdVagas +" </span> </div>";
				var veja = "<div class='col-md-3'> <a href='#' class='pull-right'>Veja mais.</a> </div>";
				var f_container = "</div></div>";

				var conteudo = container + imagem + coluna + endereco + footer + veja + f_container;
				infowindow.setContent(conteudo);
				infowindow.open(map, marker);
			});
		});
});
}