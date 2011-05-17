<?php
Class JogadoresController extends AppController{
	
	var $name = 'Jogadores';
	var $paginate = array('order'=>array('Jogadore.nome'=> 'ASC'), 
						  'conditions'=>array('Jogadore.status'=>1));
	
/*
	 * Método Index
	 * 
	 */
	function index(){
		
		$this->set('jogadores', $this->paginate('Jogadore'));
		
	}
		
	/*
	 * Método NovoCadastro
	 * 
	 */
	function novoCadastro(){
			
			if(isset($this->data)){
			
			if(empty($this->data['Jogadore']['nome'])){
				$this->Session->setFlash('O campo NOME está vazio.', 'msg-error');
				$this->redirect(array('controller'=>'jogadores', 'action'=>'index'));
			}
			
			if($this->Jogadore->save($this->data)){
				$this->Session->setFlash('Jogador cadastrado com sucesso!', 'msg-sucesso');
				$this->redirect(array('controller'=>'jogadores', 'action'=>'index'));
			}
			
		}
		
	}
	
	/*
	 * Método AlterarCadastro
	 * @param ID
	 * 
	 */
	function alterarCadastro($id){
		
	}
	
	/*
	 * Método ExcluirCadastro
	 * @param ID
	 * 
	 */
	function excluirCadastro($id){
		
	}
	
	/*
	 * Método AjaxAutoload Name
	 * 
	 */
	function ajaxName($name = null){
		
		$this->autoRender = false;
		
		if(empty($name)){
			echo '';
		}else{
			$jogadores = $this->Jogadore->query('SELECT Jogadore.id, Jogadore.nome FROM jogadores as Jogadore WHERE Jogadore.nome LIKE "' . $name . '%" LIMIT 10');
			foreach($jogadores as $i){
				echo '<li data="'.$i['Jogadore']['id'].'" id="'.$i['Jogadore']['nome'].'">'.$i['Jogadore']['nome'].'</li>';
			}
		}
		
	}
	
}