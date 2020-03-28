<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FooD BuZZ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
	<style type="text/css"> 
		.form {
			margin-top: 20px;
			margin-left: 20px;
        }

	</style>
</head>

<body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">home</a></li>
                                        <li><a href="Menu.php">Menu</a></li>
                                        <li><a href="about.php">About</a></li>                                       
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a class="active" href="order.php">Order Now</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="#" href="#">+917602388180</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
	
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>order now</h3>
    </div>
    <!-- bradcam_area_end -->

	<!--form validation-->
		<form action="orderform.php" method="POST">
			<div class="form"> 
				<div class="row"> 
					<div class="col-md-10"> 
							<h2 style="text-align:center"> Oder now </h2>
						<div class="form-group"> 
							Name : <br /> 
							 <input type="text" name="name" class="form-control" placeholder="name :" aria-label="Username" aria-describedby="basic-addon1"> <br /> 
							 Email : <br /> 
							  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> <br /> 
							 Mobile no : <br /> 
							  <input type="numeric" name="mobile" class="form-control" placeholder="mobile no :" aria-label="mobilenumber" aria-describedby="basic-addon1"> <br />
							 Address : <br /> 
							  <input type="text" name="address" class="form-control" placeholder="Place , gali no :" aria-label="address" aria-describedby="basic-addon1"> <br />
							 Land mark : <br /> 
							  <input type="text" name="landmark" class="form-control" placeholder="land mark :" aria-label="landmark" aria-describedby="basic-addon1"> <br />
							  
							  <button type="submit" class="btn btn-secondary" value="submit">Submit</button>
						</div>
					</div>
				</div>
			</div>
        </form>
	<!--end form validation-->
				<!--payment method-->
			<div class="payment"> 
		<div class="row"> 
			<div class="col-md-10"> 
				<span><h2 style="text-align:center">CREDIT/DEBIT CARD PAYMENT</h2></span>
				<div class="col-md-6" text-right style="text-align:center;margin-left:310px; margin-top:10px;"> 
					<img src="https://img.icons8.com/color/36/000000/visa.png" alt="" />
					<img src="https://img.icons8.com/color/36/000000/mastercard.png" alt="" />
					<img src="https://img.icons8.com/color/36/000000/amex.png" alt="" />
				</div>
				<div class="card-body"> 
					<div class="form-group"> 
						<label for="cc-number" class="control-label">CARD NUMBER :</label>
						<input type="tel" name="cardno" id="cc-number" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="**** **** **** ****"/> <br /> 
						<label for="cc-exp" class="control-label">CARD EXP :</label> <br /> 
						<input type="tel" name="cardexp" id="cc-exp" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="** / **"/> <br />
						<label for="cc-cvc" class="control-label">CVC NO :</label> <br /> 
						<input type="tel" name="cvc" id="cc-cvc" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="***"/> <br />
						<label for="numeric" class="control-label">CARD HOLDER</label> <br /> 
						<input type="text" name="cardholder" class="input-lg form-control" /> <br />
						<input type="button" class="btn btn-success btn-lg form-control" value="payment" />
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--end payment method-->
    <!-- footer_start  -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                        Jhalandar
                                </h3>
                                <p>Jalandhar - Delhi G.T. Road, <br> 
                                        5th floor rose Jhalandar-144411 <br>
                                        <a href="#">food@gmail.com</a></p>
                                <a class="number" href="#">+917602388180</a>

                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                     Phagwara
                                </h3>
                                <p>Jalandhar - Delhi G.T. Road, <br> 
                                        7th floor green Phagwara-144401 <br>
                                        <a href="#">food@gmail.com</a></p>
                                <a class="number" href="#">+917743036723</a>

                            </div>
                        </div>
						   <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                    Ludhiana
                                </h3>
                                <p>Jalandhar - Delhi G.T. Road, <br> 
                                        3rd floor green lane Ludhiana-144402 <br>
                                        <a href="#">food@gmail.com</a></p>
                                <a class="number" href="#">+8801788511515</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
										 <li>
                                            <a href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
	
	<script type="text/javascript"> 
		$(function($){
			$('.cc-number').payment('formatCardNumber');
			$('.cc-exp').payment('formatCardExpiry');
			$('.cc-cvc').payment('formatCardCVC');
			$('form').submit(function(e){
				e.preventDefault();
				var cardType = $.payment.cardType($('.cc-number').val());
				$('.cc-number').toggleInputError(!$payment.validateCardNumber($(.cc-number).val()));
				$('.cc-exp').toggleInputError(!$payment.validateCardExpiry($(.cc-exp).payment('cardExpiryval')));
				$('.cc-cvc').toggleInputError(!$payment.validateCardCVC($(.cc-cvc).val(),cardType));
				
				$('.validation').removeClass(text-danger text-success);
				$('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
			});
		});
	</script>

</body>

</html>