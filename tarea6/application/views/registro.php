
<?php 
  $mensaje="";
  $CI =& get_instance();
  if($_POST){

      $datos = $_POST;
      $CI->db->insert('personas',$datos);
      $mensaje="Registro Recibido";
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<body>
    <div class="container">
     
     <h2>
     	<?php 
           echo $mensaje;
     	?>
     </h2>
     <h3>Firma con nosotros</h3>
     <form method="post">
    	<div class="row">
    		<div class="col col-sm-6">
    		  <div class="form-group input-group">
    		    <span class="input-group-addon">Cedula</span>
    		    <input type="text" class="form-control" name="cedula">
    		  </div>
    		  <div class="form-group input-group">
    		    <span class="input-group-addon">Nombre</span>
    		    <input type="text" class="form-control" name="nombre">
    		  </div>
    		  <div class="form-group input-group">
    		    <span class="input-group-addon">Apellido</span>
    		    <input type="text" class="form-control" name=apellido">
    		  </div>
    		  <div class="form-group input-group">
    		    <span class="input-group-addon">Telefono</span>
    		    <input type="text" class="form-control" name="telefono">
    		  </div>
    			<div class="form-group input-group">
    		    <span class="input-group-addon">Comentario</span>
    		    <textarea name="comentario" class="form-control"></textarea>
    		  </div>
    		  <div class="text-center">
    		  	<button class="btn btn-success" type="submit">Guardar</button>
    		  </div>
    		</div>
    	</div>
      </form>
    </div>
</body>
</html>