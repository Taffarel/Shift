<div id="login">
	<br />
	<?php echo $this->Form->create('Usuario', array('action'=>'login', 'id'=>'login-form'))?>

	<?php echo $this->Form->input('login', array('label'=>'Login:'))?>
	<span class="error-login">O campo <b>LOGIN</b> esta vazio.</span>
	
	<br />

	<?php echo $this->Form->input('senha', array('label'=>'Senha:', 'type'=>'password'))?>
	<span class="error-senha">O campo <b>SENHA</b> esta vazio.</span>
	
	<br />
	
	<?php echo $this->Form->submit('Entrar')?>
	<?php echo $this->Form->end()?>
	
	<br />
	
	<ul><a href="<?php echo $this->Html->url(array('controller'=>'usuarios', 'action'=>'esqueciSenha'))?>">Esqueci a senha</a></ul>
</div>
