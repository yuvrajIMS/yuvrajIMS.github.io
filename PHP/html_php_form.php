<?php
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
	$dob = isset($_POST['dob']) ? $_POST['dob'] : 'BLANK';
	//$abt = isset($_POST['about']) ? $_POST['about'] : 'BLANK';
?>

<h3 align="center"> About YOU & Career Interest</h3>
		<form method="post">
		<p>
			<label for="fname"><b>First Name</b>:</label>
			<input type="text" placeholder="Enter First Name" name="firstname" id="name" size="20" value="<?= htmlentities($firstname) ?>" ><br>
			<label for="lname"><b>Last Name</b>:</label>
			<input type="text" placeholder="Enter Last Name" name="lastname" id="name" size="20" value="<?= htmlentities($lastname) ?>"><br>
		</p>
			
		<p>
			<label for="dob"><b>Date of Birth</b>:</label>
			<input type="date" name="dob"value="1999-07-24" ><br>
		</p>
			
		<p>
			<label for="email"><b>E-mail</b>:</label>
			<input type="email" placeholder="Enter E-Mail" name="email">
		</p>
			
		<p>
			<label for="url"><b>Enter Personal URL</b>:</label>
			<input type="url" placeholder="Your URL" name="url">
		</p>
			
		<p> <b>Your Level of Qualification</b><br/>
			<input type="radio" name="qualification_level" value="High-School Certificate"> High-School Certificate<br>
			<input type="radio" name="qualification_level" value="Graduate Certificate"> Graduate Certificate<br>
			<input type="radio" name="qualification_level" value="Postgraduate Certificate"> Postgraduate Certificate (i.e. Bachelor's Honours degrees)<br>
			<input type="radio" name="qualification_level" value="Master's Degree"> Master's Degree<br>
			<input type="radio" name="qualification_level" value="Doctoral Degree"> Doctoral Degree<br>
		</p>
			
		<p> <b>Programming Knowlege in </b>: <br/>
			<input type="checkbox" name="python" value="knows Python">
			PYTHON <br>
			<input type="checkbox" name="sql" value="knows Sql">
			SQL <br>
			<input type="checkbox" name="c" value="knows C">
			C<br>
			<input type="checkbox" name="c++" value="knows C++">
			C++<br>
			<input type="checkbox" name="htmlcss" value="knows Html & Css">
			HTML & CSS <br>
			<input type="checkbox" name="js" value="knows JavaScript, jQuery & JSON">
			JavaScript, jQuery & JSON<br>
		</p>
			
		<p>
			<label for="dept"><b>Desired Career Field</b></label>
			<select name="deptartment" id="dept">
			<option value="">-Select-</option>
			<option value="Logistics">Logistics</option>
			<option value="R&D">R&D</option>
			<option value="Finance">Finance</option>
			<option value="Advertisment">Advertisment</option>
			<option value="IT">IT</option>
			<option value="Resource Management">Resource Management</option>
			</select>
		</p>
			
		<p>
			<label for="about"><b>More About Yourself</b></label><br>
			<textarea rows="10" cols="50" id="text" name="about"></textarea>
		</p>
			
		<p>
			<input type="submit" name="Subit" value="Submit"/>
			<a href=https://yuvrajims.github.io><input type=button name="cancel" value = "Cancel"; return false; ></a>
		</p>
		
	</form>	
	<pre>
		$_POST:
		<?php
			print_r($_POST);
		?>	
		$_GET:
		<?php
			print_r($_GET);
		?>
	</pre>