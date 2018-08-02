<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>Trafficticketbuddy</title>
	<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
	<!-- CUSTON STYLE.CSS -->
	<!-- CUSTON STYLE.CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/toastr.min.css">
	<!-- OWL CAROUSAL -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

	<!-- JQUERy LIBRARY -->
	<script type="text/javascript" src="assets/js/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="assets/js/jquery.toaster.js"></script>
	<script type="text/javascript" src="assets/js/toastr.min.js"></script>
</head>
<body>

<?php 
$val = "";
 if($_POST['success']=="1"){
	$val = "1";
 }else{
	$val = "0";
 }
 ?>
	<!-- INNER BANNER -->
	<div class="inner-banner" >
		<img src="assets/images/banner-contact-us.jpg" alt="">
		<div class="caption">
			<h2>Contact us</h2>
		</div>
	</div>

	<!-- CONTACT SECTION -->
		<div class="section contact-section">
		<div class="container">
			<div class="contact-details">
				If you have any further questions, please don’t hesitate to contact us. Please feel free to email us by the given email address <a href="javascript:void(0)" title="">trafficTicketBuddy@gmail.com</a>
			</div>
			<form action="submit.php" method="POST" enctype="multipart/form-data">
			<div class="contact-form">
				<ul>
					<li>
					<input type="hidden" name="val" value="contact-mobile.php">
						<div class="block"><input type="text" name="fname" placeholder="First Name"></div>
						<div class="block"><input type="text" name="lname" placeholder="Last Name"></div>
					</li>
					<li>
						<div class="block"><input type="text" name="phone" placeholder="Phone"></div>
						<div class="block"><input type="email" name="email" placeholder="Email"></div>
					</li>
					<li>
						<div class="block">
							<input id="file1" name="licence_image" type="file" placeholder="Add profile picture" />
  							<label for="file1">Upload Driving Licence</label>
						</div>
						<div class="block">
							<input id="file2" name="ticket_front_image" type="file" placeholder="Add profile picture" />
  							<label for="file2">Upload Font Side Ticket</label>
						</div>
					</li>
					<li>
						<div class="block">
							<input id="file3" name="ticket_rear_image" type="file" placeholder="Add profile picture" />
  							<label for="file3">Upload Rare Side Ticket</label>
						</div>
						<div class="block">
							<input type="text" name="country" placeholder="Country">
						</div>
					</li>
					<li>
						<div class="block">
							<input type="text" name="state" placeholder="State">
						</div>
						<div class="block">
							<input type="text" name="city" placeholder="City">
						</div>
					</li>
					<li>
						<textarea name="description" placeholder="Description"></textarea>
					</li>
					<li>
						<input type="submit" name="" value="Send Message" class="btn">
					</li>
				</ul>
			</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">

	var flag = <?php echo $val;?>;
	if(flag =="1"){
		
		toastr.options = {
						"positionClass": "toast-top-center"
					}
					toastr["success"]("Thank you for contacting with us.!");
	}

		$('#btn').click(function() {
			var name = $("#name").val();
			var email = $("#email").val();
			var phone = $("#phone").val();
			var description = $("#description").val();

			if(name == ''){
				return;
			}
			if(email == ''){
				return;
			}
			if(phone == ''){
				return;
			}
			if(description == ''){
				return;
			}

			var myform = document.getElementById("myform");

			var formdata = new FormData();
			formdata.append('name', name);
			formdata.append('email', email);
			formdata.append('phone', phone);
			formdata.append('description', description);


			$.ajax({
				url : 'http://localhost/buddy/api/v1/user/contactus',
				type : 'POST',
				data : formdata,
				processData: false,
				contentType: false,
				beforeSend : function() {

				},
				success : function(data) {

					console.log(data);
					$("#name").text('');
					$("#email").text('');
					$("#phone").text('');
					$("#description").text('');

					toastr.options = {
						"closeButton": false,
						"debug": false,
						"newestOnTop": false,
						"progressBar": false,
						"positionClass": "toast-top-center",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					}
					toastr["error"]("Thank you for contacting with us.!")

				},
				error : function(err) {

					console.log(err);

					toastr.options = {
						"closeButton": false,
						"debug": false,
						"newestOnTop": false,
						"progressBar": false,
						"positionClass": "toast-top-center",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					}
					toastr["success"]("Something went wrong.!")

				}
			});
		});


	</script>
</body>
</html>