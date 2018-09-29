<?php
namespace App\Funcoes;

class Texto
{
	/*
	 * Retorna string cortada, sem cortar palavras ao meio
	 * Insere reticências no final da string
	 */
	public static function cortarTexto($texto, $caracteres){
		if (preg_match("/^.{1,$caracteres}\b/su", strip_tags($texto), $match))
		{
			return $match[0]."...";
		}
	}

	
	/*
	 * Retorna URL com 'http://'
	 */
	public static function formatarURL($url){
		if (!strpos($url, '://')) {
			$url = 'http://' . $url;
		}

		return $url;
	}

	/*
	 * Recebe CPF da máscara e retorna string com os números
	 */
	public static function formatarMascaraCPF($cpf){
		return str_replace([".", "-", "_"], "", $cpf);
	}
}