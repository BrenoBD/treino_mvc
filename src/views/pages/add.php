<?php $render('header'); ?>

<h2>Adicionar novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
	<label>
		Name:<br>
		<input type="text" name="name">
	</label><br><br>

	<label>
		Email:<br>
		<input type="email" name="email">
	</label><br><br>

	<input type="submit" value="Adicionar">	
</form>

<?php $render('footer'); ?>
