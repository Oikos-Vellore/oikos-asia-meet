<?php
    
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $countryResidence = $_POST['country'];
    $whoAreYou = $_POST['whoAreYou'];
    $memberType = $_POST['memberType'];
    $areaOfInterest = $_POST['areaOfInterest'];
    $learningCircle = $_POST['learningCircle'];

    $con = mysqli_connect("localhost", "root", "root", "test");

    if(!$con)
    {
        die "Errorororo" . mysqli_error($con);
    }
    else
    {
        echo "Huyrrah"
    }
    

?>

<!DOCTYPE HTML>
<html>
            <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico"/>
<head>
		<title>About Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72619331-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">oikos Asia Meet 2016</a></h1>
					<nav id="nav">
						<ul>
							 <li><a href="index.html">Home</a></li>
                            <li><a href="schedule.html">Schedule</a></li>
							<li><a href="apply.html">Apply</a></li>
                            <li><a href="/pay/index.html">Payment Portal</a></li>
                            <li><a href="speakers.html">Speakers</a></li>
                            <li><a href="locate.html">Location</a></li>
                            <li><a href="about.html">About Us</a></li>
						</ul>
					</nav>
				</header>
    </div>
<footer id="footer">
					<ul class="icons">
						<li><a href="http://www.twitter.com/oikosworld" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/OikosVellore" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="http://linkedin.com/company/oikos-international" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="http://www.instagram.com/oikosworld" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="mailto:president@oikos-vellore.org" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; oikos Vellore. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>
</body>
</html>