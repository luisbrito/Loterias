<?
header('Content-Type: text/css');
$url="http://localhost/loterias/";
?>

em, i {
	font-style:italic;
}
strong, b {
	font-weight:bold;
}

/* Clearfix */
.clearfix:after,
.grid:after,
.layout:after,
.inner:after,
.page-header:after,
.page-footer:after,
.head:after,
.foot:after,
.col:after,
.image-block:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;	
}

/* Fluid width container that does not wrap floats */
.body,
.col-last {
	display: block;
	width: auto;
	word-wrap: break-word;
	overflow: hidden;
	
	/* IE 6, 7 */
	zoom:1;
	*overflow:visible;
}

.body:after,
.col-last:after {
	display: block;
	visibility: hidden;
	height: 0 !important;
	line-height: 0;
	overflow: hidden;
	
	/* Stretch to fill up available space */
	font-size: xx-large;
	content: " x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x ";
}

/* ***************************************
 * MENUS
 *
 * To add separators to a menu:
 * .menu-$menu > li:after {content: '|'; background: ...;}
 *************************************** */
/* Enabled nesting of dropdown/flyout menus */
.menu > li { position: relative; }

.menu > li:last-child::after {
	display: none;
}

/* Maximize click target */
.menu > li > a { display: block }

/* Horizontal menus w/ separator support */
.menu-hz > li,
.menu-hz > li:after,
.menu-hz > li > a,
.menu-hz > li > span {
	vertical-align: middle;
}

/* Allow inline image blocks in horizontal menus */
.menu-hz .body:after { content: '.'; }

/* Inline block */
.gallery > li,
.button,
.icon,
.menu-hz > li,
.menu-hz > li:after,
.menu-hz > li > a,
.menu-hz > li > span {
	/* Google says do this, but why? */
	position: relative;

	display: inline-block;
}



/* ***************************************
	USER INPUT DISPLAY RESET
*************************************** */
.output {
	margin-top: 10px;
}

.output dt { font-weight: bold }
.output dd { margin: 0 0 1em 1em }

.output ul, .output ol {
	margin: 0 1.5em 1.5em 0;
	padding-left: 1.5em;
}
.output ul {
	list-style-type: disc;
}
.output ol {
	list-style-type: decimal;
}
.output table {
	border: 1px solid #ccc;
}
.output table td {
	border: 1px solid #ccc;
	padding: 3px 5px;
}
.output img {
	max-width: 100%;
}

/* ***************************************
	Form Elements
*************************************** */
fieldset > div {
	margin-bottom: 15px;
}
fieldset > div:last-child {
	margin-bottom: 0;
}
.form-alt > fieldset > .foot {
	border-top: 1px solid #ccc;
	padding: 10px 0;
}

label {
	font-weight: bold;
	color: #222;
}

