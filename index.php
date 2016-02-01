<?php?>
<html>
	<head>
        <!--Import Font Awesome-->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
		<!--Import My styles.css-->
		<link type="text/css" rel="stylesheet" href="css/styles.css"/>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="js/jquery-2.2.0.js"></script>
		<!--Import materialize.js-->
		<script type="text/javascript" src="js/materialize.js"></script>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Setup page title and icon-->
        <link href="img/uos_icon.png" type="image/png" rel="shortcut icon" />
        <title>UOS UDC</title>
	</head>

	<body>
        <!--Page header start-->
        <div class="header deep-purple lighten-2">
            <div class="container">
                <!--Main row in the header-->
                <div class="row">
                    <!--Column containing UOS logo-->
                    <div class="col s12 m4">
                        <a id="logo-container" herf="http://www.sharjah.ac.ae/" class="brand-logo">
                            <object type="image/svg+xml" data="img/uos_logo.svg"></object>
                        </a>
                    </div>
                </div>
                <!--Just for a bit of space-->
                <div class="row"></div>
            </div>
        </div><!--Page header end-->
        
        <!--Welcome login form-->
        <div class="container">
            <div class="row">
                <div class="col m6 s12">
                    <div class="card">
                        <div class="card-content">
                            <div class="row" id="login-card">
                                <form class="col s12" action="" method="post">
                                    <div class="row">
                                        <h5 class="col s12">Sign in</h5>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="sid" name="sid" type="text" class="validate">
                                            <label for="sid">Username</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="spw" name="spw" type="password" class="validate">
                                            <label for="spw">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <button type="submit" name="login" value="done" class="waves-effect waves-light btn-large green col s12">login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            Welcome <?php echo $_POST["sid"]; ?><br />
            Your password: <?php echo $_POST["spw"]; ?>
        </div>
    </body>
</html>
