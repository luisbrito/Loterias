<?
header('Content-Type: text/css');
?>


/* ***************************************
	GRID
*************************************** */
.elgg-col {
	float: left;
}
.elgg-col-1of1 {
	float: none;
}
.elgg-col-1of2 {
	width: 50%;
}
.elgg-col-1of3 {
	width: 33.33%;
}
.elgg-col-2of3 {
	width: 66.66%;
}
.elgg-col-1of4 {
	width: 25%;
}
.elgg-col-3of4 {
	width: 75%;
}
.elgg-col-1of5 {
	width: 20%;
}
.elgg-col-2of5 {
	width: 40%;
}
.elgg-col-3of5 {
	width: 60%;
}
.elgg-col-4of5 {
	width: 80%;
}
.elgg-col-1of6 {
	width: 16.66%;
}
.elgg-col-5of6 {
	width: 83.33%;
}

/* ***************************************
	Typography
*************************************** */
body {
	font-size: 80%;
	line-height: 1.5em;
	font-family: "Trebuchet MS", Arial, Tahoma, Verdana, sans-serif;
  color: #000;
}

a {
  color: #DD7300;
}

a:hover,
a.selected { 	color: #C06400;
	text-decoration: underline;
}

p {
	margin-bottom: 15px;
}

p:last-child {
	margin-bottom: 0;
}

pre, code {
	font-family: Monaco, "Courier New", Courier, monospace;
	
	background:#ffb;
	color:#000;
	overflow:auto;

	overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

	white-space: pre-wrap;
	word-wrap: break-word; /* IE 5.5-7 */
	
}

pre {
	padding:5px 15px;
	margin:0px 0 15px 0;
	line-height:1.2em;
}

code {
	padding:2px 3px;
}

.elgg-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

blockquote {
	line-height: 1.3em;
	padding:5px 15px;
	margin:0px 0 15px 0;
	background:#ffb;
	border:none;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
	color: #FF9E22;
  line-height: 1.1em;
  padding-bottom: 5px;
}

h1 { font-size: 1.6em; }
h2 { font-size: 1.5em; }
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

.elgg-heading-site, .elgg-heading-site:hover {
  display: inline-block;
	font-size: 2em;
  font-weight: normal;
  font-family: Calibri, Arial;
	line-height: 1.5em;
  letter-spacing: 2px;
	color: #fff;
	text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	text-decoration: none;
  <!-- background: transparent url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/abplogo.png) no-repeat 0px 15px;-->
  padding: 0px 15px 10px 65px;
  margin: 10px;
  margin-top: 0px;
}

.elgg-heading-site:hover {
	text-shadow: 0px 0px 10px #fff;
  <!-- background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/abplogo-hover.png); -->
}

.elgg-heading-main {
	float: left;
	max-width: 530px;
	margin-right: 10px;

}
.elgg-heading-basic {
	color: #A74300;
	font-size: 1.2em;
	font-weight: bold;
}

.elgg-subtext {
	color: #666;
	line-height: 1.2em;
	font-style: italic;
}

.elgg-text-help {
	display: block;
	font-style: italic;
}

.elgg-quiet {
	color: #666;
}

.elgg-loud {
	color: #0054A7;
}


/* ***************************************
	USER INPUT DISPLAY RESET
*************************************** */
.elgg-output {
	margin-top: 10px;
}

.elgg-output dt { font-weight: bold }
.elgg-output dd { margin: 0 0 1em 1em }

