<?
header('Content-Type: text/css');
?>
/* MIGUEL */
.logout-button,
.logout-button:hover {
border-radius: 10px;
	font-family: "Trebuchet MS", Arial, Tahoma, Verdana, sans-serif;
	font-size: 12px;
	font-weight: bold;
	line-height: 1.5em;
	padding: 5px 91px;
	cursor: pointer;
	outline: none;
  	text-decoration: none;
	box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
  	color: #222;
	text-shadow: 0px 1px 1px #fff;
}

.logout-button {
  	border: 1px solid #888;
	background: #fff url(../graphics/button.png) repeat-x left top;
}

.logout-button:hover {
  	border: 1px solid #888;
	background: #DBDBDB url(../graphics/button.png) repeat-x left top;
}
.logout-header {
	bottom: 8px;
	position: absolute;
	right: 5px;
  	z-index: 1;
}

/***** PAGE HEADER ******/
.page-header {
	position: relative;
	background: #05d url(../graphics/header.png) repeat-x top left;
}
.page-header > .inner {
	position: relative;
}

.page-default .page-header > .inner {
    width: 990px;
    height: 150px;
    margin: 0 auto;
    background: transparent url(../graphics/header-gradients.png) no-repeat top left;
}

.heading-site, .heading-site:hover {
  display: inline-block;
	font-size: 2em;
  font-weight: normal;
	line-height: 1.5em;
  letter-spacing: 2px;
	color: #fff;
	text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	text-decoration: none;
  background: transparent url(../graphics/logo.png) no-repeat 0px 15px;
  padding: 10px 15px 10px 65px;
  margin: 10px;
}

.heading-site:hover {
	text-shadow: 0px 0px 10px #fff;
  background-image: url(../graphics/logo-hover.png);
}

/* Maximize click target */
.menu > li > a { display: block }


/* ***************************************
	BREADCRUMBS
*************************************** */
.breadcrumbs {
	color: #888;
  margin-bottom: 5px;
}
.breadcrumbs > li {
	display: inline-block;
}
.breadcrumbs > li:after {
	content: "\003E";
	padding: 0 5px;
	font-weight: normal;
}
.breadcrumbs > li > a {
	display: inline-block;
	color: #888;
}
.breadcrumbs > li > a:hover {
	color: #666;
	text-decoration: underline;
}

.main .breadcrumbs {
	position: relative;
	top: 0;
	left: 0;
}

/* FIN MIGUEL */

.menu-footer-default {
	float: right;
}
.menu-footer > li, .menu-footer > li > a {
	display: inline-block;
	color: #AAA;
}
.menu-site {
	z-index: 1;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.25);
  border-color: rgba(0, 0, 0, 0.25);
  border-width: 1px 1px 0px 1px;
  border-style: solid;

  -webkit-border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-topright: 5px;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}