 //Função que busca as informações de endereço.
 function ConsultarCep(codigo, tipo) {
    //Verifica se é um valor do tipo numérico.
    if (codigo.length === 8) {
        //Endereço do webservice.
        var _url = "http://cep.correiocontrol.com.br/" + codigo + ".json";
        //Retorno das informações via ajax.
        jQuery.ajax({
            url: _url,
            dataType: "json",
            success: function (result) {
                //Preenche Campos com as variáveis retornadas.
                $("#txtRua"+ tipo).val(result.logradouro);
                $("#txtBairro"+ tipo).val(result.bairro);
                $("#txtCidade"+ tipo).val(result.localidade);
                $("#txtUf"+ tipo).val(result.uf);
            },
            error: function (result) {
                if (result.status == 200)
                    return alert("Cep não encontrado...");

                //Falha ao Recuperar dados.
                alert(result.status + ' - ' + result.statusText);
            }
        });
    }
    else {
        alert("Formato de CEP inválido.");
    }
}