.elgg-output ul, .elgg-output ol {
	margin: 0 1.5em 1.5em 0;
	padding-left: 1.5em;
}
.elgg-output ul {
	list-style-type: disc;
}
.elgg-output ol {
	list-style-type: decimal;
}
.elgg-output table {
	border: 1px solid #ccc;
}
.elgg-output table td {
	border: 1px solid #ccc;
	padding: 3px 5px;
}
.elgg-output img {
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
.elgg-form-alt > fieldset > .elgg-foot {
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
	border-color: #FF8F00;
	color:#FF8F00;

	-webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
}

textarea {
	height: 200px;
}


.elgg-longtext-control {
	float: right;
	margin-left: 14px;
	font-size: 80%;
	cursor: pointer;
}


.elgg-input-access {
	margin:5px 0 0 0;
}

input[type="checkbox"],
input[type="radio"] {
	margin:0 3px 0 0;
	padding:0;
	border:none;
	width:auto;
}
.elgg-input-radio,
.elgg-input-checkbox,
.elgg-input-checkboxes.elgg-horizontal li,
.elgg-input-radios.elgg-horizontal li {
	display: inline;
	padding-right: 10px;
}

.elgg-form-login, .elgg-form-account {
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
	background: url("http://egasmoniz.dia.fi.upm.es/elgg/_graphics/friendspicker.png") no-repeat left top;
}
.friends-picker-navigation-r {
	background: url("http://egasmoniz.dia.fi.upm.es/elgg/_graphics/friendspicker.png") no-repeat -60px top;
}
.friends-picker-navigation-l:hover {
	background: url("http://egasmoniz.dia.fi.upm.es/elgg/_graphics/friendspicker.png") no-repeat left -44px;
}
.friends-picker-navigation-r:hover {
	background: url("http://egasmoniz.dia.fi.upm.es/elgg/_graphics/friendspicker.png") no-repeat -60px -44px;
}
.friendspicker-savebuttons .elgg-button-submit,
.friendspicker-savebuttons .elgg-button-cancel {
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
.elgg-autocomplete-item .elgg-body {
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
.elgg-user-picker-list li:first-child {
	border-top: 1px dotted #ccc;
	margin-top: 5px;
}
.elgg-user-picker-list > li {
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
.elgg-button,
.elgg-button:hover {
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
	background: #fff url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/button.png) repeat-x left top;
}

.elgg-button:hover {
  border-color: #666;
	background-color: #ddd;
}

.elgg-button:active {
	background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/button-active.png);
  background-position: left bottom;

	-webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
}

.elgg-button.elgg-state-disabled,
.elgg-button.elgg-state-disabled:hover {
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
.elgg-button-submit, 
.elgg-button-submit:hover {
	color: #fff;
	text-shadow: 0px 1px 1px #000;
	text-decoration: none;
  border-color: #664100;
	background-color: #FF8F00;
}

.elgg-button-submit:hover {
  border-color: #664100;
	background-color: #FF8F00;
}


/* Cancel ********************/
.elgg-button-cancel, 
.elgg-button-cancel:hover {
	color: #fff;
	text-shadow: 0px 1px 1px #000;
	text-decoration: none;
	border-color: #222;
	background-color: #666;
}

.elgg-button-cancel:hover {
  border-color: #000;
	background-color: #444;
}


/* Delete ********************/
.elgg-button-delete,
.elgg-button-delete:hover {
	color: #fff;
	text-shadow: 0px 1px 1px #000;
	text-decoration: none;
	border-color: #800;
	background-color: #d22;
}

.elgg-button-delete:hover {
  border-color: #600;
	background-color: #b00;
}


/* Special ********************/
.elgg-button-special,
.elgg-button-special:hover {
	color: #fff;
	text-shadow: 0px 1px 1px #000;
	text-decoration: none;
	border-color: #080;
	background-color: #2d3;
}

.elgg-button-special:hover {
  border-color: #060;
	background-color: #0c1;
}


/* Dropdown ********************/
.elgg-button-dropdown,
.elgg-button-dropdown:hover,
.elgg-button-dropdown.elgg-state-active {
  border: 0;
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size: smaller;
}

.elgg-button-dropdown.elgg-state-active {
	background: #ccc url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/button-active.png) repeat-x left bottom;
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

.elgg-icon {
	background: transparent url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/sprites.png) no-repeat left;
	width: 18px;
	height: 18px;
	margin: 0 2px;
}
.elgg-icon-arrow-left {
	background-position: 0 -0px;
}
.elgg-icon-arrow-right {
	background-position: 0 -18px;
}
.elgg-icon-arrow-two-head {
	background-position: 0 -36px;
}
.elgg-icon-attention:hover {
	background-position: 0 -54px;
}
.elgg-icon-attention {
	background-position: 0 -72px;
}
.elgg-icon-calendar {
	background-position: 0 -90px;
}
.elgg-icon-cell-phone {
	background-position: 0 -108px;
}
.elgg-icon-checkmark:hover {
	background-position: 0 -126px;
}
.elgg-icon-checkmark {
	background-position: 0 -144px;
}
.elgg-icon-clip:hover {
	background-position: 0 -162px;
}
.elgg-icon-clip {
	background-position: 0 -180px;
}
.elgg-icon-cursor-drag-arrow {
	background-position: 0 -198px;
}
.elgg-icon-delete-alt:hover {
	background-position: 0 -216px;
}
.elgg-icon-delete-alt {
	background-position: 0 -234px;
}
.elgg-icon-delete:hover {
	background-position: 0 -252px;
}
.elgg-icon-delete {
	background-position: 0 -270px;
}
.elgg-icon-download:hover {
	background-position: 0 -288px;
}
.elgg-icon-download {
	background-position: 0 -306px;
}
.elgg-icon-eye {
	background-position: 0 -324px;
}
.elgg-icon-facebook {
	background-position: 0 -342px;
}
.elgg-icon-grid:hover {
	background-position: 0 -360px;
}
.elgg-icon-grid {
	background-position: 0 -378px;
}
.elgg-icon-home:hover {
	background-position: 0 -414px;
	/*background-position: 0 -396px;*/
}
.elgg-icon-home {
	background-position: 0 -414px;
}
.elgg-icon-hover-menu:hover {
	background-position: 0 -432px;
}
.elgg-icon-hover-menu {
	background-position: 0 -450px;
}
.elgg-icon-info:hover {
	background-position: 0 -468px;
}
.elgg-icon-info {
	background-position: 0 -486px;
}
.elgg-icon-link:hover {
	background-position: 0 -504px;
}
.elgg-icon-link {
	background-position: 0 -522px;
}
.elgg-icon-list {
	background-position: 0 -540px;
}
.elgg-icon-lock-closed {
	background-position: 0 -558px;
}
.elgg-icon-lock-open {
	background-position: 0 -576px;
}
.elgg-icon-mail-alt:hover {
	background-position: 0 -594px;
}
.elgg-icon-mail-alt {
	background-position: 0 -612px;
}
.elgg-icon-mail:hover {
	background-position: 0 -630px;
}
.elgg-icon-mail {
	background-position: 0 -648px;
}
.elgg-icon-photo {
	background-position: 0 -666px;
}
.elgg-icon-print-alt {
	background-position: 0 -684px;
}
.elgg-icon-print {
	background-position: 0 -702px;
}
.elgg-icon-push-pin-alt {
	background-position: 0 -720px;
}
.elgg-icon-push-pin {
	background-position: 0 -738px;
}
.elgg-icon-redo {
	background-position: 0 -756px;
}
.elgg-icon-refresh:hover {
	background-position: 0 -774px;
}
.elgg-icon-refresh {
	background-position: 0 -792px;
}
.elgg-icon-round-arrow-left {
	background-position: 0 -810px;
}
.elgg-icon-round-arrow-right {
	background-position: 0 -828px;
}
.elgg-icon-round-checkmark {
	background-position: 0 -846px;
}
.elgg-icon-round-minus {
	background-position: 0 -864px;
}
.elgg-icon-round-plus {
	background-position: 0 -882px;
}
.elgg-icon-rss {
	background-position: 0 -900px;
}
.elgg-icon-search-focus {
	background-position: 0 -918px;
}
.elgg-icon-search {
	background-position: 0 -936px;
}
.elgg-icon-settings-alt:hover {
	background-position: 0 -954px;
}
.elgg-icon-settings-alt {
	background-position: 0 -972px;
}
.elgg-icon-settings {
	background-position: 0 -990px;
}
.elgg-icon-share:hover {
	background-position: 0 -1008px;
}
.elgg-icon-share {
	background-position: 0 -1026px;
}
.elgg-icon-shop-cart:hover {
	background-position: 0 -1044px;
}
.elgg-icon-shop-cart {
	background-position: 0 -1062px;
}
.elgg-icon-speech-bubble-alt:hover {
	background-position: 0 -1080px;
}
.elgg-icon-speech-bubble-alt {
	background-position: 0 -1098px;
}
.elgg-icon-speech-bubble:hover {
	background-position: 0 -1116px;
}
.elgg-icon-speech-bubble {
	background-position: 0 -1134px;
}
.elgg-icon-star-alt {
	background-position: 0 -1152px;
}
.elgg-icon-star-empty:hover {
	background-position: 0 -1170px;
}
.elgg-icon-star-empty {
	background-position: 0 -1188px;
}
.elgg-icon-star:hover {
	background-position: 0 -1206px;
}
.elgg-icon-star {
	background-position: 0 -1224px;
}
.elgg-icon-tag:hover {
	background-position: 0 -1242px;
}
.elgg-icon-tag {
	background-position: 0 -1260px;
}
.elgg-icon-thumbs-down-alt:hover {
	background-position: 0 -1278px;
}
.elgg-icon-thumbs-down:hover,
.elgg-icon-thumbs-down-alt {
	background-position: 0 -1296px;
}
.elgg-icon-thumbs-down {
	background-position: 0 -1314px;
}
.elgg-icon-thumbs-up-alt:hover {
	background-position: 0 -1332px;
}
.elgg-icon-thumbs-up:hover,
.elgg-icon-thumbs-up-alt {
	background-position: 0 -1350px;
}
.elgg-icon-thumbs-up {
	background-position: 0 -1368px;
}
.elgg-icon-trash {
	background-position: 0 -1386px;
}
.elgg-icon-twitter {
	background-position: 0 -1404px;
}
.elgg-icon-undo {
	background-position: 0 -1422px;
}
.elgg-icon-user:hover {
	background-position: 0 -1440px;
}
.elgg-icon-user {
	background-position: 0 -1458px;
}
.elgg-icon-users:hover {
	background-position: 0 -1476px;
}
.elgg-icon-users {
	background-position: 0 -1494px;
}
.elgg-icon-video {
	background-position: 0 -1512px;
}


.elgg-avatar > .elgg-icon-hover-menu {
	display: none;
	position: absolute;
	right: 0;
	bottom: 0;
	margin: 0;
	cursor: pointer;
}

.elgg-ajax-loader {
	background: white url(http://egasmoniz.dia.fi.upm.es/elgg/_graphics/ajax_loader_bw.gif) no-repeat center center;
	min-height: 33px;
	min-width: 33px;
}


/* ***************************************
	AVATAR ICONS
*************************************** */
.elgg-avatar {
	position: relative;
	display: inline-block;
}
.elgg-avatar > a > img {
	display: block;
}
.elgg-avatar-tiny > a > img {
	width: 25px;
	height: 25px;
	
	-moz-background-clip:  border;
	background-clip:  border;

	-webkit-background-size: 25px;
	-khtml-background-size: 25px;
	-moz-background-size: 25px;
	-o-background-size: 25px;
	background-size: 25px;
}
.elgg-avatar-small > a > img {
	width: 40px;
	height: 40px;
	
	-moz-background-clip:  border;
	background-clip:  border;

	-webkit-background-size: 40px;
	-khtml-background-size: 40px;
	-moz-background-size: 40px;
	-o-background-size: 40px;
	background-size: 40px;
}
.elgg-avatar-medium > a > img {
	width: 100px;
	height: 100px;
}
.elgg-avatar-large > a > img {
	width: 200px;
	height: 200px;
}

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	margin: 0 5px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	padding: 3px 10px;
  background-color: #fff;
	border: 1px solid #DD7300;
	color: #DD7300;
}
.elgg-pagination a:hover {
  background-color: #FF8F00;
  border-color: #B64100;
	color: #fff;

	text-decoration: none;

	-webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
}
.elgg-pagination a:active {
  background-color: #B64100;
  border-color: #C06400;

	-webkit-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
	box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.5);
}
.elgg-pagination .elgg-state-disabled span {
	color: #ccc;
	border-color: #ccc;
}
.elgg-pagination .elgg-state-selected span {
	color: #222;
	border-color: #666;
}


/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 5px;
	border-bottom: 2px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 5px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 5px 15px;
	text-align: center;
	color: #666;
}
.elgg-tabs a:hover {
	color: #B64100;
}
.elgg-tabs .elgg-state-selected {
  border-color: #ccc;
	background-color: #fff;
}
.elgg-tabs .elgg-state-selected a {
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
.elgg-breadcrumbs {
	color: #888;
  margin-bottom: 5px;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after {
	content: "\003E";
	padding: 0 5px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #888;
}
.elgg-breadcrumbs > li > a:hover {
	color: #666;
	text-decoration: underline;
}

.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: 0;
	left: 0;
}


/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	float: left;
}

.elgg-menu-topbar > li {
	float: left;
}

.elgg-menu-topbar > li > a {
  font-size: 13px;
  line-height: 1.5em;
	color: #ddd;
  margin: 0px 15px;
	text-shadow: 0px 1px 1px #000;
}

.elgg-menu-topbar > li > a:hover {
	color: #fff;
	text-decoration: none;
}

.elgg-menu-topbar-alt {
	float: right;
}

.elgg-menu-topbar .elgg-icon {
	vertical-align: middle;
	margin-top: -1px;
}

.elgg-menu-topbar > li > a.elgg-topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}

.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	width: 18px;
	height: 18px;
}


