<?
$this->load->helper('url');
$url = base_url();
$fields_menu = $this->config->item('fields_menu');
$fields_menu_uri = $this->config->item('fields_menu_uri');
$total = 0;
$table = "<table cellpadding='2' cellspacing='2' border='0' id='table' class='sortable'>";
$table .= "<thead><tr><th><h4>ID</h4></th><th><h4>Nombre y apellidos</h4></th><th><h4>DNI</h4></th>";
$table .="<th><h4>Tel&eacute;fono</h4></th><th><h4>Debe</h4></th></tr></thead><tbody>";
$deudas = 0;
foreach ($clientes as $cliente){
	if ($cliente->debe > 0) {
		$deudas++;
	}
	$total = $total + $cliente->debe;
	
	$table .= "<tr>";
	$table .= "<td><a href=\"cliente/$cliente->codigoCliente\">".$cliente->codigoCliente."</a></td>";
	$table .= "<td><a href=\"cliente/$cliente->codigoCliente\">".$cliente->nombre."</a></td>";
	$table .= "<td><a href=\"cliente/$cliente->codigoCliente\">".$cliente->dni."</a></td>";
	$table .= "<td><a href=\"cliente/$cliente->codigoCliente\">".$cliente->telefono."</a></td>";
	$table .= "<td><a href=\"cliente/$cliente->codigoCliente\">".number_format($cliente->debe,2,".",",")." &euro;</a></td>";
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
        	<h3>Clientes</h3>
        	<li class="menu-item"><a href="clientes/insertar">Insertar cliente</a></li>
        	<li class="menu-item"><a href="clientes_excel">Descargar en excel</a></li>
        </ul>
		<ul class="menu-page">
        	<h3>Pedidos</h3>
			<li class="menu-item"><a href="pedidos/insertar">Insertar pedido</a></li>
			<li class="menu-item"><a href="pedidos/ver">Ver pedidos</a></li>
 		</ul>
		<hr />
        <p>Actualmente hay <? echo count($clientes); ?> clientes registrados.</p>
		<p>De estos, <? echo $deudas ?> tienen deudas.</p>
	</div>

    <div class="layout layout-one-sidebar clearfix river-layout">
    <div class= "main body">
  		<section id="purchases">
			<header>
				<h1 class="big m-top m-bottom">Tabla de Clientes</h1>
			</header>
			
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
                        <span><? echo htmlspecialchars("Clientes por página") ?></span>
                    </div>
                    <div id="text">Mostrando p&aacute;gina <span id="currentpage"></span> de <span id="pagelimit"></span></div>
                    <div class="table-navigation">
                        <img src="<? echo $url; ?>images/table/first.gif" alt="First Page" onclick="sorter.move(-1,true)">
                        <img src="<? echo $url?>images/table/previous.gif" alt="First Page" onclick="sorter.move(-1)">
                        <img src="<? echo $url?>images/table/next.gif" alt="First Page" onclick="sorter.move(1)">
                        <img src="<? echo $url?>images/table/last.gif" alt="Last Page" onclick="sorter.move(1,true)">
                    </div>
                </div>
            </div>
            <div class="div-right ptm">La suma de las deudas de los clientes es de <b><? echo number_format($total,2,".",","); ?> €</b></div>
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
		sorter.init("table",0);
  </script>
  <script type="text/javascript">
	function doNav(url)
	{
	   document.location.href = url;
	}
	</script>
	 
	 
    
 
        