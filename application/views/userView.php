<div class='container'><p>My view has been loaded</p>
		
		<?php foreach($rows as $r) : ?>
		
		<h1><?php echo $r->user_fullname; ?></h1>
		<div><?php echo $r->user_name; ?></div>
		
		<?php endforeach; ?>
</div>


<?
// echo '<div class="container">';
// foreach($rows as $num => $row){
// 	echo "<p>Name:${row['user_fullname']}</p>
// 		<p>Last Name: ${row['lastname']}</p>
// 		<p>Email: ${row['email']}</p>
// 		<p>Username: ${row['username']}</p>
// 		<p>.anchor('', 'Back').</p>	
// 		";
// 	}
// echo "<div>";
// ?>
