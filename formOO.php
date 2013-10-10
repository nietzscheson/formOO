<?php 

class Formulario
{
	public $infoForm;
	public $method;
	public $action;
	public $idForm;
	public $inputs;
	public $input;

	public function __construct($metodo = "POST", $accion = "index.php", $idFormulario = "formulario")
	{
		$this->infoForm;
		$this->method = $metodo;
		$this->action = $accion;
		$this->idForm = $idFormulario;
	}
	
	public function formulario($datos,$inputs)
	{?>
		<?php 
			$this->infoForm = $datos;
			$this->method = $this->infoForm["method"];
			$this->action = $this->infoForm["action"];
			$this->idForm = $this->infoForm["id"];
			$this->inputs = $inputs;
	?>

		<form method="<?=$this->method?>" action="<?=$this->action?>" id="<?=$this->idForm?>">
			<?php foreach($this->inputs as $this->input):?>
				<input type="<?=$this->input['type']?>" 
				name="<?=$this->input['name']?>" 
				value="<?=$this->input['value']?>" />
			<?php endforeach;?>
		</form>
	<?}

}

$registro = [ //Datos principales del formulario
	"method"=>"POST",
	"action"=>"php.php",
	"id"=>"formulario"
];

	$input_registro["nombre"] = [ //Procurar que este valor sea igual al valor de 'name'
		"type"=>"text",
		"name"=>"nombre",
		"value"=>"Tu nombre",
		"placeholder"=>"Pon tu nombre",
		"class"=>"input"
	];

	$input_registro["apellido"] = [ //Procurar que este valor sea igual al valor de 'name'
		"type"=>"text",
		"name"=>"apellido",
		"value"=>"Tu apellido",
		"placeholder"=>"Pon tu apellido",
		"class"=>"input"
	];

$Formulario = new Formulario;
$Formulario->formulario($registro, $input_registro);

?>
