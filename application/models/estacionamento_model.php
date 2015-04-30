<?php
defined('BASEPATH') OR exit('No direct script access allowed');
get_instance()->load->getInterface('IRepository');

class Estacionamento_model extends CI_Model implements IRepository {

	function __construct()
	{
		parent::__construct();
	}
	
    public function Select(){}
	
	public function SelectByID($data = NULL){

    	if($data == NULL)
    		throw new Exception("Paramentro nulo ou vazio");

    	$this->load->model('usuario_model');
    	$resultID = $this->usuario_model->SelectById($data);

    	if($resultID <= 0)
    		return FALSE;

    	$query = $this->db->select('usuario_estacionamento.*, estacionamento.*')
				 ->from('estacionamento')
				 ->join('usuario_estacionamento', 'estacionamento.IdEstacionamento = usuario_estacionamento.IdEstacionamento')
				 ->where('usuario_estacionamento.IdUsuario', $resultID)
				 ->get();

		return $query;
    }
	
    public function Update($condition = null){
	
		if($condition == null)
			throw new Exception("Paramentro nulo ou vazio");
		
	}
    
	public function UpdateCodigoEmail($condition = null){

		if($condition == null)
			throw new Exception("Paramentro nulo ou vazio");

		//Montando QUERY
		$query = "SELECT * FROM usuario WHERE (login = ? OR email = ?) AND CodigoEmail = ?";
		$resultSelect = $this->db->query($query, $condition);

		//Verificando se há registro
		if($resultSelect->num_rows() == 1){
			
			$sql = "UPDATE usuario SET FlgValido = TRUE  WHERE (Login = ? OR Email = ?) AND CodigoEmail = ?";
       	 	$this->db->query($sql, $condition);

        	return TRUE;
		}
		else
			return FALSE;  
    }	
	
	public function Delete($condition = null){
	
		if($condition == null)
			throw new Exception("Paramentro nulo ou vazio");
			
	}
	
	public function Insert($data = NULL){
		if($data == null)
			throw new Exception("Paramentro nulo ou vazio");

		//Montando QUERY
		$sql = "INSERT INTO estacionamento (NomeFantasia, DsRazaoSocial, cnpj, cep, Rua, Numero, Bairro, Cidade, ";
		$sql .= "UF, Complemento, Telefone, FlgAtivo, Latitude, Longitude) ";
		
		//PARAMETERS
		$sql .= "VALUES('".$data['txtNmFantasia']."', '".$data['txtDsRazaoSocial']."', '".$data['txtCnpj']."', '".$data['txtCepEmpresa']."', ";
		$sql .=	"'".$data['txtRuaEmpresa']."', '".$data['txtNumEmpresa']."', '".$data['txtBairroEmpresa']."', '".$data['txtCidadeEmpresa']."', ";
		$sql .=	"'".$data['txtUfEmpresa']."', '".$data['txtCompEmpresa']."', '".$data['txtTelEmpresa']."', ";
		$sql .= "'".FALSE."','".$data['txtLatitude']."', '".$data['txtLongitude']."' ";
		$sql .= ")";
		
		//Executando QUERY
		$this->db->query($sql);
	}    
}