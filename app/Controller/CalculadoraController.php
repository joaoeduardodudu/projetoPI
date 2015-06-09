<?php 

class CalculadoraController extends AppController {

	public function soma($n1, $n2) {
		$resultado = $n1 + $n2;
		$this->set('resultado', $resultado);
	}

}