<?php

//SubRotina, pq não retorna nada. (return)
function ola(){
	echo "Ola mundo!<br><br>";
}

ola();

function salario(){
	return 998.00;
}

echo "Cassio recebeu 3 salarios: ".(salario()*3);

echo "<br><br>";
function bemVindo($texto, $frase = "Falhou"){
	return "Ola $texto $frase<br>";
}

echo bemVindo("mundo", "velho");
echo bemVindo("mundo", "");
echo bemVindo("mundo");


////////////////////////////////////
echo "<br><br>";

function bomDia(){
	$argumentos = func_get_args();
	return $argumentos;
}


var_dump(bomDia("bom dia"));
var_dump(bomDia("bom dia","boa noite"));
var_dump(bomDia("bom dia","boa noite","boa tarde"));
var_dump(bomDia("bom dia","boa noite","boa tarde",10));
var_dump(bomDia());


////////////////////////////////////////////////////////////
echo "<br><br>"; //Passagem de valor
$a = 10;

function trocaValor($b){
	$b += 50;
	return $b;
}

echo trocaValor($a);
echo "<br><br>";

echo trocaValor($a);

//Passagem de valor por referencia
echo "<br>------------------------------------------------<br>";
function trocaReferencia(&$b){
	$b += 50;
	return $b;
}

echo trocaReferencia($a);
echo "<br>";

echo trocaReferencia($a);

/////////////////////////////////////////////////////////////
echo "<br><br>";

function soma(float ...$valores){
	return array_sum($valores);
}

echo soma(2.1, 3.3, 43.1);

////////////////////////////////////////////////////////////
echo "<br><br>";

function somaNova(int ...$valores):string { //retorna uma string
	return array_sum($valores);
}

var_dump(somaNova(2, 3, 43));

////////////////////////////////////////////////////////////
//Funções recursivas 
echo "<br><br>";

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: Gerente de vendas
					array(
						'nome_cargo'=>'Gerente de vendas'
					)
					//Termino: Gerente de vendas
				)
			),
			//Termino: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Inicio: Gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de contas a pagar',
						'subordinados'=>array(
							//Inicio: Supervisor a pagamentos
							array(
								'nome_cargo'=>'Supervisor a pagamentos'
							)
							//Termino: Supervisor a pagamentos
						)
					),
					//Termino: Gerente de contas a pagar
					//Inicio: Gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinados'=>array(
							//Inicio: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(
									array(
										'nome_cargo'=>'Funcionário'
									)
								)
							)
							//Termino: Supervisor de Suprimentos
						)
					)
					//Termino: Gerente de compras
				)
			)
			//Termino: Diretor Financeiro
		)

	)
);

function exibir($cargos){
	$html = "<ul>";

	foreach ($cargos as $cargo) {
		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibir($cargo['subordinados']);
		}

		$html .= "</li>";
	}

	$html .= "</ul>";

	return $html;
}

echo exibir($hierarquia);

//////////////////////////////////////////////////////////
//FUNÇÔES ANONIMAS
echo "<br>------------------------------------------------<br><br>";

function test($callback){
	// Processo lento , sei la qual...

	$callback();
}

test(function(){
	echo "Terminou";
});

//////////////////////////
echo "<br><br>";

$fn = function($a){
	var_dump($a);
};

$fn("oi");
?>