input,
textarea {
	font-family: "Trebuchet MS", Arial, Tahoma, Verdana, sans-serif;
  font-size: 1.1em;
	color: #666;
	border: 1px solid #ccc;
	padding: 5px;
	width: 100%;	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

input:hover, 
textarea:hover {
	border-color: #aaa;
}

input:focus, 
textarea:focus {
	border-color: #28f;
	color:#222;

	-webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
}

textarea {
	height: 200px;
}


.longtext-control {
	float: right;
	margin-left: 14px;
	font-size: 80%;
	cursor: pointer;
}


.input-access {
	margin:5px 0 0 0;
}

input[type="checkbox"],
input[type="radio"] {
	margin:0 3px 0 0;
	padding:0;
	border:none;
	width:auto;
}
.input-radio,
.input-checkbox,
.input-checkboxes.horizontal li,
.input-radios.horizontal li {
	display: inline;
	padding-right: 10px;
}

.form-login, .form-account {
	max-width: 450px;
}


/* ***************************************
	FRIENDS PICKER
*************************************** */
.friends-picker-main-wrapper {
	margin-bottom: 15px;
}
.friends-picker-container h3 {
	font-size:4em !important;
	text-align: left;
	margin:0px 0px 10px 0px !important;
	color:#999 !important;
	background: none !important;
	padding:0 !important;
}
.friends-picker .friends-picker-container .panel ul {
	text-align: left;
	margin: 0;
	padding:0;
}
.friends-picker-wrapper {
	margin: 0;
	padding:0;
	position: relative;
	width: 100%;
}
.friends-picker {
	position: relative;
	overflow: hidden;
	margin: 0;
	padding:0;
	width: 730px;
	height: auto;
	background-color: #ddd;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.friendspicker-savebuttons {
	background: #fff;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	margin:0 10px 10px;
}
.friends-picker .friends-picker-container { /* long container used to house end-to-end panels. Width is calculated in JS  */
	position: relative;
	left: 0;
	top: 0;
	width: 100%;
	list-style-type: none;
}
.friends-picker .friends-picker-container .panel {
	float:left;
	height: 100%;
	position: relative;
	width: 730px;
	margin: 0;
	padding:0;
}
.friends-picker .friends-picker-container .panel .wrapper {
	margin: 0;
	padding:10px;
	min-height: 230px;
}
.friends-picker-navigation {
	margin: 10px 0px;
}
.friends-picker-navigation ul {
	list-style: none;
	padding-left: 0;
}
.friends-picker-navigation ul li {
	float: left;
	margin:0;
	background:white;
}
.friends-picker-navigation a {
	font-weight: bold;
	text-align: center;
	background-color: #fff;
	color: #888;
	text-decoration: none;
	display: block;
	padding: 0 5px;
  border: 1px solid #ccc;
  background-color: #fff;
  margin-right: 2px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.tabHasContent {
	color: #222 !important;
}
.friends-picker-navigation li a:hover {
	background-color: #888;
  border-color: #666;
	color: #fff !important;
}
.friends-picker-navigation li a.current {
	background-color: #28f;
  border-color: #05d;
	color: #fff !important;
}
.friends-picker-navigation-l, .friends-picker-navigation-r {
	position: absolute;
	top: 50px;
	text-indent: -9000em;
}
.friends-picker-navigation-l a, .friends-picker-navigation-r a {
	display: block;
	height: 40px;
	width: 40px;
}
.friends-picker-navigation-l {
	right: 50px;
	z-index:1;
}
.friends-picker-navigation-r {
	right: 0;
	z-index:1;
}
.friends-picker-navigation-l {
	background: url("http://localhost/elgg/_graphics/friendspicker.png") no-repeat left top;
}
.friends-picker-navigation-r {
	background: url("http://localhost/elgg/_graphics/friendspicker.png") no-repeat -60px top;
}
.friends-picker-navigation-l:hover {
	background: url("http://localhost/elgg/_graphics/friendspicker.png") no-repeat left -44px;
}
.friends-picker-navigation-r:hover {
	background: url("http://localhost/elgg/_graphics/friendspicker.png") no-repeat -60px -44px;
}
.friendspicker-savebuttons .button-submit,
.friendspicker-savebuttons .button-cancel {
	margin: 10px 0px 10px 10px;
}
.friendspicker-members-table {
	background: #ddd;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	margin:10px 0 0;
	padding:10px 10px 0;
}


/* ***************************************
	AUTOCOMPLETE
*************************************** */
.ui-autocomplete {
	position: absolute;
	cursor: default;
}
.autocomplete-item .body {
	max-width: 600px;
}
.ui-autocomplete {
	background-color: #fff;
	border: 1px solid #ccc;
	overflow: hidden;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.ui-autocomplete .ui-menu-item {
	padding: 0px 5px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.ui-autocomplete .ui-menu-item:hover {

	background-color: #eee;
}
.ui-autocomplete a:hover {
	text-decoration: none;
}


/* ***************************************
	USER PICKER
*************************************** */
.user-picker-list li:first-child {
	border-top: 1px dotted #ccc;
	margin-top: 5px;
}
.user-picker-list > li {
	border-bottom: 1px dotted #ccc;
}


/* ***************************************
      DATE PICKER
**************************************** */
.ui-datepicker {
	display: none;

	margin-top: 3px;
	width: 215px;
	background-color: #fff;
	border: 1px solid #28d;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	overflow: hidden;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.ui-datepicker-inline {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.ui-datepicker-header {
	position: relative;
	background: #28d;
	color: #fff;
	padding: 3px 5px;
	border-bottom: 1px solid #06b;
}
.ui-datepicker-header a {
	color: #fff;
}
.ui-datepicker-prev, .ui-datepicker-next {
  position: absolute;
  top: 3px;
	cursor: pointer;
}
.ui-datepicker-prev {
  left: 10px;
}
.ui-datepicker-next {
  right: 10px;
}
.ui-datepicker-title {
  line-height: 1.5em;
  margin: 0 30px;
  text-align: center;
	font-weight: bold;
}
.ui-datepicker-calendar {
	margin: 10px;
}
.ui-datepicker th {
	color: #05d;
	border: none;
  font-weight: bold;
  padding: 0px 6px 5px 6px;
  text-align: center;
}
.ui-datepicker td {
	padding: 1px;
}
.ui-datepicker td span, .ui-datepicker td a {
  display: block;
  padding: 2px;
  line-height: 1.2em;
  text-align: right;
  text-decoration: none;
}
.ui-datepicker-calendar .ui-state-default {
  border: 1px solid #ccc;
  color: #666;
  background: #eee;
}
.ui-datepicker-calendar .ui-state-hover {
  border: 1px solid #06b;
  color: #fff;
  background: #28d;
}
.ui-datepicker-calendar .ui-state-active,
.ui-datepicker-calendar .ui-state-active.ui-state-hover {
  font-weight: bold;
  border: 1px solid #05d;
  color: #05d;
  background: #eee;
}
/* **************************
	BUTTONS
************************** */

/* Base ********************/
.button,
.button:hover {
	font-family: "Trebuchet MS", Arial, Tahoma, Verdana, sans-serif;
	font-size: 12px;
	font-weight: bold;
	line-height: 1.5em;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	width: auto;
	padding: 5px 15px;
	cursor: pointer;
	outline: none;
  text-decoration: none;
	
	-webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);

  color: #222;
	text-shadow: 0px 1px 1px #fff;
  border: 1px solid #888;
	background: #fff url(<? echo $url?>graphics/button.png) repeat-x left top;
}

.button:hover {
  border-color: #666;
	background-color: #ddd;
}

.button:active {
	background-image: url(<? echo $url?>/graphics/button-active.png);
  background-position: left bottom;

	-webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
}

.button.state-disabled,
.button.state-disabled:hover {
	background: #999;
	border-color: #999;
	cursor: default;
	color: #222;
	text-shadow: 0px 1px 1px #fff;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}


/* Submit ********************/
.button-submit, 
.button-submit:hover {
	color: #fff;
	text-shadow: 0px 1px 1px #000;
	text-decoration: none;
  border-color: #048;
	background-color: #28f;
}

.button-submit:hover {
  border-color: #026;
	background-color: #06d;
}


/* Cancel ********************/
.button-cancel, 
.button-cancel:hover {
	color: #fff;
	text-shadow: 0px 1px 1px #000;
	text-decoration: none;
	border-color: #222;
	background-color: #666;
}

.button-cancel:hover {
  border-color: #000;
	background-color: #444;
}


/* Delete ********************/
.button-delete,
.button-delete:hover {
	color: #fff;
	text-shadow: 0px 1px 1px #000;
	text-decoration: none;
	border-color: #800;
	background-color: #d22;
}

.button-delete:hover {
  border-color: #600;
	background-color: #b00;
}


/* Special ********************/
.button-special,
.button-special:hover {
	color: #fff;
	text-shadow: 0px 1px 1px #000;
	text-decoration: none;
	border-color: #080;
	background-color: #2d3;
}

.button-special:hover {
  border-color: #060;
	background-color: #0c1;
}


/* Dropdown ********************/
.button-dropdown,
.button-dropdown:hover,
.button-dropdown.state-active {
  border: 0;
}

.button-dropdown:after {
	content: " \25BC ";
	font-size: smaller;
}

.button-dropdown.state-active {
	background: #ccc url(<? echo $url?>/graphics/button-active.png) repeat-x left bottom;
  -webkit-border-bottom-right-radius: 0;
  -webkit-border-bottom-left-radius: 0;
  -moz-border-radius-bottomright: 0;
  -moz-border-radius-bottomleft: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

/* ***************************************
	ICONS
*************************************** */

.icon {
	background: transparent url(<? echo $url?>/graphics/sprites.png) no-repeat left;
	width: 18px;
	height: 18px;
	margin: 0 2px;
}
.icon-arrow-left {
	background-position: 0 -0px;
}
.icon-arrow-right {
	background-position: 0 -18px;
}
.icon-arrow-two-head {
	background-position: 0 -36px;
}
.icon-attention:hover {
	background-position: 0 -54px;
}
.icon-attention {
	background-position: 0 -72px;
}
.icon-calendar {
	background-position: 0 -90px;
}
.icon-cell-phone {
	background-position: 0 -108px;
}
.icon-checkmark:hover {
	background-position: 0 -126px;
}
.icon-checkmark {
	background-position: 0 -144px;
}
.icon-clip:hover {
	background-position: 0 -162px;
}
.icon-clip {
	background-position: 0 -180px;
}
.icon-cursor-drag-arrow {
	background-position: 0 -198px;
}
.icon-delete-alt:hover {
	background-position: 0 -216px;
}
.icon-delete-alt {
	background-position: 0 -234px;
}
.icon-delete:hover {
	background-position: 0 -252px;
}
.icon-delete {
	background-position: 0 -270px;
}
.icon-download:hover {
	background-position: 0 -288px;
}
.icon-download {
	background-position: 0 -306px;
}
.icon-eye {
	background-position: 0 -324px;
}
.icon-facebook {
	background-position: 0 -342px;
}
.icon-grid:hover {
	background-position: 0 -360px;
}
.icon-grid {
	background-position: 0 -378px;
}
.icon-home:hover {
	background-position: 0 -414px;
	/*background-position: 0 -396px;*/
}
.icon-home {
	background-position: 0 -414px;
}
.icon-hover-menu:hover {
	background-position: 0 -432px;
}
.icon-hover-menu {
	background-position: 0 -450px;
}
.icon-info:hover {
	background-position: 0 -468px;
}
.icon-info {
	background-position: 0 -486px;
}
.icon-link:hover {
	background-position: 0 -504px;
}
.icon-link {
	background-position: 0 -522px;
}
.icon-list {
	background-position: 0 -540px;
}
.icon-lock-closed {
	background-position: 0 -558px;
}
.icon-lock-open {
	background-position: 0 -576px;
}
.icon-mail-alt:hover {
	background-position: 0 -594px;
}
.icon-mail-alt {
	background-position: 0 -612px;
}
.icon-mail:hover {
	background-position: 0 -630px;
}
.icon-mail {
	background-position: 0 -648px;
}
.icon-photo {
	background-position: 0 -666px;
}
.icon-print-alt {
	background-position: 0 -684px;
}
.icon-print {
	background-position: 0 -702px;
}
.icon-push-pin-alt {
	background-position: 0 -720px;
}
.icon-push-pin {
	background-position: 0 -738px;
}
.icon-redo {
	background-position: 0 -756px;
}
.icon-refresh:hover {
	background-position: 0 -774px;
}
.icon-refresh {
	background-position: 0 -792px;
}
.icon-round-arrow-left {
	background-position: 0 -810px;
}
.icon-round-arrow-right {
	background-position: 0 -828px;
}
.icon-round-checkmark {
	background-position: 0 -846px;
}
.icon-round-minus {
	background-position: 0 -864px;
}
.icon-round-plus {
	background-position: 0 -882px;
}
.icon-rss {
	background-position: 0 -900px;
}
.icon-search-focus {
	background-position: 0 -918px;
}
.icon-search {
	background-position: 0 -936px;
}
.icon-settings-alt:hover {
	background-position: 0 -954px;
}
.icon-settings-alt {
	background-position: 0 -972px;
}
.icon-settings {
	background-position: 0 -990px;
}
.icon-share:hover {
	background-position: 0 -1008px;
}
.icon-share {
	background-position: 0 -1026px;
}
.icon-shop-cart:hover {
	background-position: 0 -1044px;
}
.icon-shop-cart {
	background-position: 0 -1062px;
}
.icon-speech-bubble-alt:hover {
	background-position: 0 -1080px;
}
.icon-speech-bubble-alt {
	background-position: 0 -1098px;
}
.icon-speech-bubble:hover {
	background-position: 0 -1116px;
}
.icon-speech-bubble {
	background-position: 0 -1134px;
}
.icon-star-alt {
	background-position: 0 -1152px;
}
.icon-star-empty:hover {
	background-position: 0 -1170px;
}
.icon-star-empty {
	background-position: 0 -1188px;
}
.icon-star:hover {
	background-position: 0 -1206px;
}
.icon-star {
	background-position: 0 -1224px;
}
.icon-tag:hover {
	background-position: 0 -1242px;
}
.icon-tag {
	background-position: 0 -1260px;
}
.icon-thumbs-down-alt:hover {
	background-position: 0 -1278px;
}
.icon-thumbs-down:hover,
.icon-thumbs-down-alt {
	background-position: 0 -1296px;
}
.icon-thumbs-down {
	background-position: 0 -1314px;
}
.icon-thumbs-up-alt:hover {
	background-position: 0 -1332px;
}
.icon-thumbs-up:hover,
.icon-thumbs-up-alt {
	background-position: 0 -1350px;
}
.icon-thumbs-up {
	background-position: 0 -1368px;
}
.icon-trash {
	background-position: 0 -1386px;
}
.icon-twitter {
	background-position: 0 -1404px;
}
.icon-undo {
	background-position: 0 -1422px;
}
.icon-user:hover {
	background-position: 0 -1440px;
}
.icon-user {
	background-position: 0 -1458px;
}
.icon-users:hover {
	background-position: 0 -1476px;
}
.icon-users {
	background-position: 0 -1494px;
}
.icon-video {
	background-position: 0 -1512px;
}

/* ***************************************
	PAGINATION
*************************************** */
.pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
}
.pagination li {
	display: inline;
	margin: 0 5px 0 0;
	text-align: center;
}
.pagination a, .pagination span {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	padding: 3px 10px;
  background-color: #fff;
	border: 1px solid #28f;
	color: #28f;
}
.pagination a:hover {
	background-color: #28f;
  border-color: #05d;
	color: #fff;

	text-decoration: none;

	-webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
}
.pagination a:active {
  background-color: #05d;
  border-color: #03b;

	-webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
}
.pagination .state-disabled span {
	color: #ccc;
	border-color: #ccc;
}
.pagination .state-selected span {
	color: #222;
	border-color: #666;
}


/* ***************************************
	TABS
*************************************** */
.tabs {
	margin-bottom: 5px;
	border-bottom: 2px solid #ccc;
	display: table;
	width: 100%;
}
.tabs li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 5px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.tabs a {
	text-decoration: none;
	display: block;
	padding: 5px 15px;
	text-align: center;
	color: #666;
}
.tabs a:hover {
	color: #05d;
}
.tabs .state-selected {
  border-color: #ccc;
	background-color: #fff;
}
.tabs .state-selected a {
	position: relative;
	top: 2px;
	background-color: #fff;
	padding-top: 3px;
  padding-bottom: 7px;
  color: #222;
}


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


/* ***************************************
	TOPBAR MENU
*************************************** */
.menu-topbar {
	float: left;
}

.menu-topbar > li {
	float: left;
}

.menu-topbar > li > a {
  font-size: 13px;
  line-height: 1.5em;
	color: #ddd;
  margin: 0px 15px;
	text-shadow: 0px 1px 1px #000;
}

.menu-topbar > li > a:hover {
	color: #fff;
	text-decoration: none;
}

.menu-topbar-alt {
	float: right;
}

.menu-topbar .icon {
	vertical-align: middle;
	margin-top: -1px;
}

.menu-topbar > li > a.topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}

.menu-topbar > li > a.topbar-avatar {
	width: 18px;
	height: 18px;
}


/* ***************************************
	SITE MENU
*************************************** */

.menu-site > li > a {
  font-size: 13px;
	font-weight: bold;
  line-height: 1.5em;

	padding: 7px 13px;
	height: 19px;

  border-width: 1px 1px 0px 1px;
  border-style: solid;
  border-color: transparent;
}

.menu-site > li > a:hover {
	text-decoration: none;
}

.menu-site-default {
	position: absolute;
	bottom: 0;
	left: 0;
	height: 34px;
}

.menu-site-default > li {
	float: left;
	margin-right: 1px;
}

.menu-site-default > li:last-child {
	margin-right: 0;
}

.menu-site-default > li > a {
	color: #fff;
	text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);
}

.menu-site > li > ul {
	display: none;
	background-color: #fff;
}

.menu-site > li:hover > ul {
	display: block;
}

.menu-site-default > .state-selected > a,
.menu-site-default > li:hover > a {
	background: #fff url(<? echo $url?>/graphics/menu-button.png) repeat-x left top;
	color: #05d;

  border-color: #fff;

	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;

	text-shadow: none;
}

.menu-site-more {
	position: relative;
	width: 100%;
	min-width: 150px;
	border: 1px solid #888;
	border-top: 0;
	left: -1px;

	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;

	-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
	-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
}

.menu-site-more > li > a {
	background-color: #fff;
	color: #222;

	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;

  border-width: 1px 0px 1px 0px;
  border-style: solid;
  border-color: transparent;
}

.menu-site-more > li > a:hover {
  border-color: #03b;
	background: #05d;
	color: #fff;
}

.menu-site-more > li:last-child > a,
.menu-site-more > li:last-child > a:hover {
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;
}

.more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 5px;
}


/* ***************************************
	TITLE
*************************************** */
.menu-title {
	float: right;
}

.menu-title > li {
	display: inline-block;
	margin-left: 5px;
}


/* ***************************************
	FILTER MENU
*************************************** */
.menu-filter {
	margin-bottom: 5px;
	border-bottom: 2px solid #ccc;
	display: table;
	width: 100%;
}
.menu-filter > li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background-color: #eee;
	margin: 0 0 0 5px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 5px 15px;
	text-align: center;
	color: #666;
}
.menu-filter > li > a:hover {
	color: #05d;
}
.menu-filter > .state-selected {
  border-color: #ccc;
	background-color: #fff;
}
.menu-filter > .state-selected > a {
	position: relative;
	top: 2px;
	background-color: #fff;
	padding-top: 3px;
  padding-bottom: 7px;
  color: #222;
}


