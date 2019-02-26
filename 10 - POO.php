<?php

class Pessoa{  //classe
	
	public $nome; //Atributo (variável)

	public function falar(){  //Metodo (função)

		return "O meu nome é ".$this->nome;
	}
}


$cassio = new Pessoa();
$cassio->nome = "Cassio Moreira";
echo $cassio->falar();

//////////////////////////////////////////////////////////////////
echo "<br><br>";

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor(){
		return $this->motor;
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno(){
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	public function exibir(){
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());

//////////////////////////////////////////////////////////////////
echo "<br><br>";

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$resultado = Documento::validarCPF($numero);

		if($resultado === false){
			throw new Exception("CPF não é valido!", 1);
		}
		$this->numero = $numero;
	}

	public static function validarCPF($cpf){
		if(empty($cpf)) {
	        return false;
	    }
	 
	    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

	    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	     
	    
	    if (strlen($cpf) != 11) {
	        echo "length";
	        return false;
	    }
	    
	    else if ($cpf == '00000000000' || 
	        $cpf == '11111111111' || 
	        $cpf == '22222222222' || 
	        $cpf == '33333333333' || 
	        $cpf == '44444444444' || 
	        $cpf == '55555555555' || 
	        $cpf == '66666666666' || 
	        $cpf == '77777777777' || 
	        $cpf == '88888888888' || 
	        $cpf == '99999999999') {
	        return false;

	    } else {   
	         
	        for ($t = 9; $t < 11; $t++) {
	             
	            for ($d = 0, $c = 0; $c < $t; $c++) {
	                $d += $cpf{$c} * (($t + 1) - $c);
	            }
	            $d = ((10 * $d) % 11) % 10;
	            if ($cpf{$c} != $d) {
	                return false;
	            }
	        }
	 
	        return true;
	    }
	}
}

$cpf = new Documento();
$cpf ->setNumero("87867147241");

var_dump($cpf->getNumero());

//ou 
echo "<br>";
var_dump(Documento::validarCPF("87867147241"));

 echo "<br><br>";
//////////////////////////////////////////////////////////////
//METODO CONSTRUTOR

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	//public function __destruct(){
	//	var_dump("DESTRUIR");
	//}

	public function __toString(){
		return $this->logradouro.", ".$this->numero." - ".$this->cidade;
	}
}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

//var_dump($meuEndereco);
//unset($meuEndereco);

//ou

echo $meuEndereco;

/////////////////////////////////////////////////////////////////
// EMCAPSULAMENTO
echo "<br><br>";
class Pessoas{
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";
	private $tipo = "ativo";

	public function verDados(){
		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";
	}
}

$objeto = new Pessoas();

echo $objeto->nome."<br><br>";
//echo $objeto->idade."<br><br>"; -Não é possível pq é protected

$objeto->verDados();

echo "<br><br>Extends<br>";

 class Programador extends Pessoas{
	//Como $tipo é privado não é possivle acessar de fora da class
	//public function verDados(){
 	//	echo $this->tipo."<br>";
 	//}
 }

$progra = new Programador();

$progra->verDados();

echo "<br><br>Herança<br>";
/////////////////////////////////////////////////////////////////
// HERANÇA



?>