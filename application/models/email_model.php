<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function EnviarEmail($assunto, $remetente, $destinatario, $template){

		$config['smtp_host'] = "smtp.gmail.com";
		$config['smtp_port'] = 25;
		$config['protocol'] = "smtp";
		$config['smtp_user'] = "lv.lucasvin@gmail.com";
		$config['smtp_pass'] = "@p0l0131123";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$config['wordwrap'] = true;

		$this->load->library('email');

		$this->email->set_mailtype("html");

		// Aqui carrega todo config criado anteriormente
		$this->email->initialize(); 
		//assunto
		$this->email->subject($assunto); 
		//quem mandou
		$this->email->from($remetente);
		//quem recebe
		$this->email->to($destinatario);
		//corpo da mensagem
		$this->email->message($template); 
		// Envia o email
		$this->email->send();
	}
}