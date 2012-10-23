<?
$title = $this->config->item('title');
$heading = $this->config->item('heading');
$fields_menu = $this->config->item('fields_menu');
$fields_menu_uri = $this->config->item('fields_menu_uri');
$this->load->helper('url');
$url = base_url();
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Meta -->
	<meta charset="utf-8" />
	<meta name="description" content="<?=$title?>" />

	<!-- Icon -->
    <link rel="SHORTCUT ICON" href="../graphics/favicon.ico">
        
	<!-- Title -->
	<title><?=$title?></title>

	<!-- CSS -->
	<link media="all" rel="stylesheet" type="text/css" href="<?=$url?>/css/styles.php" />
</head>

<script type="text/javascript"> 
	var s=5; 
	var t=false; 
	function unafuncion(id){ 
		return document.getElementById(id); 
	} 
	function startTemporizador(){ 
		if(t) { 
			unafuncion('capa1').style.display = 'none';
		}
		else { 
			s--; 
			if(s==0) { 
				t=true; 
			} 
			contar_tc=setTimeout('startTemporizador()',1000); 
		} 
	} 
</script> 
<body onload="startTemporizador();">


	<div class="page page-default">
    <? if (isset($mensaje)) {
    	echo "<div id='capa1' class='page-messages'>";
		echo "<ul class='system-messages'><li class='hidden'></li>";
		echo "<li class='message state-success'><p>";
		echo $mensaje;
		echo "</p></li></ul></div>";
	} ?>
	<div class="page-header">
		<div class="inner">

			<h1>
            	<a class="heading-site" href=""><?=$heading?></a>
            </h1>
            <? if($session_ok) {?>
				<ul class="menu menu-site menu-site-default clearfix">
            	<li class="menu-item <? if ($field_selected == 0) echo "state-selected"?>"><a href="<? echo $url."index.php/".$fields_menu_uri[0]?>"><?=$fields_menu[0]?></a></li>
                <li class="menu-item <? if ($field_selected == 1) echo "state-selected"?>"><a href="<? echo $url."index.php/".$fields_menu_uri[1];?>"><?=$fields_menu[1]?></a></li>
                <li class="menu-item <? if ($field_selected == 2) echo "state-selected"?>"><a href="<? echo $url."index.php/".$fields_menu_uri[2];?>"><?=$fields_menu[2]?></a></li>
                <li class="menu-item <? if ($field_selected == 3) echo "state-selected"?>"><a href="<? echo $url."index.php/".$fields_menu_uri[3];?>"><?=$fields_menu[3]?></a></li>
                <li class="menu-item <? if ($field_selected == 4) echo "state-selected"?>"><a href="<? echo $url."index.php/".$fields_menu_uri[4];?>"><?=$fields_menu[4]?></a></li>
                <!--<li class="more"><a href="http://localhost/elgg/activity#">More</a>
                	<ul class="menu menu-site menu-site-more">
                    	<li class="menu-item-members"><a href="http://localhost/elgg/members">Members</a></li>
                        <li class="menu-item-pages"><a href="http://localhost/elgg/pages/all">Pages</a></li>
                        <li class="menu-item-thewire"><a href="http://localhost/elgg/thewire/all">The Wire</a></li>
                    </ul>
                </li>-->
            </ul>
			<div class="search logout-header">
                <a class="logout-button" href="<? echo $url;?>/index.php/logout">Logout</a>
            </div>
            <? } ?>
		</div>
	</div>
    <div class="page-body">
        <div class="inner">