/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	z-index: 1;
  width: 988px;
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

.elgg-menu-site > li > a {
  font-size: 13px;
	font-weight: bold;
  line-height: 1.5em;

	padding: 7px 13px;
	height: 19px;

  border-width: 1px 1px 0px 1px;
  border-style: solid;
  border-color: transparent;
}

.elgg-menu-site > li > a:hover {
	text-decoration: none;
}

.elgg-menu-site-default {
	position: absolute;
	bottom: 0;
	left: 0;
	height: 34px;
}

.elgg-menu-site-default > li {
	float: left;
	margin-right: 1px;
}

.elgg-menu-site-default > li:last-child {
	margin-right: 0;
}

.elgg-menu-site-default > li > a {
	color: #fff;
	text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);
}

.elgg-menu-site > li > ul {
	display: none;
	background-color: #fff;
}

.elgg-menu-site > li:hover > ul {
	display: block;
}

.elgg-menu-site-default > .elgg-state-selected > a,
.elgg-menu-site-default > li:hover > a {
	background: #fff url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/menu-button.png) repeat-x left top;
	color: #B64100;

  border-color: #fff;

	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;

	text-shadow: none;
}

.elgg-menu-site-more {
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

.elgg-menu-site-more > li > a {
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

.elgg-menu-site-more > li > a:hover {
	background-color: #FF8F00;
	border-color: #664100;
	color: #fff;
}

.elgg-menu-site-more > li:last-child > a,
.elgg-menu-site-more > li:last-child > a:hover {
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;
}

.elgg-more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 5px;
}


/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block;
	margin-left: 5px;
}


/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	margin-bottom: 5px;
	border-bottom: 2px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-menu-filter > li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background-color: #eee;
	margin: 0 0 0 5px;
	
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
}
.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 5px 15px;
	text-align: center;
	color: #666;
}
.elgg-menu-filter > li > a:hover {
	color: #B64100;
}
.elgg-menu-filter > .elgg-state-selected {
  border-color: #ccc;
	background-color: #fff;
}
.elgg-menu-filter > .elgg-state-selected > a {
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
.elgg-menu-page {
	margin-bottom: 20px;
}

.elgg-menu-page a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: #fff url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 1px 0;
}
.elgg-menu-page a:hover,
.elgg-menu-page li.elgg-state-selected > a {
	background-color: #DD8B22;
  border-color: #BB7000;
	color: #fff;
	text-decoration: none;
}
.elgg-menu-page a:active {
	background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/button-active.png);
  background-position: left bottom;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, 
.elgg-menu-page .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 5px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}


