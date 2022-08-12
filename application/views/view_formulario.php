<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Submit - Formulário</title>
</head>
<body>

	<div class="container">
        <div class="mensagem"> </div>

        <h3>Formulário</h3>
		<?php
			$hidden = array("Hidden 01", "Hidden 02", "Hidden 03", "Hidden 04");
		?>
        <?php echo form_open('main/submit', array('class'=>'formulario'), $hidden); ?>

        	<div class="form-outline">
		  		<label class="form-label" for="nome">Nome Completo</label>
		 		<input type="text" id="nome" name="nome" class="form-control" />
			</div>

			<div class="form-outline">
		  		<label class="form-label" for="numero">Número</label>
		 		<input type="number" id="numero" name="numero" class="form-control" />
			</div>

			<div class="form-outline">
				<label class="form-label" for="email">Email</label>
	  			<input type="email" id="email" name="email" class="form-control" />
			</div>

			<div class="form-outline">
				<label class="form-label" for="data">Data</label>
	  			<input type="date" id="data" name="data" class="form-control" />
			</div>

			<div class="form-outline mt-3">
				<input class="btn btn-primary" type="submit" value="Enviar">
			</div>

        <?php echo form_close(); ?>

    </div>


	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<?php
	$controler_metodo = base_url('main/submit');
	$formulario = 'formulario';
?>

<script>
	
    $(document).ready(function()
	{

        $('form.<?php echo $formulario ?>').on('submit', function(form)
		{
            form.preventDefault();

            $.post('<?php echo $controler_metodo ?>', $('form.<?php echo $formulario ?>').serialize(), 
			function(data)
			{	
                $('div.mensagem').html(data);
            });
        });
    });
</script>

</body>
</html>