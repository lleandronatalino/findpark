function carregarNoMapa(endereco) {
//Verifica se é um valor do tipo numérico.
    //Endereço do webservice.
    var _url = "http://maps.google.com/maps/api/geocode/json?address=" + endereco + "&sensor=false";
    //Retorno das informações via ajax.
    jQuery.ajax({
    	url: _url,
    	dataType: "json",
    	success: function (data) {
    		var latitude = data.results[0].geometry.location.lat;
    		var longitude = data.results[0].geometry.location.lng;

    		$('#txtLatitude').val(latitude);
    		$('#txtLongitude').val(longitude);

    	},
    	error: function (result) {
    		
    		console.log(result.status + ' - ' + result.statusText);
    	}
    });
}