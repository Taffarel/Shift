<?php
Class Game extends AppModel{
	
	var $name = 'Game';
	
	var $hasMany = array('Campeonato');
}