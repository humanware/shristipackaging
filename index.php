<!DOCTYPE html>
<html>
<head>
	<title>Shristi Packaging Company Pvt. Ltd.</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/slider.css">
	<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
	<div id="container">
		<div class="header">
			<div class="logo">
				<a href="index.php">
					<img src="media/logo.png" width="300" height="90" alt="Shristi Packaging Company Pvt. Ltd" />
				</a>
			</div>
			<nav class="menu">
				<ul class="umenu">
					<li><a class="active" href="index.php">Home</a></li>
					<li><a href="about-us.php">About Us</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="scheme.php">Scheme</a></li>
					<li><a href="order-online.php">Order Online</a></li>
					<li><a href="contact-us.php">Contact Us</a></li>
				</ul>
			</nav>
		</div>
		<div class="slider-container">
  			<div class="slider">
			    <div class="slider__item">
			      	<img src="media/1.jpg" alt="">
			      	<!-- <span class="slider__caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<a href="">Далее >></a> </span> -->
			    </div>
    			<div class="slider__item">
      				<img src="media/2.jpg" alt="">
    			</div>
    			<div class="slider__item">
			      	<img src="media/3.jpg" alt="">
    			</div>
    			<div class="slider__item">
			      	<img src="media/4.jpg" alt="">
    			</div>
  			</div>
		    <div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">
		      <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>
		    </div>
		    <div class="slider__switch slider__switch--next" data-ikslider-dir="next">
		      <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>
		    </div>
		</div>
		<div class="content">
			<h3>Welcome to our Website</h3>
			<p>Nepal is the home of Mt. Everest, and the Himalayas - 8 of 10 highest mountains in the world watch-over Nepal's land. Many medicinal herbs found at the foothill of Himalayas are considered to be the purest and best in the world. Tea is not an exception. A drink, a food, a herb, call it what-ever you like, it can cure your illness, make friends or be among your enemies and be friends back again!</p>

			<p>High altitude teas have more flavor than low altitude teas. Green Teas grown in High altitude are regarded as the best Green Teas in the world. Young Tea bushes yield better quality than those of older bushes. Nepali Tea bushes are young and are grown in high altitude. Tea bushes love warm and humid climate with plenty of rainfall. Nepal's 70% of the land is hill area having those climatic conditions. Know Nepal by Mountains, you will soon know by Tea!</p>
		</div>
		<div class="footer">
			Copyright &copy; <?php echo date('Y'); ?> Shristi Packaging Industry Pvt. Ltd. All Rights Reserved. | Developed by: <a href="http://www.codepati.com" target="_blank">{CodePati}</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="./src/jquery-1.11.1.min.js"><\/script>')</script>
	<script src="./src/slider.js"></script>
		<script>
	$(".slider-container").ikSlider({
		speed: 500,
	});
</script>
</body>
</html>