/* ***************************************
	PAGE MENU
*************************************** */
.menu-page {
	margin-bottom: 20px;
}

.menu-page a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: #fff url(<? echo $url?>/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 1px 0;
}
.menu-page a:hover,
.menu-page li.state-selected > a {
	background-color: #28d;
  border-color: #06b;
	color: #fff;
	text-decoration: none;
}
.menu-page a:active {
	background-image: url(<? echo $url?>/graphics/button-active.png);
  background-position: left bottom;
}
.menu-page .child-menu {
	display: none;
	margin-left: 15px;
}
.menu-page .menu-closed:before, 
.menu-page .menu-opened:before {
	display: inline-block;
	padding-right: 5px;
}
.menu-page .menu-closed:before {
	content: "\002B";
}
.menu-page .menu-opened:before {
	content: "\002D";
}


/* ***************************************
	HOVER MENU
*************************************** */
.menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;

	overflow: hidden;

	min-width: 170px;
	max-width: 250px;
	border: solid 1px;
	border-color: #888;
	background-color: #fff;
	
	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.menu-hover > li {
	border-bottom: 1px solid #bbb;
}
.menu-hover > li:last-child {
	border-bottom: none;
}
.menu-hover .heading-basic {
	display: block;
}
.menu-hover a {
	padding: 5px 15px;
}
.menu-hover a:hover {
	background: #ddd;
	text-decoration: none;
}
.menu-hover-admin a {
	color: #f00;
}
.menu-hover-admin a:hover {
	color: #fff;
	background-color: #f00;
}


