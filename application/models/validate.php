<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class validate extends CI_Model {

	public function ValidarCamposEmpresa(){

		//Validação - Dados da EMPRESA
		$this->form_validation->set_rules('txtNmFantasia', 'Nome Fantasia', 'required|max_length[250]');
		$this->form_validation->set_rules('txtDsRazaoSocial', 'Razão Social', 'required|max_length[1000]');
		$this->form_validation->set_rules('txtCnpj', 'CNPJ', 'required|max_length[18]');

				//Validação - Endereco EMPRESA
		$this->form_validation->set_rules('txtCepEmpresa', 'CEP - Empresa', 'required|max_length[10]');
		$this->form_validation->set_rules('txtRuaEmpresa', 'Rua - Empresa', 'required|max_length[100]');
		$this->form_validation->set_rules('txtNumEmpresa', 'Numero - Empresa', 'required|max_length[6]');
		$this->form_validation->set_rules('txtBairroEmpresa', 'Bairro - Empresa', 'required|max_length[100]');
		$this->form_validation->set_rules('txtCidadeEmpresa', 'Cidade - Empresa', 'required|max_length[100]');
		$this->form_validation->set_rules('txtUfEmpresa', 'UF - Empresa', 'required|max_length[3]');

		//SE o FRM não estiver VALIDO
		if (!$this->form_validation->run())
			return FALSE;
		else
			return TRUE;
	}

	public function ValidarCamposUsuario(){

		//Validação - Dados USUUARIO
		$this->form_validation->set_rules('txtNome', 'Nome Responsavel', 'required|max_length[150]');
		$this->form_validation->set_rules('txtCPF', 'CPF Responsavel', 'required|max_length[14]');
		$this->form_validation->set_rules('txtCepResp', 'CEP Responsavel', 'required|max_length[10]');
		$this->form_validation->set_rules('txtRuaResp', 'Rua Responsavel', 'required|max_length[100]');
		$this->form_validation->set_rules('txtNumResp', 'Numero Responsavel', 'required|max_length[6]');
		$this->form_validation->set_rules('txtBairroResp', 'Bairro Responsavel', 'required|max_length[100]');
		$this->form_validation->set_rules('txtCidadeResp', 'Cidade Responsavel', 'required|max_length[100]');
		$this->form_validation->set_rules('txtUfResp', 'UF Responsavel', 'required|max_length[3]');

		//Validação - Dados ACESSO
		$this->form_validation->set_rules('txtEmail', 'E-mail', 'required|valid_email|max_length[150]|is_unique[usuario.Email]');
		$this->form_validation->set_rules('txtLogin', 'Login', 'required|min_length[4]|max_length[25]|is_unique[usuario.Login]');
		$this->form_validation->set_rules('txtSenha', 'Senha', 'required|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('txtConfSenha', 'Confirmar de senha', 'required|matches[txtSenha]|max_length[32]');

		//SE o FRM não estiver VALIDO
		if (!$this->form_validation->run())
			return FALSE;
		else
			return TRUE;
	}
}