<?php
Class Campeonato extends AppModel{
	
	var $name = 'Campeonato';

	var $hasMany = array('Tabela');
    var $belongsTo = array('Game', 'Tipo');
}