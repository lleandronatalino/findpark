<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model {

	public function SelectAllEstacionamentos(){

		//Montando QUERY
		$sql = "SELECT IdEstacionamento, NomeFantasia, CONCAT(Rua,', ',Numero,' - ',Bairro,', ',Cidade,' - ',UF) as 'endereco', ";
		$sql .= "Imagem, Latitude, Longitude  FROM estacionamento";

		//Executando QUERY
		$result = $this->db->query($sql);

		return $result;
	}
}