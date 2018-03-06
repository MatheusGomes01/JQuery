<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Eventos Mouse</title>
		<!-- bootstrap - link cdn -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
			<!-- jquery -->
			<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
	
				<script src="http://code.jquery.com/jquery-migrate-1.0.0rc1.js"></script>
	
				<script type="text/javascript">
	
					$(document).ready( function(){
						//click
						//dbclick
						//mousedown
						//mousehover
						//mouseout

						$('#div1').click( function(){
							alert('voce clikou');
						});
					});

					/* ou para teclados
					keydown
					keypress
					keyup
					
					$(document).ready( funtiom(){

					$('#d1').keydown( function(){
						alert('você teclou')
					});

					});
			</script>
	</head>
	<body>
		<input id="1" type="text">
	</body>
</html>