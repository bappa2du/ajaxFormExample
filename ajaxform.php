<html>
<head>
	<title>Ajax Form</title>
</head>
<body>
	<div id="mainform">
		<div class="innerdiv">
			<h2>Submit Form Using AJAX,PHP and javascript</h2>
			<!-- Required Div Starts Here -->
			<form id="form" name="form">
				<h3>Fill Your Information!</h3>
				<div>
					<label>Name :</label>
					<input id="name" type="text">
					<label>Email :</label>
					<input id="email" type="text">
					<label>Password :</label>
					<input id="password" type="password">
					<label>Contact No :</label>
					<input id="contact" type="text">
					<input id="submit" type="button" value="Submit">
				</div>
			</form>
			<div id="clear"></div>
		</div>
		<div id="clear"></div>
	</div>



	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
		$(document).on('click', "#submit", function () {
			var name = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			var password = document.getElementById("password").value;
			var contact = document.getElementById("contact").value;
			var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact;
			if (name == '' || email == '' || password == '' || contact == '') {
				alert("Please Fill All Fields");
			} else {
				$.ajax({
					type: "POST",
					url: "save.php",
					data: dataString,
					cache: false,
					success: function(html) {
						alert(html);
						
					}
				});
			}
			$('#name').val('');
			$('#email').val('');
			$('#password').val('');
			$('#contact').val('');
		});
	});
	
	</script>
</body>
</html>
