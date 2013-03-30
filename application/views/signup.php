<div class="container-fluid signup-cont-bg">
	<?php 
	$attributes = array('class'=>'in-style span4 pull-left ');
	echo form_open('signup/success', $attributes);
	?>
	<?php
	/***
		Arrays for the input fields
		will echo in the browser
		<input type="" class="" name="" value=""></input>

	***/
	$fullname = array(
		'name' => 'fullname',
		'class' => 'coststyle span4 pull-left',
		'value' => set_value('name')
		
	);
	
	$lastname = array(
		'name' => 'lastname',
		'class' => 'coststyle span4 pull-left',
		'value' => set_value('last')	
	);
	$email = array(
		'name' => 'email',
		'class' => 'coststyle span4 pull-left',
		'value' => set_value('email')
	);
	
	$user = array(
		'name' => 'username',
		'class' => 'coststyle span4 pull-left',
		'value' => set_value('username')
	);
	$passw = array(
		'name' => 'password',
		'type' => 'password',
		'class' => 'coststyle span4 pull-left'
		//'value' => set_value('password')	
	);
	/*Array that creates the button tag inside the button, when the array is echoed into the for_submit($var)
	The browser displays
	<button style="margin-left:18%" type="submit" name="button" id="btn" class="span4 value="Sign up"></buttno> */
	$signbtn = array(
		'name' => "button",
		'id' => 'btn',
		'class'=> 'span4 pull-left',
		'value' => 'Sign Up',
		'type' => 'submit',
		'style' =>'margin-left:18%;'
	);
	?>
	</br>
	<fieldset>
		<legend class="stylecolor span4">Sign up!</legend>
			<label for="username" class="stylecolor"> Name</label>
				<?php echo form_input($fullname);?>
			<label for="lastname" class="stylecolor"> Last Name</label>
				<?php echo form_input($lastname);?>
			<label for="email" class="stylecolor">Email</label>
				<?php echo form_input($email)?>
			<label for="username" class = "stylecolor">Username</label>
				<?php echo form_input($user);?>
			<label for="password" class="stylecolor">Password</label>
				<?php echo form_input($passw)?>
			<label for="passwcof" class="stylecolor"> Confirm Password</label>
				<?php echo form_input($passw);?>
			</br><?php echo form_submit($signbtn)?>	
	</fieldset>
	<?php echo form_close()?>
</div>

<div class="signup-cont-bg"></div>