<h1><b>Games</b></h1>

<br />
<br />
<a href="" class="botao" id="botao-cadastrar-game">ADICIONAR NOVO GAME</a>
<br />
<br />
<?php foreach($games as $game){?>
<ul class="menu-content">
	<li><?php echo $game['Game']['nome']?></li>
	<li class="action" style="color: #fff"><a href="">Alterar</a> / <a href="">Excluir</a></li>
	<div class="extras">
	<br />
		<p>Descrição:<br /> <?php echo $game['Game']['descricao']?></p>
	</div>
</ul>
<?php } ?>