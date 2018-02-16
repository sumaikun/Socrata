<html lang="en">
<head>
  <title>Informe de control de garantias</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/headboot.css">
    <link rel="stylesheet" href="css/footer.css">	
  <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <script src="https://use.fontawesome.com/ba7765318c.js"></script>
</head>
<style>
	.table-condensed{
	  font-size: 10px;
	}
	#accordion{
		display:none;
	}
	.panel-heading {background-color: red!important}
	
	
</style>

<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"> </script>
<script>
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
$.webshims.formcfg = {
en: {
    dFormat: '-',
    dateSigns: '-',
    patterns: {
        d: "yy-mm-dd"
    }
}
};

</script>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    
   
	
<body>

	<header class="header-basic">

	<div class="header-limiter">

		<h1><a href="index.php">Solución <span>Rest</span></a></h1>

	</div>

</header>

<div class="menu">
	<div class="container">
	
	
		<form action="index.php?method=execute_query"  id="filter_data" method="post">
			<div class="form-group">
				<label>Consulta SOQL:</label>
				<input placeholder="SELECT" style="text-align: center;" class="form-control" id="query" name="query"
				 <?php if(isset($_POST['query'])): ?> value="<?php echo $_POST['query']; ?>" <?php endif ?> >
			</div>
			<input type="hidden" name="type_of_filter" id="type_of_filter">
			<button type="submit" onclick="return filter_html()" class="btn btn-warning">Filtrar</button>
	        <button type="submit" onclick="return filter_excel()" class="btn btn-success">Generar Excel</button>
		</form>
		
		<script>
            
	        function filter_html()
	        {
	          $("#type_of_filter").val(1);
	          return true;
	        }

	        function filter_excel()
	        {
	          $("#type_of_filter").val(2);
	          return true;
	        }

	     </script>
		
		<br>	
	
		<br>
		<div style="max-width:1150px;"  class="table-responsive ocultar_400px">
			<?php require "tableView.php"; ?>
		</div>	
	</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Caja</h4>
      </div>
      <div class="modal-body">
        <div id="ajax-content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
<footer class="footer1">
<div class="container">

<div class="row"><!-- row -->
            
                
</div>
</footer>
<!--header-->

<div class="footer-bottom" style="margin-top:100%">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="copyright">

					Solución Rest

				</div>

			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="design">

					

				</div>

			</div>

		</div>

	</div>

</div>
<script>
		$( document ).ready(function(){
			$('#InformTable').DataTable({"language": {"url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"},"pageLength": 25});
			$('#InformTable').show();
		});	 

</script>

</html>	