/* ***************************************
	SITE FOOTER
*************************************** */
.menu-footer > li,
.menu-footer > li > a {
	display: inline-block;
	color: #aaa;
}

.menu-footer > li:after {
	content: "\007C";
	padding: 0 5px;
}

.menu-footer-default {
	float: right;
}

.menu-footer-alt {
	float: left;
}


/* ***************************************
	GENERAL MENU
*************************************** */
.menu-general > li,
.menu-general > li > a {
	display: inline-block;
	color: #999;
}

.menu-general > li:after {
	content: "\007C";
	padding: 0 5px;
}


/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
.menu-entity, menu-annotation {
	float: right;
	margin-left: 15px;
	color: #888;
	line-height: 20px;
	height: 20px;
}
.menu-entity > li, .menu-annotation > li {
	margin-left: 15px;
}
.menu-entity > li > a, .menu-annotation > li > a {
	color: #888;
}
.menu-entity > li > a:hover, .menu-annotation > li > a:hover {
	color: #666;
}
.menu-entity > li > a, .menu-annotation > li > a {
	display: block;
}
.menu-entity > li > span, .menu-annotation > li > span {
	vertical-align: baseline;
}


/* ***************************************
	OWNER BLOCK
*************************************** */
.menu-owner-block li a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: #fff url(<? echo $url?>/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 1px 0;
}
.menu-owner-block li a:hover,
.menu-owner-block li.state-selected > a {
	background-color: #28d;
  border-color: #06b;
	color: #fff;
	text-decoration: none;
}
.menu-owner-block li a:active {
	background-image: url(../graphics/button-active.png);
  background-position: left bottom;
}


