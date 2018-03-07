<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Jogo da velha</title>
		<!-- jquery -->
		<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>

		<script src="http://code.jquery.com/jquery-migrate-1.0.0rc1.js"></script>
		<script src="jogo_velha.js"></script>
	</head>

	<body>

	<div id="pg_inicial" align="center">
		<table width="600px;">
			<tbody>
				<tr>
					<td colspan="3" align="center">Jogo da Velha</td>
				</tr>

				<tr>
					<td align="center">
						<img src="imagens/jogador_1.png" />
						<br />
						<input id="entrada_apelido_jogador_1" type="text" maxlength="10"
						placeholder="Apelido jogador_1" style="border: 0px;">
					</td>
					<td align="center">
						<img id="btn_iniciar_jogo" src="imagens/iniciar.png" />
					</td>
					<td align="center">
						<img src="imagens/jogador_2.png" />
						<br />
						<input id="entrada_apelido_jogador_2" type="text" maxlength="10" placeholder="Apelido jogador_2" 
						style="border: 0px;">
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div id="palco_jogo" style="display: none; margin-top: 50px; text-align: center;">
		<div style="display: inline-block;">
			<img src="imagens/jogador_1.png">
			<br />
			<span id="nome_jogador_1"></span>
		</div>

		<div style="display: inline-block;">
			<table border="0">
				<tr>
					<td style="border-bottom: solid 1px red; border-right: solid 1px red;">
						<div class="jogada" id="a-1" style="width: 100px; height: 100px;"></div>
					</td>
					<td style="border-bottom: solid 1px red; border-right: solid 1px red;">
						<div class="jogada" id="a-2" style="width: 100px; height: 100px;"></div>
					</td >
					<td style="border-bottom: solid 1px red;">
						<div class="jogada" id="a-3" style="width: 100px; height: 100px;"></div>
					</td>
				</tr>
				<tr>
					<td style="border-bottom: solid 1px red; border-right: solid 1px red;">
						<div class="jogada" id="b-1" style="width: 100px; height: 100px;"></div>
					</td>
					<td style="border-bottom: solid 1px red; border-right: solid 1px red;">
						<div class="jogada" id="b-2" style="width: 100px; height: 100px;"></div>
					</td>
					<td style="border-bottom: solid 1px red;">
						<div class="jogada" id="b-3" style="width: 100px; height: 100px;"></div>
					</td>
				</tr>
				<tr>
					<td style="border-right: solid 1px red;">
						<div class="jogada" id="c-1" style="width: 100px; height: 100px;"></div>
					</td>
					<td style="border-right: solid 1px red;">
						<div class="jogada" id="c-2" style="width: 100px; height: 100px;"></div>
					</td>
					<td>
						<div class="jogada" id="c-3" style="width: 100px; height: 100px;"></div>
					</td>
				</tr>
			</table>
		</div>

		<div style="display: inline-block;">
			<img src="imagens/jogador_2.png">
			<br />
			<span id="nome_jogador_2"></span>
		</div>
	</div>

	</body>
</html>
