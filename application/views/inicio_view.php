<?
$fields_menu = $this->config->item('fields_menu');
$fields_menu_uri = $this->config->item('fields_menu_uri');
?>	
<div class="layout layout-one-sidebar clearfix river-layout">
            
	<div class="sidebar">
		<ul class="menu-page">
        	<h3>Clientes</h3>
        	<li class="menu-item"><a href="clientes/insertar">Insertar cliente</a></li>
            <li class="menu-item"><a href="pedido/insertar">Insertar pedido</a></li>
        	<li class="menu-item"><a href="clientes">Ver clientes</a></li>
		</ul>
		<ul class="menu-page">
        	<h3>Sorteos</h3>
            <li class="menu-item"><a href="sorteos/insertar">Insertar sorteo</a></li>
            <li class="menu-item"><a href="numeros/insertar"><? echo htmlspecialchars("Insertar número"); ?></a></li>
            <li class="menu-item"><a href="sorteos">Ver sorteos</a></li>
 		</ul>
	</div>

    <div class="layout layout-one-sidebar clearfix river-layout">
    <div class= "main body">
    <ul class="breadcrumbs"><li><? echo $fields_menu[$field_selected] ?></li></ul>
    <div>
    <span class="start-options-rigth"><a href="editar_perfil">Editar perfil</a></span><h2>
    <? echo htmlspecialchars("¡Bienvenido ".$session_ok['nombre']."!"); ?>
    </h2>
    </div>
    <hr />
    <p><? echo htmlspecialchars("En esta página puedes ver la información más general de clientes y sorteos.");?></p>
	<ul id="groups-tools" class="elgg-gallery-fluid mtl clearfix">
     	<li class="odd">
     		<div class="elgg-module elgg-module-group elgg-module-info">
     			<div class="elgg-head">
                	<span class="groups-widget-viewall">
     					<a href="clientes">Ver todos</a>
     				</span><h3>Clientes</h3>
                </div>
     			<div class="body">
					<?
					 $num = count($clientes);
					 if ($num == 0) { //No hay clientes con deudas
						echo htmlspecialchars("No hay clientes con deudas"); 
					 }
					 else {	      
						echo "<p>".htmlspecialchars("En la siguiente lista se muestran los $num clientes con más deudas:")."</p>"; 
						 foreach ($clientes as $cliente) {
							echo "<div class='medium-panel'><a href= \"cliente/".$cliente->codigoCliente."\"><b>";
							echo $cliente->nombre."</a></b>.</div> <div class='medium-panel-right'><i>Debe </i>".number_format($cliente->debe,2,".",",")." €</div>";
							//echo "</ol>";
						}
					 }
					 ?>
               </div>
           </div>
		</li>
     <li>
         <div class="elgg-module elgg-module-group elgg-module-info">
            <div class="elgg-head">
                <span class="groups-widget-viewall">
                    <a href="sorteos">Ver todos</a>
                </span>
                <h3>Sorteos</h3>
            </div>
            <div class="body">
            					<?
					 $num = count($sorteos);
					 if ($num == 0) { //No hay clientes con deudas
						echo htmlspecialchars("No hay clientes con deudas"); 
					 }
					 else {	      
						echo htmlspecialchars("En la siguiente lista se muestran los $num sorteos más actuales:"); 
						 foreach ($sorteos as $sorteo) {
							echo "<div class='space-left'><a href=sorteo/".$sorteo->idSorteo."><b>";
							echo $sorteo->nombre."</a></b>. ";
							if (strtotime($sorteo->fecha) < time()) {
								echo "<span style=\"color: red;\" class='notice'>Sorteo finalizado el ".date("d-m-Y", strtotime($sorteo->fecha))."</span>";
							}
							else {
								echo "<span>El sorteo finaliza el ".date("d-m-Y", strtotime($sorteo->fecha))."</span>";
							}
							echo "</div>";
						}
					 }
					 ?>
            </div>
         </div>
     </li>
     </div></div></div>
     
     </ul>

	 
	 
    
 
        