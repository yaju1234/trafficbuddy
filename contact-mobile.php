<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>Trafficticketbuddy</title>
	<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
	<!-- CUSTON STYLE.CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
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
			<div class="contact-form">
				<ul>
					<li>
						<div class="block"><input type="text" name="" placeholder="First Name"></div>
						<div class="block"><input type="text" name="" placeholder="Last Name"></div>
					</li>
					<li>
						<div class="block"><input type="text" name="" placeholder="Phone"></div>
						<div class="block"><input type="email" name="" placeholder="Email"></div>
					</li>
					<li>
						<div class="block">
							<input id="file1" type="file" placeholder="Add profile picture" />
  							<label for="file1">Upload Driving Licence</label>
						</div>
						<div class="block">
							<input id="file2" type="file" placeholder="Add profile picture" />
  							<label for="file2">Upload Font Side Ticket</label>
						</div>
					</li>
					<li>
						<div class="block">
							<input id="file3" type="file" placeholder="Add profile picture" />
  							<label for="file3">Upload Rare Side Ticket</label>
						</div>
						<div class="block">
							<select name="" id="">
								<option value="">Select Country</option>
								<option value="">Canada</option>
							</select>
						</div>
					</li>
					<li>
						<div class="block">
							<select name="" id="">
								<option value="">Select State</option>
								<option value="">Alberta</option>
								<option value="">British Columbia</option>
							</select>
						</div>
						<div class="block">
							<select name="" id="">
								<option value="">Select City</option>
								<option value="">Victoria</option>
								<option value="">Edmonton</option>
							</select>
						</div>
					</li>
					<li>
						<textarea name="" placeholder="Description"></textarea>
					</li>
					<li>
						<input type="button" name="" value="Send Message" class="btn">
					</li>
				</ul>
			</div>
		</div>
	</div>

	<script type="text/javascript">

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