/* ***************************************
	LONGTEXT
*************************************** */
.menu-longtext {
	float: right;
}


/* ***************************************
	RIVER
*************************************** */
.menu-river {
	float: right;
	margin-left: 15px;
	color: #888;
	line-height: 20px;
	height: 20px;
}
.menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.menu-river > li > a {
	color: #888;
}
.menu-river > li > a {
	display: block;
}
.menu-river > li > span {
	vertical-align: baseline;
}


/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.menu-extras {
	margin-bottom: 15px;
}


/* ***************************************
	WIDGET MENU
*************************************** */
.menu-widget > li {
	position: absolute;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}

.menu-widget > .menu-item-collapse {
  top: 2px;
	left: 5px;
}
.menu-widget > .menu-item-delete {
	right: 5px;
}
.menu-widget > .menu-item-settings {
	right: 25px;
}
/* ***************************************
	Modules
*************************************** */
.module {
	overflow: hidden;
	margin-bottom: 20px;
}


/* Aside */
.module-aside .head {
	border-bottom: 1px solid #ccc;
	
	margin-bottom: 10px;
	padding-bottom: 5px;
}


/* Info */
.module-info > .head {
	background: #eee;
  border: 1px solid #ccc;
	padding: 7px 15px;
	margin-bottom: 10px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.module-info > .head * {
	color: #222;
  padding: 0px;
}
.module-info > .body {
	padding: 0px 15px;
}


/* Popup */
.module-popup {
	background-color: white;
	border: 1px solid #888;
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 10px 15px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.module-popup > .head {
	margin-bottom: 5px;
}
.module-popup > .head * {
  color: #28f;
}


/* Dropdown */
.module-dropdown {
	background-color: #fff;
	border: 5px solid #ccc;
	
	-webkit-border-radius: 3px 0 3px 3px;
	-moz-border-radius: 3px 0 3px 3px;
	border-radius: 3px 0 3px 3px;
	
	display: none;
	
	width: 230px;
	padding: 10px 15px;
	margin-right: 0px;
	z-index:100;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.5);
	
	position:absolute;
	right: 0px;
	top: 100%;
}


/* Featured */
.module-featured {
  background-color: #fff;
	border: 1px solid #28d;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.module-featured > .head {
	padding: 7px 15px;
	background-color: #28d;
  border-bottom: 1px solid #06b;
}
.module-featured > .head * {
	color: #fff;
  padding: 0px;
	text-shadow: 0px 1px 1px #02b;
}
.module-featured > .body {
	padding: 10px 15px;
}


/* ***************************************
	Widgets
*************************************** */
.widgets {
	float: right;
	min-height: 30px;
}
.widget-add-control {
	text-align: right;
	margin: 0px 5px 15px 5px;
}
.widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #ddd;
	border: 2px solid #ccc;
}
.widgets-add-panel li {
	float: left;
	margin: 0px 10px 3px 0px;
	width: 180px;
	padding: 5px 15px;
	background-color: #ccc;
	border: 2px solid #bbb;
	font-weight: bold;
}
.widgets-add-panel li a {
	display: block;
}
.widgets-add-panel .state-available {
	color: #333;
	cursor: pointer;
}
.widgets-add-panel .state-available:hover {
	background-color: #bbb;
}
.widgets-add-panel .state-unavailable {
	color: #888;
}

