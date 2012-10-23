<?
header('Content-Type: text/css');
?>
.menu-item:hover, .menu-item-selected {
    background-color: #28D;
    border-color: #06B;
    color: white;
    text-decoration: none;
}
.menu-page a:hover, .menu-page li .state-selected > a {
background-color: #28D;
border-color: #06B;
color: white;
text-decoration: none;
}

.menu-page a {
display: block;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
background: white url(http://localhost/elgg/mod/bright-theme/graphics/button.png) repeat-x left top;
border: 1px solid #BBB;
padding: 5px 15px;
margin: 1px 0;
}

/* @group Table */

.sortable {
    width:100%;
    margin:0 auto 15px;
}
.sortable th {
	text-align:left;
    color:rgb(75, 85, 101);
    border-bottom: 1px solid rgb(198, 213, 225);
}
.sortable th h4 {
	padding:6px 8px 8px
}
.sortable td {padding:4px 6px 6px; border-bottom:1px solid #c6d5e1;}
.sortable .head h4 {background:url(../images/table/sort.gif) 7px center no-repeat; cursor:pointer; padding-left:18px}
.sortable .desc, .sortable .asc {background:rgba(200,200,200,0.7);/*url(../images/table/header-selected-bg.gif)*/}
.sortable .desc h4 {background:url(../images/table/desc.gif) 7px center no-repeat; cursor:pointer; padding-left:18px}
.sortable .asc h4 {background:url(../images/table/asc.gif) 7px  center no-repeat; cursor:pointer; padding-left:18px}
.sortable .head:hover, .sortable .desc:hover, .sortable .asc:hover {color:#fff}
.sortable .evenrow, .sortable .oddrow {}
.sortable .evenrow td {background:white;}
.sortable .oddrow td {background:#EFEFEF;}
.sortable .evenrow td:first-child,
.sortable .oddrow td:first-child {border-left: 1px solid #c6d5e1;}
.sortable .evenrow td:last-child,
.sortable .oddrow td:last-child  {border-right: 1px solid #c6d5e1;}
.sortable td.evenselected {background:#ecf2f6}
.sortable td.oddselected {background:#dce6ee}

#controls {width:100%; margin:0 auto; height:20px}
#perpage {float:left;}
#perpage select {float:left; font-size:11px}
#perpage span {float:left; margin:2px 0 0 5px}
#text {float:right; text-align:right; margin-top:2px;}

.table-navigation {margin: 0 auto; text-align:center; width: 100px;}
.table-nav  { cursor: pointer; display: inline-block; height: 16px; width: 16px; }
.first { background: url('../images/table/first.gif'); }
.previous { background: url('../images/table/previous.gif'); }
.next { background: url('../images/table/next.gif'); }
.last { background: url('../images/table/last.gif'); }

.table-navigation {
    margin: 0 auto;
    text-align: center;
    width: 100px;
}
table tr td a {
    display:block;
    height:100%;
    width:100%;
    color:black;
}

/* end @group */