/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
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
.elgg-menu-hover > li {
	border-bottom: 1px solid #bbb;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 5px 15px;
}
.elgg-menu-hover a:hover {
	background: #ddd;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: #f00;
}
.elgg-menu-hover-admin a:hover {
	color: #fff;
	background-color: #f00;
}


/* ***************************************
	SITE FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
	color: #aaa;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 5px;
}

.elgg-menu-footer-default {
	float: right;
}

.elgg-menu-footer-alt {
	float: left;
}


/* ***************************************
	GENERAL MENU
*************************************** */
.elgg-menu-general > li,
.elgg-menu-general > li > a {
	display: inline-block;
	color: #999;
}

.elgg-menu-general > li:after {
	content: "\007C";
	padding: 0 5px;
}


/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
.elgg-menu-entity, elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	color: #888;
	line-height: 20px;
	height: 20px;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #888;
}
.elgg-menu-entity > li > a:hover, .elgg-menu-annotation > li > a:hover {
	color: #666;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}


/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: #fff url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 1px 0;
}
.elgg-menu-owner-block li a:hover,
.elgg-menu-owner-block li.elgg-state-selected > a {
	background-color: #FF8F00;
  	border-color: #664100;
	color: #fff;
	text-decoration: none;
}
.elgg-menu-owner-block li a:active {
	background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/button-active.png);
  background-position: left bottom;
}


/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}


/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 15px;
	color: #888;
	line-height: 20px;
	height: 20px;
}
.elgg-menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #888;
}
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}


/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 15px;
}


/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}

.elgg-menu-widget > .elgg-menu-item-collapse {
  top: 2px;
	left: 5px;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 5px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 25px;
}
/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}


/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #ccc;
	
	margin-bottom: 10px;
	padding-bottom: 5px;
}


/* Info */
.elgg-module-info > .elgg-head {
	background: #eee;
  border: 1px solid #ccc;
	padding: 7px 15px;
	margin-bottom: 10px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.elgg-module-info > .elgg-head * {
	color: #222;
  padding: 0px;
}
.elgg-module-info > .elgg-body {
	padding: 0px 15px;
}


/* Popup */
.elgg-module-popup {
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
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
  color: #28f;
}


/* Dropdown */
.elgg-module-dropdown {
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
.elgg-module-featured {
  	background-color: #fff;
	border: 1px solid #FF9E22;
	margin-left: 10px;
		
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.elgg-module-featured > .elgg-head {
	padding: 7px 15px;
	background-color: #28d;
  border-bottom: 1px solid #06b;
}
.elgg-module-featured > .elgg-head * {
	color: #fff;
  padding: 0px;
	text-shadow: 0px 1px 1px #02b;
}
.elgg-module-featured > .elgg-body {
	padding: 10px 15px;
}


/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 0px 5px 15px 5px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #ddd;
	border: 2px solid #ccc;
}
.elgg-widgets-add-panel li {
	float: left;
	margin: 0px 10px 3px 0px;
	width: 180px;
	padding: 5px 15px;
	background-color: #ccc;
	border: 2px solid #bbb;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #333;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #bbb;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	background-color: #ddd;
	padding: 2px;
	margin: 0px 5px 15px 5px;
	position: relative;
}
.elgg-module-widget:hover {
	background-color: #ccc;
}
.elgg-module-widget > .elgg-head {
	background-color: #eee;
	height: 26px;
	overflow: hidden;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 5px 45px 5px 20px;
	color: #666;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	color: #bbb;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #888;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	background-color: #fff;
	width: 100%;
	overflow: hidden;
	border-top: 2px solid #ddd;
}
.elgg-widget-edit {
	display: none;
	width: 92%;
	padding: 4%;
	border-bottom: 2px solid #ddd;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 2px dashed #ddd;
	margin-bottom: 15px;
}

/* ***************************************
	Image Block
*************************************** */
.elgg-image-block {
	padding: 5px 0;
}
.elgg-image-block .elgg-image {
	float: left;
	margin-right: 10px;
}
.elgg-image-block .elgg-image img {
  border: 2px solid #fff;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	-webkit-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
}
.elgg-image-block .elgg-image-alt {
	float: right;
	margin-left: 5px;
}


/* ***************************************
	List
*************************************** */
.elgg-list {
	clear: both;
}
.elgg-list > li {
  padding: 5px 0;
	border-bottom: 1px dashed #ccc;
}
.elgg-list > li:first-child {
  padding-bottom: 5px;
}
.elgg-list > li:last-child {
  padding-top: 5px;
  border-bottom: none;
}

.elgg-item .elgg-subtext {
	margin-bottom: 5px;
}
.elgg-item .elgg-content {
	margin: 5px 0;
}


/* ***************************************
	Gallery
*************************************** */
.elgg-gallery {
	border: none;
	margin-right: auto;
	margin-left: auto;
}
.elgg-gallery td {
	padding: 5px;
}
.elgg-gallery-fluid > li {
	float: left;
}
.elgg-gallery-users > li {
  margin: 0px 5px 0px 0px;
}
.elgg-gallery-users > li img {
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
.elgg-table {
	width: 100%;
	border-top: 1px solid #ccc;
}
.elgg-table td, .elgg-table th {
	padding: 4px 8px;
	border: 1px solid #ccc;
}
.elgg-table th {
	background-color: #ddd;
  font-weight: bold;
}
.elgg-table tr:nth-child(odd), .elgg-table tr.odd {
	background-color: #fff;
}
.elgg-table tr:nth-child(even), .elgg-table tr.even {
	background-color: #eee;
}
.elgg-table-alt {
	width: 100%;
	border-top: 1px solid #ccc;
}
.elgg-table-alt td {
	padding: 3px 5px;
	border-bottom: 1px solid #ccc;
}
.elgg-table-alt td:first-child {
	width: 200px;
}
.elgg-table-alt tr:hover {
	background: #E4E4E4;
}


/* ***************************************
	Owner Block
*************************************** */
.elgg-owner-block {
	margin-bottom: 20px;
}


/* ***************************************
	Messages
*************************************** */
.elgg-message {
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
.elgg-state-success {
	background-color: #9C5000;
}
.elgg-state-error {
	background-color: black;
}
.elgg-state-notice {
	background-color: #A04600;
}


/* ***************************************
	River
*************************************** */
.elgg-list-river > li {
	border-bottom: 1px dashed #ccc;
}
.elgg-river-item .elgg-pict {
	margin-right: 20px;
}
.elgg-river-timestamp {
	color: #666;
	font-style: italic;
}

.elgg-river-attachments,
.elgg-river-message,
.elgg-river-content {
	border-left: 1px solid #ccc;
	line-height: 1.5em;
	margin: 5px 0px;
	padding-left: 10px;
	font-size: 0.9em;
}
.elgg-river-attachments .elgg-avatar,
.elgg-river-attachments .elgg-icon {
	float: left;
}
.elgg-river-layout .elgg-input-dropdown {
	float: right;
	margin: 10px 0;
}

.elgg-river-comments-tab {
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

.elgg-river-comments {
	margin: 0;
	border-top: none;
}
.elgg-river-comments li:first-child {
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
	border-radius: 5px 0 0 0;
}
.elgg-river-comments li:last-child {
	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius-bottomleft: 0 0 5px 5px;
	border-radius-bottomleft: 0 0 5px 5px;
}
.elgg-river-comments li {
	background-color: #eee;
	border-bottom: none;
	padding: 5px 5px 5px 10px;
	margin-bottom: 1px;
}
.elgg-river-comments .elgg-media {
	padding: 0;
}
.elgg-river-more {
	background-color: #eee;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	padding: 5px 10px;
	margin-bottom: 5px;
}

.elgg-river-item form {
	background-color: #eee;
	padding: 5px 10px;
	
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;

  height: 35px;
}
.elgg-river-item input[type=text] {
	width: 80%;
}
.elgg-river-item input[type=submit] {
	margin: 0 0 0 10px;
}


/* **************************************
	Comments (from elgg_view_comments)
************************************** */
.elgg-comments {
	margin-top: 30px;
}
.elgg-comments > form {
	margin-top: 30px;
}


/* ***************************************
	Image-related
*************************************** */
.elgg-photo {
}


/* ***************************************
	Tags
*************************************** */
.elgg-tags {
	display: inline;
}
.elgg-tags li {
	display: inline;
	margin-right: 5px;
}
.elgg-tags li:after {
	content: ",";
}
.elgg-tags li:last-child:after {
	content: "";
}
.elgg-tagcloud {
	text-align: justify;
}

body {
	background-color: rgb(206, 206, 206);
}
/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
.elgg-page-default {
	min-width: 990px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	height: 100px;
	margin: 0 auto;
	<!-- background: transparent url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/header-gradients.png) no-repeat top left; -->
}

.elgg-page-body {
	background-color: white;
}

.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	background-color: white;
}

.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 960px;
	margin: 0 auto;
	padding: 10px 15px;
}


/***** TOPBAR ******/
.elgg-page-topbar {
	background: #444 url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/topbar.png) repeat-x bottom left;
	border-bottom: 1px solid #000;
	position: relative;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
  padding: 8px 0px 6px 0px;
  width: 990px;
  margin: auto;
}


/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 40px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;

}
.elgg-system-messages li p {
	margin: 0;
}


/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
	background: #E46C0B url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/header-orange.png) repeat-x top left;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}


/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: transparent url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/sidebar.png) repeat-y right top;
}
.elgg-layout-two-sidebar {
	background: transparent url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/sidebar-double.png) repeat-y right top;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 15px;
	float: right;
	width: 200px;
	margin: 0;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 15px;
	float: left;
	width: 150px;
	margin: 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 15px;
	background: transparent url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/border-body.png) repeat-y left top;
}
}
.elgg-main > .elgg-head {
	margin-bottom: 10px;
}