.module-widget {
	background-color: #ddd;
	padding: 2px;
	margin: 0px 5px 15px 5px;
	position: relative;
}
.module-widget:hover {
	background-color: #ccc;
}
.module-widget > .head {
	background-color: #eee;
	height: 26px;
	overflow: hidden;
}
.module-widget > .head h3 {
	float: left;
	padding: 5px 45px 5px 20px;
	color: #666;
}
.module-widget.state-draggable .widget-handle {
	cursor: move;
}
a.widget-collapse-button {
	color: #bbb;
}
a.widget-collapse-button:hover,
a.widget-collapsed:hover {
	color: #888;
	text-decoration: none;
}
a.widget-collapse-button:before {
	content: "\25BC";
}
a.widget-collapsed:before {
	content: "\25BA";
}
.module-widget > .body {
	background-color: #fff;
	width: 100%;
	overflow: hidden;
	border-top: 2px solid #ddd;
}
.widget-edit {
	display: none;
	width: 92%;
	padding: 4%;
	border-bottom: 2px solid #ddd;
}
.widget-content {
	padding: 10px;
}
.widget-placeholder {
	border: 2px dashed #ddd;
	margin-bottom: 15px;
}

/* ***************************************
	Image Block
*************************************** */
.image-block {
	padding: 5px 0;
}
.image-block .image {
	float: left;
	margin-right: 10px;
}
.image-block .image img {
  border: 2px solid #fff;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.image-block .image-alt {
	float: right;
	margin-left: 5px;
}


