<!DOCTYPE html>
<html lang="en">
<head>
	<title>BRACU Student Service</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Indie+Flower" rel="stylesheet">
	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="registering.php" class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					Register A Student 
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Student's Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Student's Name">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Student's ID">
					<span class="label-input100">ID *</span>
					<input class="input100" type="text" name="Id" placeholder="Enter Your ID ">
				</div>

			

				
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Sex</span>
					<input class="input100" type="text" name="sex" placeholder="Enter Sex of Student">
				</div>
				
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Address</span>
					<input class="input100" type="text" name="Address" placeholder="Enter Address">
				</div>
				
                
                <div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Age</span>
					<input class="input100" type="text" name="age" placeholder="Enter Student's age">
				</div>
                
                
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Date of birth</span> <br>
					<input type="date" name="dates"  required class="mbox"><br>
					
				</div>
						

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
