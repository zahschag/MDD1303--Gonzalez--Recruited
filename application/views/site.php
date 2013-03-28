<div class='container'><p>My view has been loaded</p>
		
		<?php foreach($rows as $r) : ?>
		
		<h1><?php echo $r->user_fullname; ?></h1>
		<div><?php echo $r->user_name; ?></div>
		
		<?php endforeach; ?>
</div>