/* ***************************************
	List
*************************************** */
.list {
	clear: both;
}
.list > li {
  padding: 5px 0;
	border-bottom: 1px dashed #ccc;
}
.list > li:first-child {
  padding-bottom: 5px;
}
.list > li:last-child {
  padding-top: 5px;
  border-bottom: none;
}

.item .subtext {
	margin-bottom: 5px;
}
.item .content {
	margin: 5px 0;
}


/* ***************************************
	Gallery
*************************************** */
.gallery {
	border: none;
	margin-right: auto;
	margin-left: auto;
}
.gallery td {
	padding: 5px;
}
.gallery-fluid > li {
	float: left;
}
.gallery-users > li {
  margin: 0px 5px 0px 0px;
}
.gallery-users > li img {
  border: 2px solid #fff;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}


/* ***************************************
	Tables
*************************************** */
.table {
	width: 100%;
	border-top: 1px solid #ccc;
}
.table td, .table th {
	padding: 4px 8px;
	border: 1px solid #ccc;
}
.table th {
	background-color: #ddd;
  font-weight: bold;
}
.table tr:nth-child(odd), .table tr.odd {
	background-color: #fff;
}
.table tr:nth-child(even), .table tr.even {
	background-color: #eee;
}
.table-alt {
	width: 100%;
	border-top: 1px solid #ccc;
}
.table-alt td {
	padding: 3px 5px;
	border-bottom: 1px solid #ccc;
}
.table-alt td:first-child {
	width: 200px;
}
.table-alt tr:hover {
	background: #E4E4E4;
}


/* ***************************************
	Owner Block
*************************************** */
.owner-block {
	margin-bottom: 20px;
}


/* ***************************************
	Messages
*************************************** */
.message {
	color: #fff;
	font-weight: bold;
	display: block;
	padding: 5px 15px;
	cursor: pointer;
	opacity: 0.9;
  border: 2px solid #eee;
  background-color: #777;
	text-shadow: 0px 1px 1px #000;
	
	-webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
	
	-webkit-border-radius: 7px;
	-moz-border-radius: 7px;
	border-radius: 7px;
}
.state-success {
	background-color: #092;
}
.state-error {
	background-color: #e10;
}
.state-notice {
	background-color: #06d;
}


/* ***************************************
	River
*************************************** */
.list-river > li {
	border-bottom: 1px dashed #ccc;
}
.river-item .pict {
	margin-right: 20px;
}
.river-timestamp {
	color: #666;
	font-style: italic;
}

.river-attachments,
.river-message,
.river-content {
	border-left: 1px solid #ccc;
	line-height: 1.5em;
	margin: 5px 0px;
	padding-left: 10px;
}
.river-attachments .avatar,
.river-attachments .icon {
	float: left;
}
.river-layout .input-dropdown {
	float: right;
	margin: 10px 0;
}

.river-comments-tab {
	display: block;
	background-color: #eee;
	color: #666;
	width: auto;
	float: right;
	padding: 3px 15px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}

.river-comments {
	margin: 0;
	border-top: none;
}
.river-comments li:first-child {
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
	border-radius: 5px 0 0 0;
}
.river-comments li:last-child {
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius-bottomleft: 0 0 5px 5px;
	border-radius-bottomleft: 0 0 5px 5px;
}
.river-comments li {
	background-color: #eee;
	border-bottom: none;
	padding: 5px 5px 5px 10px;
	margin-bottom: 1px;
}
.river-comments .media {
	padding: 0;
}
.river-more {
	background-color: #eee;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	padding: 5px 10px;
	margin-bottom: 5px;
}

.river-item form {
	background-color: #eee;
	padding: 5px 10px;
	
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;

  height: 35px;
}
.river-item input[type=text] {
	width: 80%;
}
.river-item input[type=submit] {
	margin: 0 0 0 10px;
}


/* **************************************
	Comments (from elgg_view_comments)
************************************** */
.comments {
	margin-top: 30px;
}
.comments > form {
	margin-top: 30px;
}


/* ***************************************
	Image-related
*************************************** */
.photo {
}


/* ***************************************
	Tags
*************************************** */
.tags {
	display: inline;
}
.tags li {
	display: inline;
	margin-right: 5px;
}
.tags li:after {
	content: ",";
}
.tags li:last-child:after {
	content: "";
}
.tagcloud {
	text-align: justify;
}

/***** TOPBAR ******/
.page-topbar {
	background: #444 url(../graphics/topbar.png) repeat-x bottom left;
	border-bottom: 1px solid #000;
	position: relative;
	z-index: 9000;
}
.page-topbar > .inner {
  padding: 8px 0px 6px 0px;
  width: 990px;
  margin: auto;
}


/***** PAGE MESSAGES ******/
.system-messages {
	position: fixed;
	top: 40px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.system-messages li {
	margin-top: 10px;
}
.system-messages li p {
	margin: 0;
}




/***** PAGE BODY LAYOUT ******/
.layout {
	min-height: 360px;
}
.layout-one-sidebar {
	background: transparent url(../graphics/sidebar.png) repeat-y right top;
}
.layout-two-sidebar {
	background: transparent url(../graphics/sidebar-double.png) repeat-y right top;
}
.layout-error {
	margin-top: 20px;
}
.sidebar {
	position: relative;
	padding: 20px 15px;
	float: right;
	width: 200px;
	margin: 0;
}
.sidebar-alt {
	position: relative;
	padding: 20px 15px;
	float: left;
	width: 150px;
	margin: 0;
}
.main > .head {
	margin-bottom: 10px;
}


/***** PAGE FOOTER ******/
.page-footer {
	position: relative;
}
.page-footer {
	background: #222 url(../graphics/footer.png) repeat-x left top;
	border-top: 1px solid #333;
	color: #aaa;
	text-shadow: 0px 1px 1px #000;
  min-height: 100px;
}
.page-footer a {
	color: #888;
  text-decoration: none;
}
.page-footer a:hover {
	color: #eee;
}
/* ***************************************
	MISC
*************************************** */
#login-dropdown {
	position: absolute;
	top: 35px;
	right: 0;
	z-index: 100;
}


/* ***************************************
	AVATAR UPLOADING & CROPPING
*************************************** */

#current-user-avatar {
	border-right:1px solid #ccc;
}
#avatar-croppingtool {
	border-top: 1px solid #ccc;
}
#user-avatar-cropper {
	float: left;
}
#user-avatar-preview {
	float: left;
	position: relative;
	overflow: hidden;
	width: 100px;
	height: 100px;
}


