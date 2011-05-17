<?php
Class Tabela extends AppModel{
	
	var $name = 'Tabela';
	
	var $belongsTo = array('Campeonato', 'Jogadore');
}