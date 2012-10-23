<?
header('Content-Type: text/css');
?>

/* ***************************************
	RESET CSS
*************************************** */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, ul, 
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: inherit;
	vertical-align: baseline;
}
html, body {
	height: 100%;
	margin-bottom: 1px;
}
img {
	border-width:0;
	border-color:transparent;
}
:focus {
	outline: 0 none;
}
ol, ul {
	list-style: none;
}
em, i {
	font-style:italic;
}
ins {
	text-decoration:none;
}
del {
	text-decoration:line-through;
}
strong, b {
	font-weight:bold;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
caption, th, td {
	text-align: left;
	font-weight: normal;
	vertical-align: top;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: "";
}
blockquote, q {
	quotes: "" "";
}
a {
	text-decoration: none;
	color: #05D;
}

label {
font-weight: bold;
color: #222;
}

body {

	font-size: 80%;
	line-height: 1.5em;
	font-family: "Trebuchet MS", Arial, Tahoma, Verdana, sans-serif;
  	color: #000;
	background: url('../images/background.jpg') repeat fixed left top;
	background: -webkit-radial-gradient( 
					ellipse,
					rgba(150, 150, 150, 0), 
					rgba(50, 50, 50, 0.3)
				) no-repeat fixed center center, 
				url('../images/background.jpg') repeat fixed left top;
}

h1 {
	font-size: 1.8em;
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
    color: #28F;
    line-height: 1.1em;
    padding-bottom: 5px;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
	color: #28f;
  line-height: 1.1em;
  padding-bottom: 5px;
}

h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; }
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

.page_default {
	min-width: 990px;
}
.page-default .page-header > .inner {
	min-width: 990px;
	width: 90%;
	height: 150px;
	margin: 0 auto;
	background: transparent url(../graphics/header-gradients.png) no-repeat top left;
}
.page-default .page-body > .inner {
	min-width: 990px;
	width: 90%;
	margin: 0 auto;
}
.page-default .page-footer > .inner {
	min-width: 990px;
	width: 90%;
	margin: 0 auto;
	padding: 10px 15px;
}

.button-submit:hover {
border-color: #026;
background-color: #06D;
}
.button-submit, .button-submit:hover {
color: white;
text-shadow: 0px 1px 1px black;

.notice {
    color: red;
    font-style: italic;
}