/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	background: #222 url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/footer.png) repeat-x left top;
	border-top: 1px solid #333;
	color: #aaa;
	text-shadow: 0px 1px 1px #000;
  min-height: 100px;
}
.elgg-page-footer a {
	color: #888;
  text-decoration: none;
}
.elgg-page-footer a:hover {
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

	background: #fff url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-light-theme/graphics/button.png) repeat-x left top;
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

.elgg-discover .elgg-discoverable {
	display: none;
}

.elgg-discover:hover .elgg-discoverable {
	display: block;
}

.elgg-transition:hover {
	opacity: .7;
}

/* ***************************************
	BORDERS AND SEPARATORS
*************************************** */
.elgg-border-plain {
	border: 1px solid #eeeeee;
}
.elgg-border-transition {
	border: 1px solid #eeeeee;
}
.elgg-divide-top {
	border-top: 1px solid #CCCCCC;
}
.elgg-divide-bottom {
	border-bottom: 1px solid #CCCCCC;
}
.elgg-divide-left {
	border-left: 1px solid #CCCCCC;
}
.elgg-divide-right {
	border-right: 1px solid #CCCCCC;
}

/* ***************************************
	Spacing (from OOCSS)
*************************************** */
/* Padding */
.pan{padding:0}
.prn, .phn{padding-right:0}
.pln, .phn{padding-left:0}
.ptn, .pvn{padding-top:0}
.pbn, .pvn{padding-bottom:0}

.pas{padding:5px}
.prs, .phs{padding-right:5px}
.pls, .phs{padding-left:5px}
.pts, .pvs{padding-top:5px}
.pbs, .pvs{padding-bottom:5px}

.pam{padding:10px}
.prm, .phm{padding-right:10px}
.plm, .phm{padding-left:10px}
.ptm, .pvm{padding-top:10px}
.pbm, .pvm{padding-bottom:10px}

.pal{padding:20px}
.prl, .phl{padding-right:20px}
.pll, .phl{padding-left:20px}
.ptl, .pvl{padding-top:20px}
.pbl, .pvl{padding-bottom:20px}

/* Margin */
.man{margin:0}
.mrn, .mhn{margin-right:0}
.mln, .mhn{margin-left:0}
.mtn, .mvn{margin-top:0}
.mbn, .mvn{margin-bottom:0}

.mas{margin:5px}
.mrs, .mhs{margin-right:5px}
.mls, .mhs{margin-left:5px}
.mts, .mvs{margin-top:5px}
.mbs, .mvs{margin-bottom:5px}

.mam{margin:10px}
.mrm, .mhm{margin-right:10px}
.mlm, .mhm{margin-left:10px}
.mtm, .mvm{margin-top:10px}
.mbm, .mvm{margin-bottom:10px}

.mal{margin:20px}
.mrl, .mhl{margin-right:20px}
.mll, .mhl{margin-left:20px}
.mtl, .mvl{margin-top:20px}
.mbl, .mvl{margin-bottom:20px}/********************************
The Wire
*********************************/
#thewire-textarea {
	height: 40px;
	padding: 10px;
}
#thewire-characters-remaining {
	text-align: right;
	float: right;
	font-weight: bold;
	color: #222;
}
.thewire-characters-remaining {
	color:#222;
	border:none;
	font-size: 100%;
	font-weight: bold;
	padding:0;
	margin:0;
	text-align: right;
	background: transparent;
}
.thewire-parent {
	margin-left: 40px;
}
/* ***************************************
	Profile
*************************************** */
.profile {
	float: left;
	margin-bottom: 15px;
}
.profile .elgg-inner {
	margin: 0 5px;
	border: 2px solid #ddd;
}
#profile-details {
	padding: 15px;
}