/* ***************************************
	FRIENDS COLLECTIONS
*************************************** */

#friends_collections_accordian li {
	color: #666;
}
#friends_collections_accordian li h2 {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	/*background: none repeat scroll 0 0 #4690D6;*/

	background: #fff url(../graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 10px 0;

	color: #05d;
	cursor: pointer;
	font-size: 1.2em;
}
#friends_collections_accordian li h2:hover {
	background-color: #28d;
  border-color: #06b;
	color: #fff;
}
#friends_collections_accordian .friends_collections_controls {
	float: right;
	font-size: 70%;
}
#friends_collections_accordian .friends-picker-main-wrapper {
	/*background: none repeat scroll 0 0 white;*/
	display: none;
	padding: 0;
}

.clearfloat { 
	clear: both;
}

.hidden {
	display: none;
}

.centered {
	margin: 0 auto;
}

.center {
	text-align: center;
}

.float {
	float: left;
}

.float-alt {
	float: right;
}

.link {
	cursor: pointer;
}

.discover .discoverable {
	display: none;
}

.discover:hover .discoverable {
	display: block;
}

.transition:hover {
	opacity: .7;
}

/* ***************************************
	BORDERS AND SEPARATORS
*************************************** */
.border-plain {
	border: 1px solid #eeeeee;
}
.border-transition {
	border: 1px solid #eeeeee;
}
.divide-top {
	border-top: 1px solid #CCCCCC;
}
.divide-bottom {
	border-bottom: 1px solid #CCCCCC;
}
.divide-left {
	border-left: 1px solid #CCCCCC;
}
.divide-right {
	border-right: 1px solid #CCCCCC;
}




.icon-report-this {
	background: url(http://localhost/elgg/mod/reportedcontent/graphics/icon_reportthis.gif) no-repeat left top;
}
