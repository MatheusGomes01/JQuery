<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Eventos Formularios</title>
	
		<!-- jquery -->
		<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>

		<script type="text/javascript">
		
		$(document).ready(function(){

			//focus
			//blur
			//change

			$('.c1').blur(function(){
				alert('focado');
			})


			$('.c2').change(function(){
				alert('focado');
			})
		});
		</script>
	</head>


	<body>
	<input class="c1" type="text" />

	<select class="c2">
		<option value="1">1</option>
		<option value="2">2</option>
	</select>
	</body>
</html>