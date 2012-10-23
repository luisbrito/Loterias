<?
header('Content-Type: text/css');
?>
/* Headlines */

.big {
	font-size: 1.75em;
}

.normal {
	font-size: 1.4em;
}

.small {
	font-size: 1.20em;
}


.margin {
	margin: 10px 0;
}

.big.m-top {
	margin-top: 0.75em;
}

.big.m-bottom{
	margin-bottom: 0.75em;
}

.normal.m-top {
	margin-top: 0.5em;
}

.normal.m-bottom {
	margin-bottom: 0.5em;
}

.small.m-top {
	margin-top: 0.25em;
}

.small.m-bottom {
	margin-bottom: 0.25em;
}


.underlined {
	border-bottom: 1px solid #CCC;
	padding-bottom: 2px;
}


/* Buttons */

.button.green {
	background-image: -ms-linear-gradient(bottom, rgb(81, 163, 81) 0%, rgb(112, 210, 112) 100%);
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(81, 163, 81)), color-stop(1, rgb(112, 210, 112)) );
}

.button.red {
	background-image: -ms-linear-gradient(bottom, rgb(210, 90, 80) 0%, rgb(210, 70, 80) 100%);
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, rgb(210, 90, 80)), color-stop(1, rgb(210, 70, 80)) );
}

.button.large {
	width: 10em;
	padding: 0.35em 1em;
}

.button.larger {
	width: 15em;
	padding: 0.35em 1em;
}


/* Blur Effect */

.blur {
	background: rgba(255, 255, 255, 0.5);
    max-width:1300px;
	border: 1px solid white;
	border-radius: 5px;
	box-shadow: 5px 5px 25px 5px rgba(180,180,180, 0.4);
	padding: 20px;
	padding-bottom: 15px;
}


/* Message Error */

.error {
	color: red;
	font-size: 8px; 
}


/* Images */

.logo {
	background: url('../images/logo.png') no-repeat;
}


.home-slideshow {
	background: url('../images/home.png') no-repeat;
}

.shop-slideshow {
    background: url('../images/map.png') no-repeat;
}

.favicon.fb {
	background: url('../images/ico-facebook.png') no-repeat;
}

.favicon.tw {
	background: url('../images/ico-twitter.png') no-repeat;
}

.favicon.go {
	background: url('../images/ico-google.png') no-repeat;
}

/*Table*/

.lujotar_odd_row {
    background-color: #fefeff;
    color: #4e6a71;
}

.lujotar_even_row {
    background-color: #e9f7ee;
    color: #4e6a71;
}