/*** ownerblock ***/
#profile-owner-block {
	width: 200px;
	float: left;
	background-color: #eee;
	padding: 15px;
  border-right: 2px solid #ddd;
}
#profile-owner-block .large {
	margin-bottom: 10px;
}
#profile-owner-block a.elgg-button-action {
	margin-bottom: 5px;
	display: table;
}
.profile-content-menu a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background: #fff url(http://egasmoniz.dia.fi.upm.es/elgg/mod/bright-theme/graphics/button.png) repeat-x left top;
  border: 1px solid #bbb;
	padding: 5px 15px;
	margin: 1px 0;
}
.profile-content-menu a:hover {
	background-color: #28d;
  border-color: #06b;
	color: #fff;
	text-decoration: none;
}
.profile-content-menu a:active {
	background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/bright-theme/graphics/button-active.png);
  background-position: left bottom;
}
.profile-admin-menu {
	display: none;
}
.profile-admin-menu-wrapper {
  margin-top: 10px;
	background-color: #fff;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.profile-admin-menu-wrapper a {
	display: block;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	background-color: #fff;
	padding: 5px 15px;

  color: #f00;
}
.profile-admin-menu-wrapper a:hover {
	color: #000;
}


/*** profile details ***/
#profile-details .odd {
	background-color: #eee;
	
	margin: 0 0 5px;
	padding: 3px 10px;
}
#profile-details .even {
	background-color: transparent;
	
	margin: 0 0 5px;
	padding: 3px 10px;
}
.profile-aboutme-title {
	background-color: #eee;
	
	margin: 0;
	padding: 3px 10px;
}
.profile-aboutme-contents {
	padding: 3px 10px;
}
.profile-banned-user {
	border: 2px solid #f00;
	padding: 5px 10px;
}
/*** Elgg Developer Tools ***/
#developers-iframe {
	width: 100%;
	height: 600px;
	border: none;
}
#developer-settings-form label {
	margin-right: 5px;
}
.elgg-page .jstree-default.jstree-focused {
	background-color: transparent;
}
.developers-log {
	background-color: #EBF5FF;
	border: 1px solid #999;
	color: #666;
	padding: 20px;
}

/* Blog Plugin */

/* force tinymce input height for a more useful editing / blog creation area */
form#blog-post-edit #description_parent #description_ifr {
	height:400px !important;
}
.elgg-icon-bookmark {
	background: transparent url(http://egasmoniz.dia.fi.upm.es/elgg/mod/bookmarks/graphics/bookmark.gif);
}
#dashboard-info {
	border: 2px solid #dedede;
	margin-bottom: 15px;
}
.embed-wrapper {
	width: 730px;
	min-height: 400px;
	margin: 20px 15px;
}
.embed-wrapper h2 {
	color: #333333;
	margin-bottom: 10px;
}
.embed-wrapper .elgg-item {
	cursor: pointer;
}

/* ***************************************
	EMBED TABBED PAGE NAVIGATION
*************************************** */
.embed-wrapper .elgg-tabs a:hover {
	color: #666;
}

.embed-wrapper p {
	color: #333;
}
.embed-item {
	padding-left: 5px;
	padding-right: 5px;
}
.embed-item:hover {
	background-color: #eee;
}
.file-photo {
	text-align: center;
	margin: 15px 0px;
}
.file-gallery-item {
	text-align: center;
	width: 160px;
  margin: 10px;
}
.groups-profile > .elgg-image {
	margin-right: 10px;
}

.groups-stats {
  border: 1px solid #ccc;

	background: #eee;
	padding: 10px 15px;
	margin-top: 10px;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

.groups-profile-fields .odd,
.groups-profile-fields .even {
	background: #eee;
	
	padding: 3px 10px;
	margin-bottom: 5px;
}

.groups-profile-fields .elgg-output {
	margin: 0;
}

#groups-tools > li {
	width: 48%;
	min-height: 200px;
	margin-bottom: 20px;
}

#groups-tools > li:nth-child(odd) {
	margin-right: 4%;
}

.groups-widget-viewall {
	float: right;
	font-size: 90%;
}

.groups-latest-reply {
}

/* ***************************************
	Likes
*************************************** */
.elgg-likes {
	width: 345px;
	position: absolute;
}

.elgg-menu .elgg-menu-item-likes-count {
	margin-left: 3px;
}

.messageboard-input {
	height: 100px;
}

.messages-container {
	min-height: 200px;
}
.message.unread a {
	color: #f00;
}
.messages-buttonbank {
	text-align: right;
}
.messages-buttonbank input {
	margin-left: 10px;
}


/*** message metadata ***/
.messages-owner {
	float: left;
	width: 20%;
	margin-right: 2%;
}
.messages-subject {
	float: left;
	width: 55%;
	margin-right: 2%;
}
.messages-timestamp {
	float: left;
	width: 14%;
	margin-right: 2%;
}
.messages-delete {
	float: left;
	width: 5%;
}


/*** topbar icon ***/
.messages-new {
	color: #fff;
	background-color: #f00;
	
	-webkit-border-radius: 10px; 
	-moz-border-radius: 10px;
	border-radius: 10px;
	
	-webkit-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.5);
	
	position: absolute;
	text-align: center;
	top: -5px;
	left: 25px;
	min-width: 18px;
	height: 18px;
	font-size: 11px;
	font-weight: bold;
}

#notificationstable td.namefield {
	width:250px;
	text-align: left;
	vertical-align: middle;
}
#notificationstable td.namefield p {
	margin:0;
	vertical-align: middle;
	line-height: 1.1em;
	padding:5px 0 5px 0;
}
#notificationstable td.namefield p.namefieldlink {
	margin:5px 0 0 0;
}
#notificationstable td.namefield a img {
	float:left;
	width:25px;
	height:25px; 
	margin:5px 10px 5px 5px;
}
#notificationstable td.emailtogglefield,
#notificationstable td.smstogglefield {
	width:50px;
	text-align: center;
	vertical-align: middle;
}
#notificationstable td.spacercolumn {
	width:30px;
}
#notificationstable td {
	border-bottom: 1px solid silver;
}
#notificationstable td.emailtogglefield input {
	margin-right:36px;
	margin-top:5px;
}
#notificationstable td.emailtogglefield a {
	width:46px;
	height:24px;
	cursor: pointer;
	display: block;
	outline: none;
}
#notificationstable td.sitetogglefield {
	width:50px;
	text-align: center;
	vertical-align: middle;
}
#notificationstable td.sitetogglefield input {
	margin-right:36px;
	margin-top:5px;
}
#notificationstable td.sitetogglefield a {
	width:46px;
	height:24px;
	cursor: pointer;
	display: block;
	outline: none;
}
#notificationstable td.emailtogglefield a.emailtoggleOff {
	background: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/notifications/graphics/icon_notifications_email.gif) no-repeat right 2px;
}
#notificationstable td.emailtogglefield a.emailtoggleOn {
	background: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/notifications/graphics/icon_notifications_email.gif) no-repeat right -36px;
}
#notificationstable td.sitetogglefield a.sitetoggleOff {
	background: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/notifications/graphics/icon_notifications_site.gif) no-repeat right 2px;
}
#notificationstable td.sitetogglefield a.sitetoggleOn {
	background: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/notifications/graphics/icon_notifications_site.gif) no-repeat right -37px;
}
.notification_friends,
.notification_personal,
.notifications_per_user {
	margin-bottom: 25px;
}




