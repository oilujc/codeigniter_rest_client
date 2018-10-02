<div class="row">
	<div class="col-12">
		<?php if(isset($user)): ?>
		<h1>Welcome <?php echo ucwords($user->firstname) ?></h1>
		<?php endif; ?>
	</div>
</div>