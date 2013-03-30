<?
echo '<div class="container">';
foreach($rows as $num => $row){
	echo "<p>Name:${row['user_fullname']}</p>
		<p>Last Name: ${row['lastname']}</p>
		<p>Email: ${row['email']}</p>
		<p>Username: ${row['username']}</p>
		<p>.anchor('', 'Back').</p>	
		";
	}
echo "<div>";
?>