<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    //Validar o usuario no BD
    public function user_validate($condition = NULL) {

        if($condition == NULL)
            throw new Exception("Paramentro nulo ou vazio");

        //Montando QUERY
        $sql = "SELECT * FROM usuario WHERE (login = ? OR email = ?) AND senha = ?";
        $result = $this->db->query($sql, $condition);

        //Verifica se há registro
        if($result->num_rows() == 1)
           return TRUE;
        else
           return FALSE;
    }

    //Função que retorna se o Usuário está logado ou Não
    public function user_logged() {
        $logged = $this->session->userdata('logged');

        //Verifica se o usuario está logado
        if (!isset($logged) || $logged != true || $logged == FALSE) {
            echo 'Voce nao tem permissao para entrar nessa pagina.';
            die();
        }
    }

    //Função RETORNA o email do usuario
    public function get_email_user($condition = NULL) {

        if($condition == NULL)
            throw new Exception("Paramentro nulo ou vazio");    

        //Montando QUERY
        $sql = "SELECT * FROM usuario WHERE login = ? OR email = ?";
        $result = $this->db->query($sql, $condition);

        //Verifica se há registro
        if($result->num_rows() == 1){
            $row = $result->row();
            return $row->Email;
        }
    }

    //Função que Verficia CODIGO EMAIL valido
    public function user_email_valid($condition = NULL){

        if($condition == NULL)
            throw new Exception("Paramentro nulo ou vazio");

        //Montando QUERY
        $sql = "SELECT * FROM usuario WHERE login = ? OR email = ?";
        $result = $this->db->query($sql, $condition);

        //Verifica se há registro
        if($result->num_rows() == 1){
            $row = $result->row();

            //Verifica se o CODIGOEMAIL está valido
            if($row->FlgValido == 0 || $row->FlgValido == FALSE)
                return FALSE;
            else
                return TRUE;
        }
        else{
            echo 'Voce nao tem permissao para entrar nessa pagina.';
            die();
        }
   }
}