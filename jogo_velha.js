var rodada = 1;
var matriz_jogo = Array(3);

matriz_jogo['a'] = Array(3);
matriz_jogo['b'] = Array(3);
matriz_jogo['c'] = Array(3);

matriz_jogo['a'][1] = 0;
matriz_jogo['a'][2] = 0;
matriz_jogo['a'][3] = 0;

matriz_jogo['b'][1] = 0;
matriz_jogo['b'][2] = 0;
matriz_jogo['b'][3] = 0;

matriz_jogo['c'][1] = 0;
matriz_jogo['c'][2] = 0;
matriz_jogo['c'][3] = 0;

$(document).ready( function(){
	$('#btn_iniciar_jogo').click( function(){

		//valida a digitação dos apelidos de jogadores
		if($('#entrada_apelido_jogador_1').val() == ''){
			alert('Apelido do jogador 1 não foi preenchido');
			return false;
		}

		if($('#entrada_apelido_jogador_2').val() == ''){
			alert('Apelido do jogador 2 não foi preenchido');
			return false;
		}

		//exibir os apelidos

	$('#nome_jogador_1').html($('#entrada_apelido_jogador_1').val());
	$('#nome_jogador_2').html($('#entrada_apelido_jogador_2').val());


	//controla a visualiz~ao das divs
	$('#pg_inicial').hide();
	$('#palco_jogo').show();

	});

	$('.jogada').click( function(){
		var id_campo_clicado = this.id;
		jogada(id_campo_clicado);

	});

	function jogada(id){

		var icone = '';
		var ponto = 0;

		if((rodada % 2) == 1){
			icone = 'url("imagens/marcacao_1.png")'
			ponto = -1;
		}else{
			icone = 'url("imagens/marcacao_2.png")'
			ponto = 1;
		}

		rodada++;

		$('#'+id).css("background-image", icone);

		var linha_coluna = id.split('-');

		matriz_jogo[linha_coluna[0]][linha_coluna[1]] - ponto;

		verifica_combinacao();
	}

	function verifica_combinacao(){
		//verifica horizontal

		var pontos = 0;

		for(var i = 1; i <= 3; i++){
			pontos = pontos + matriz_jogo['a'][i];
		}
	}

	function ganhador(pontos){
		if( pontos == -3){
			alert('Jogador 1 é o vencedor');
		}else if(pontos == 3){
			alert('Jogador 2 é o vencedor');
		}
	}

});

	

/*1961018	1963205	 natura coosmeticos adm*/
