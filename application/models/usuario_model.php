<?php
defined('BASEPATH') OR exit('No direct script access allowed');
get_instance()->load->getInterface('IRepository');
	
class Usuario_model extends CI_Model implements IRepository {

	function __construct()
	{
		parent::__construct();
	}

	public function Select(){}

	public function SelectById($condition = NULL){
		if($condition == null)
			throw new Exception("Paramentro nulo ou vazio");

		//Montando QUERY
        $sql = "SELECT * FROM usuario WHERE login = ? OR email = ?";
        $result = $this->db->query($sql, $condition);

        //Verifica se há registro
        if($result->num_rows() == 1){
            $row = $result->row();
            return $row->IdUsuario;
        }
	}

	public function SelectCodigoEmail($condition = NULL){
		if($condition == null)
			throw new Exception("Paramentro nulo ou vazio");

		//Montando QUERY
        $sql = "SELECT * FROM usuario WHERE login = ? OR email = ?";
        $result = $this->db->query($sql, $condition);

        //Verifica se há registro
        if($result->num_rows() == 1){
            $row = $result->row();
            return $row->CodigoEmail;
        }
	}
	
	public function Insert($data = NULL){
		if($data == null)
			throw new Exception("Paramentro nulo ou vazio");

		//Montando QUERY
		$sql = "INSERT INTO usuario (Nome, cpf, Rua, Numero, Bairro, Cidade, ";
			$sql .= "UF, Complemento, Telefone, cep, email, login, senha, FlgAtivo, CodigoEmail) ";

		//PARAMETERS
		$sql .= "VALUES('".$data['txtNome']."', '".$data['txtCPF']."', '".$data['txtRuaResp']."', '".$data['txtNumResp']."', ";
		$sql .=	"'".$data['txtBairroResp']."', '".$data['txtCidadeResp']."', '".$data['txtUfResp']."', '".$data['txtCompResp']."', ";
		$sql .=	"'".$data['txtTelResp']."', '".$data['txtCepResp']."', '".$data['txtEmail']."', ";
		$sql .= "'".$data['txtLogin']."', '".$data['txtSenha']."', '".TRUE."', '".$data['codigoEmail']."'";
		$sql .= ")";

		//Executando QUERY
		$this->db->query($sql);
	}

	public function InsertUsuarioEstacionamento($data = NULL){

		if($data == null)
			throw new Exception("Paramentro nulo ou vazio");

		//Montando QUERY
		$sql = "INSERT INTO usuario_estacionamento (IdEstacionamento, IdUsuario, DtCriacao, FlgProprietario) ";

		//PARAMETERS
		$sql .= "VALUES('".$data['PK_Estacionamento']."', '".$data['PK_Usuario']."', '".$data['DtCriacao']."', '".$data['FlgProprietario']."'";
		$sql .= ")";

		//Executando QUERY
		$this->db->query($sql);
	}
	
	public function Update($condition = null){
	
		if($condition == null)
			throw new Exception("Paramentro nulo ou vazio");
	}
    
	public function Delete($condition = null){
		
		if($condition == null)
			throw new Exception("Paramentro nulo ou vazio");
	}
}