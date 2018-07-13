<?php include('include/header.php') ?>

<!-- INNER BANNER -->
<div class="inner-banner" >
	<img src="assets/images/banner-contact-us.jpg" alt="">
</div>

<!-- CONTACT US -->
<div class="section contact">
	<div class="container">
		<h2 class="scrollimation scale-in">contact us</h2>
		<p class="sub-heading scrollimation fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<div class="contact-form">
				<div class="send-message">
					<h3 class="scrollimation fade-left">e-mail us</h3>
					<ul class="contact-list">
						<li class="scrollimation fade-right d1">
							<input type="text" name="" id="name" placeholder="Your Name" required>
						</li>
						<li class="scrollimation fade-right d2">
							<input type="text" name="" id="email" placeholder="Email ID" required>
						</li>
						<li class="scrollimation fade-right d2">
							<input type="text" name="" id="phone" placeholder="Phone Number" required>
						</li>
						<li class="scrollimation fade-right d3">
							<textarea name="" id="description" cols="30" rows="10" placeholder="Enquery" required></textarea>
						</li>
						<li class="scrollimation fade-right d4">
							<button id="btn">Submit</button>
						</li>
					</ul>
				</div>
				<div class="contact-via">
					<div class="block call-us">
						<h3 class="scrollimation fade-right">call us</h3>
						<p  class="scrollimation fade-left">Tel. <strong>+83 9809768743</strong></p>
					</div>
					<div class="block location">
						<h3 class="scrollimation fade-right">reach us</h3>
						<p class="scrollimation fade-left">3131  St. John Street<br>Abernethy<br>Saskatchewan</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include('include/footer.php') ?>

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
