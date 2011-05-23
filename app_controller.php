<?php
Class AppController extends Controller{
		
	var $helpers = array('Session', 'Text', 'Form', 'Html');
	
	var $components = array('Session');
	
	/*
	 * Método SessionUsuario
	 * @param $data
	 * @protected 
	 */
	function _sessionUsuario($data){
		if($data['Usuario']['admin'] == 1){
			$this->Session->write('Usuario.adm', '1');
		}
		
		$this->Session->write('Usuario.nome', $data['Usuario']['nome']);
		$this->Session->write('Usuario.login', $data['Usuario']['login']);
		$this->Session->write('Usuario.email', $data['Usuario']['email']);
		$this->Session->write('Usuario.logado', '1');
	}
	
}