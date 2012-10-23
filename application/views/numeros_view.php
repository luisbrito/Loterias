<?
$this->load->helper('url');
$url = base_url();
$fields_menu = $this->config->item('fields_menu');
$fields_menu_uri = $this->config->item('fields_menu_uri');
//$total = 0;
$table = "<table cellpadding='2' cellspacing='2' border='0' id='table' class='sortable'>";
$table .= "<thead><tr><th><h4>ID</h4></th><th><h4>Nombre del sorteo</h4></th><th><h4>Precio del d&eacute;cimo</h4></th>";
$table .="<th><h4>Fecha de celebraci&oacute;n</h4></th><th><h4>Importancia</h4></th><th><h4>D&eacute;bito</h4></th></tr></thead><tbody>";
//$deudas = 0;
foreach ($sorteos as $sorteo){
	$table .= "<tr>";
	$table .= "<td><a href=\"sorteos/ver/$sorteo->idSorteo\">".$sorteo->idSorteo."</a></td>";
	$table .= "<td><a href=\"sorteos/ver/$sorteo->idSorteo\">".$sorteo->nombre."</a></td>";
	$table .= "<td><a href=\"sorteos/ver/$sorteo->idSorteo\">".$sorteo->precioDecimo."</a></td>";
	if (strtotime($sorteo->fecha) < time()) { //Sorteo finalizado
		$table .= "<td><a href=\"sorteos/ver/$sorteo->idSorteo\">".date("d-m-Y", strtotime($sorteo->fecha))."<i style=\"color: red;\"> (Finalizado)</i></a></td>";
	}
	else {//Sorteo no finalizado
		$table .= "<td><a href=\"sorteos/ver/$sorteo->idSorteo\">".date("d-m-Y", strtotime($sorteo->fecha))."</a></td>";
	}
	$table .= "<td><a href=\"sorteos/ver/$sorteo->idSorteo\">".$sorteo->importancia."</a></td>";
	$table .= "<td><a href=\"sorteos/ver/$sorteo->idSorteo\">".number_format($sorteo->debito,2,".",",")." &euro;</a></td>";
	$table .= "</tr>";
}
$table .= "</tbody></table>";
/*				
<table cellpadding="2" cellspacing="2" border="0" id="table" class="sortable">
	<thead>
		<tr>
			<th><h4>ID</h4></th>
			<th><h4>Nombre y apellidos</h4></th>
			<th><h4>DNI</h4></th>
			<th><h4>Tel&eacute;fono</h4></th>
			<th><h4>Debe</h4></th>
		</tr>
	</thead>
	<tbody>

	</tbody>
</table>
*/


?>	
<div class="layout layout-one-sidebar clearfix river-layout">
            
	<div class="sidebar">
		<ul class="menu-page">
        	<h3></h3>
        	<li class="menu-item"><a href="sorteos/insertar">Insertar sorteo</a></li>
        	<li class="menu-item"><a href="sorteos_excel">Descargar en excel</a></li>
        </ul>
		<ul class="menu-page">
        	<h3>Pedidos</h3>
			<li class="menu-item"><a href="numeros/insertar">Insertar n&uacute;meros</a></li>
			<li class="menu-item"><a href="numeros/ver">Ver n&uacute;meros</a></li>
 		</ul>
		<hr />
        <p>Actualmente hay <? echo count($sorteos); ?> sorteos registrados.</p>
	</div>

    <div class="layout layout-one-sidebar clearfix river-layout">
    <div class= "main body">
  		<section id="purchases">
			<header>
				<h1 class="big m-top m-bottom">N&uacute;meros</h1>
			</header>
			<span>Por favor, seleccione un sorteo: </span>
			<div class="content blur">
				<? echo $table; ?>
                <div id="controls">
                    <div id="perpage">
                        <select id ="select" onchange="sorter.size(this.value)">
                        	<option value="5">5</option>
                            <option value="10" selected="selected">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span>Sorteos por p&aacute;gina</span>
                    </div>
                    <div id="text">Mostrando p&aacute;gina <span id="currentpage">1</span> de <span id="pagelimit">varias</span></div>
                    <div class="table-navigation">
                        <img src="<? echo $url;?>/images/table/first.gif" alt="First Page" onclick="sorter.move(-1,true)">
                        <img src="<? echo $url;?>/images/table/previous.gif" alt="First Page" onclick="sorter.move(-1)">
                        <img src="<? echo $url;?>/images/table/next.gif" alt="First Page" onclick="sorter.move(1)">
                        <img src="<? echo $url;?>/images/table/last.gif" alt="Last Page" onclick="sorter.move(1,true)">
                    </div>
                </div>
            </div>
            <!-- <div class="div-right ptm">La suma de las deudas de los clientes es de <b><? echo number_format($total,2,".",","); ?> €</b></div> -->
        </div>
    </section>
</div>
</div>
	<!-- JavaScript -->
	<script type="text/javascript" src="../js/table.js"></script>
	<script type="text/javascript">
	  var sorter = new TINY.table.sorter("sorter");
		sorter.head = "head";
		sorter.asc = "asc";
		sorter.desc = "desc";
		sorter.even = "evenrow";
		sorter.odd = "oddrow";
		sorter.evensel = "evenselected";
		sorter.oddsel = "oddselected";
		sorter.paginate = true;
		sorter.currentid = "currentpage";
		sorter.limitid = "pagelimit";
		sorter.init("table", 0);
		sorter.init("table", 0);
  </script>
  <script type="text/javascript">
	function doNav(url)
	{
	   document.location.href = url;
	}
	</script>
	 
	 
    
 
        