.pages-nav.treeview ul {
	background-color: transparent;
}

.pages-nav.treeview a.selected {
	color: #555555;
}

.pages-nav.treeview .hover {
	color: #0054a7;
}/* Reported Content */
.elgg-icon-report-this {
	background: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/reportedcontent/graphics/icon_reportthis.gif) no-repeat left top;
}

/**********************************
Search plugin
***********************************/
.elgg-search-header {
	bottom: 5px;
	position: absolute;
	right: 5px;
  z-index: 1;
}
.elgg-search input[type=submit] {
	display: none;
}
.elgg-search input[type=text] {
	width: 225px;
	height: 25px;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	border: 1px solid rgba(0, 0, 0, 0.25);
	color: #fff;
  font-size: 13px;
	font-weight: bold;
  line-height: 1.5em;
	padding: 3px 15px;
	background-color: rgba(0, 0, 0, 0.25);
}
.elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
	background-color: #fff;
	color: #FF8F00;
}

.search-list li {
	padding: 5px 0 0;
}
.search-heading-category {
	margin-top: 20px;
	color: #666;
}

.search-highlight {
	background-color: #bbdaf7;
}
.search-highlight-color1 {
	background-color: #bbdaf7;
}
.search-highlight-color2 {
	background-color: #A0FFFF;
}
.search-highlight-color3 {
	background-color: #FDFFC3;
}
.search-highlight-color4 {
	background-color: #ccc;
}
.search-highlight-color5 {
	background-color: #4690d6;
}
/* TinyMCE */
.elgg-page .mceEditor table.mceLayout {
	border: 1px solid #CCC;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.elgg-page table.mceLayout tr.mceFirst td.mceToolbar,
.elgg-page table.mceLayout tr.mceLast td.mceStatusbar {
	border-width: 0px;
}
.mceButton {
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.mceLast .mceStatusbar {
	padding-left: 5px;
}
/* ZAudio */
.zaudio {
	margin: 10px 0;
}
.course-title {
	color: #CD9928;
}

.course-annotation {
	color: #666666;
	font-size: 100%;
	font-style: italic;
	line-height: 1.2em;
}

.course-resources {
	margin-left: 10px;
}

.course-stats {
	width: 550px;
	background: #eeeeee;
	padding: 5px;
	margin-top: 10px;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

.course-classmates {
 margin: 8px 0 5px;
}

.whiteboard-stats {
	width: 400px;
	background: #eeeeee;
	padding: 5px;
	margin-top: 10px;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

.whiteboard-loading {
	display: none;
}

.whiteboard-ajax-loader {
	width: 50px;
}

.whiteboard-countdown {
	font-weight:bold;
}

.whiteboard-start-button {
	width: 100px;
	display: inline-block;
}

.whiteboard-notices {
	width: 230px;
	text-align: right;
	color: red;
	display: inline-block;
}

.whiteboard-close {
    background: url('http://egasmoniz.dia.fi.upm.es/elgg/vendors/jquery/fancybox/fancybox.png') repeat scroll -40px 0 transparent;
    cursor: pointer;
    display: inline-block;
    height: 30px;
    //position: absolute;
    //right: 0px;
    //top: -0px;
    width: 30px;
    z-index: 1103;
}

.whiteboard-previous {
    background: url('http://egasmoniz.dia.fi.upm.es/elgg/vendors/jquery/fancybox/fancybox.png') repeat scroll -40px -30px transparent;
    cursor: pointer;
    display: inline-block;
    height: 30px;
    //position: absolute;
    //right: 0px;
    //top: -0px;
    width: 30px;
    z-index: 1103;
}

.whiteboard-next {
    background: url('http://egasmoniz.dia.fi.upm.es/elgg/vendors/jquery/fancybox/fancybox.png') repeat scroll -40px -60px transparent;
    cursor: pointer;
    display: inline-block;
    height: 30px;
    //position: absolute;
    //right: 0px;
    //top: -0px;
    width: 30px;
    z-index: 1103;
}

.whiteboard-no-next-no-previous {
    background: url('http://egasmoniz.dia.fi.upm.es/elgg/vendors/jquery/fancybox/fancybox.png') repeat scroll -40px -90px transparent;
    cursor: default;
    display: inline-block;
    height: 30px;
    //position: absolute;
    //right: 0px;
    //top: -0px;
    width: 30px;
    z-index: 1103;
}

.whiteboard-layer {
	width: 100%;
	height: 100%;
}

.whiteboard-head {
	text-align: right;
}

.whiteboard-content {
	width: 99.5%;
	height: 100%;
}

.whiteboard-separator {
	width: 10px;
}

.whiteboard-right-banner {
	vertical-align: bottom;
	width: 260px;
}

.whiteboard-foot {
	height: 35px;
}

.whiteboard-questions-container {
	height: 100%;
	overflow-x: hidden; 
	overflow-y: auto;
}

.whiteboard-input-text-answer, .whiteboard-textarea-answer {
	width: 50%;
}

.whiteboard-assignments-buttons {
    padding-top: 10px;
    padding-left: 340px;
}

.whiteboard-page-buttons {
	display: none;
	width: 80%;
}

.whiteboard-page-number  {
	display: none;
	width: 20%;
	text-align: right;
}

.whiteboard-chat-wrapper {
	width: 260px;
	height: 385px;
	border: 1px solid #CCCCCC;
	border-radius: 5px 5px 5px 5px;
}

.whiteboard-chat-box {
	width: 260px;
	height: 300px;
	overflow-y: auto;
}

.whiteboard-chat-system-bar {
	height: 20px;
	text-align: right;
	font-size: 10px;
	margin-right: 5px;
}

.whiteboard-chat-message {
	width: 260px;
	padding: 2px;
}

.whiteboard-chat-usermsg {
	width: 256px;
	height: 36px;
}

.whiteboard-chat-header {
	height: 25px;
	background-color: #EEEEEE;
	border-bottom: 1px solid #CCCCCC;
}

.whiteboard-chat-header-alert {
	height: 25px;
	background-color: #DD7300;
	border-bottom: 1px solid #CCCCCC;
}

.whiteboard-chat-header-title {
	color: #666666;
    float: left;
    padding: 4px 45px 0 20px;
    font-family: Verdana,Geneva,sans-serif;
}

.whiteboard-chat-header-title-alert {
	color: #FFFFFF;
    float: left;
    padding: 4px 45px 0 20px;
    font-family: Verdana,Geneva,sans-serif;
}

.whiteboard-chat-start-button {
	position: relative;
	left: 90px;
	top: 140px;
}#popup_container {
	font-family: Arial, sans-serif;
	font-size: 12px;
	min-width: 300px; /* Dialog will be no smaller than this */
	max-width: 600px; /* Dialog will wrap after this width */
	background: #FFF;
	border: solid 5px #999;
	color: #000;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

#popup_title {
	font-size: 14px;
	font-weight: bold;
	text-align: center;
	line-height: 1.75em;
	color: #666;
	background: #CCC url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-whiteboard/graphics/title.gif) top repeat-x;
	//border: solid 1px #FFF;
	border-bottom: solid 1px #999;
	cursor: default;
	padding: 0em;
	margin: 0em;
}

#popup_content {
	background: 16px 16px no-repeat url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-whiteboard/graphics/info.gif);
	padding: 1em 1.75em;
	margin: 0em;
}

#popup_content.alert {
	background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-whiteboard/graphics/info.gif);
}

