<?php

$estados = Array(
					'AC',
					'AL',
					'AP',
					'AM',
					'BA',
					'CE',
					'DF',
					'ES',
					'GO',
					'MA',
					'MT',
					'MS',
					'MG',
					'PA',
					'PB',
					'PR',
					'PE',
					'PI',
					'RJ',
					'RN',
					'RS',
					'RO',
					'RR',
					'SC',
					'SP',
					'SE',
					'TO',
					'ZZ' // Exterior
				);

$candidatos = Array(
						13 => 'Dilma',
						45 => 'Aecio',
						95 => 'Brancos',
						96 => 'Nulos'
					);

$votos_candidatos = Array(
						13 => 0,
						45 => 0,
						95 => 0,
						96 => 0
);

$n_registros = 0;

$resultado_geral = $votos_candidatos;

foreach ($estados as $estado) {
	$arquivo = glob('bweb_2t_' . $estado . '_28102014*.txt');
	if ($estado == 'ZZ') $estado = 'Exterior';
	$resultado = processa_arquivo($arquivo[0]);
	exibe_resultado($resultado, "Resultado $estado (arquivo {$arquivo[0]})");
	echo "\n";
	
}

if ($resultado_geral) {
	exibe_resultado($resultado_geral, "Resultado GERAL (soma de todos os arquivos)");
}

echo "\n"; 
echo number_format($n_registros, 0, ',', '.');
echo " registros processados\n\n";
					
function processa_arquivo($arquivo) {
	global $candidatos, $votos_candidatos, $resultado_geral, $n_registros;

	$h = fopen($arquivo, 'r');
	
	if ($h) {
	
		while (!feof($h)) {
			
			$registro = fgets($h);
			$registro = chop($registro);
			if (strlen($registro) > 0) {
				
				$colunas = explode(';', $registro);
				if (count($colunas) == 31) {
					if (trim($colunas[6],'"') == 'PRESIDENTE' && trim($colunas[20],'"') == 'APURADA') {
						$voto = trim($colunas[21],'"');
						if (isset($candidatos[$voto])) {
							$quantidade = (int) trim($colunas[23],'"');
							$resultado[$voto] += $quantidade;
							$resultado_geral[$voto] += $quantidade;
							$n_registros++;
					
						} else {
							die('Erro: codigo de candidato invalido');
						}
					}
				} else {
					die('Erro: numero de colunas invalido');
				}
	
				
			}
		}
		
		fclose($h);
		
		return ($resultado);
		
		// number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )
		
	} else {
		die('Erro: nao foi possivel abrir arquivo de dados');
	}

	
}




function formata_numero($v) {
	return str_pad(number_format($v, 0, ',', '.'),10," ",STR_PAD_LEFT);
	
}

function exibe_resultado($r, $titulo) {
	global $candidatos;
	
	echo "### $titulo\n\n";
	echo "Candidato  | Votos\n";
	echo "---------- | ----------\n";

	ksort($r);
	foreach ($r as $c => $v) {
		echo str_pad($candidatos[$c],10," ");
		echo " | ";
		echo formata_numero($v);
		echo "\n";
	}
}


?>