#popup_content.confirm {
	background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-whiteboard/graphics/important.gif);
}

#popup_content.prompt {
	background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-whiteboard/graphics/help.gif);
}

#popup_message {
	padding-left: 48px;
}

#popup_panel {
	text-align: center;
	margin: 1em 0em 0em 1em;
}

#popup_prompt {
	margin: .5em 0em;
}

#popup_ok, #popup_cancel {
	width: 100px;
}body{font-family:Verdana, Geneva, sans-serif; font-size:12px}/* CSS Document */

label.error{color:#C03;text-decoration:underline;}

#academicBackground_controls div, #academicBackground_controls div input {
    float:left;    
    margin-right: 10px;
}

#main_table td{padding:3px; font-weight: bold; /*text-align:center*/}

.general_table td{padding:3px;}

.general_table span{font-weight: bold}

td .name{width:25%}
td .field{width:75%}

.hidden {display:none}

.line_under { border-bottom: thin solid #fd9a32; font-weight:bold; height:25px}
.line_left { border-left: thin solid #fd9a32}

#listing_table td {height:20px}

.alternating {
	background-color:#fdf0e3
}

#main_table td {
	font-wight:bold;
}

.subtitle{
	font-weight: bold;
    color: #181a2f;
    text-align:center;
    /*background-color: #fd9a32;*/
    background-color: #fdf0e3;
}

.descriptor{
	font-weight: bold;
}

.mobility_bullet{
	background: no-repeat center url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-mobility-lite/img/orange-bullet.gif);
    width:15px;
	height:15px;
}
.mobility_menu_lower_div{
	vertical-align:top;
}
.mobility_menu{
	border-right: thin solid black;
}.custom_fields_more_info {
	width: 16px;
	height: 16px;
	margin: 0 2px 0 5px;
	display: inline-block;
	vertical-align: top;
	background: transparent url(http://egasmoniz.dia.fi.upm.es/elgg/_graphics/elgg_sprites.png) 0 -486px;
	cursor: pointer;
}
.custom_fields_more_info:hover {
	background-position: 0 -468px;
}

.custom_fields_more_info_text {
	display:none;
}

#custom_fields_more_info_tooltip {
	position:absolute;
	border:1px solid #333333;
	background:#e4ecf5;
	color:#333333;
	padding:5px;
	display:none;
	width: 250px;
	line-height: 1.2em;
	font-size: 90%;
	z-index:20000;
}/* widgets */
#widget_profile_completeness_container {
	border: 1px solid #AAAAAA;
	position: relative;
}

#widget_profile_completeness_progress {
	position: absolute;
	line-height: 20px;
	font-weight: bold;
	width: 100%;
	text-align: center;
}

#widget_profile_completeness_progress_bar {
	background: #00FF00;
	height: 20px;
}

#custom_fields_userdetails.ui-accordion {
	margin-bottom: 10px;
}

#custom_fields_userdetails .ui-accordion-header {
	color: #666666;
	background: #EEEEEE;
	border: 2px solid #DEDEDE;
	cursor: pointer;
	margin-top: 5px;
	padding: 5px;
}

#custom_fields_userdetails .ui-accordion-content {
	border-style: solid;
	border-color: #DEDEDE;
	border-width: 0 2px 2px 2px;
	padding: 5px 5px 0px;
}

#custom_fields_userdetails .ui-accordion-header:hover {
	border-color: #CCCCCC;
}

#custom_fields_userdetails .ui-accordion-header .ui-icon {
	margin-top: 1px;
	background: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-profile-manager/graphics/accordion.png) no-repeat -16px 0;
	width: 16px;
	height: 16px;
	float: left;
}

#custom_fields_userdetails .ui-accordion-header:hover .ui-icon{
	background-position: -32px 0;
}

#custom_fields_userdetails .ui-accordion-header.ui-state-active .ui-icon {
	background-position: 0 0;
}

/* non_editables */
.hidden_non_editable {
	display: none;
}

/* profile type */
.custom_profile_type_description {
	display: none;
}

.datepicker_hidden{
	display: none;
}

/* fix for max-height multi-select drop down*/
.ui-dropdownchecklist-dropcontainer {
	max-height: 150px;
}
/* end fix */

.profile_manager_profile_edit_tab_content,
li.custom_fields_edit_profile_category {
	display: none;
}

/* registration field */
#profile_manager_register_left {
	float: left;
	width: 450px;
}

#profile_manager_register_right {
	float: right;
	width: 450px;
}

#profile_manager_register_right > fieldset {
	margin-top: 10px;
}

/* registration form mandatory fields */

.profile_manager_register_missing {
	border: 1px solid red !important;
}

/* Account Username Change */
.profile-manager-account-change-username.elgg-state-active {
	display: none;
}

#profile_manager_username {
	position: relative;
}

.elgg-icon-profile-manager-loading,
.elgg-icon-profile-manager-valid,
.elgg-icon-profile-manager-invalid {
	position: absolute;
	right: 5px;
	top: 8px;
	display: none;
}

.elgg-icon-profile-manager-loading {
	background-image: url(http://egasmoniz.dia.fi.upm.es/elgg/mod/africabuild-elgg-profile-manager/graphics/loading.gif);
}

.elgg-icon-profile-manager-valid {
	background-position: 0 -126px;
}

.elgg-icon-profile-manager-invalid {

	background-position: 0 -252px;
}

/* End Account Username Change */