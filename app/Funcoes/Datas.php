<?php

namespace App\Funcoes;

/**
 * Datas
 * Funçoes de manipulação e formatação de datas
 * Como Utilizar:     
 *          Incluir no use (use App\Funcoes\Datas;)
 *          $data = Datas::FormataDataBanco($data); 
 *          $padrao = Datas::FormataDataPadrao($data);
 */

class Datas
{
    /*
    * retorna data no padrão do banco de dados
    */
    public static function FormataDataBanco($data)
    {
        $data = str_replace('/', '-', $data);
        return date('Y-m-d', strtotime($data));
    }

    /*
    * retorna data e hora no padrão timestamp do banco de dados
    */
    public static function FormataDataHoraBanco($data)
    {
        $data = str_replace('/', '-', $data);
        return date('Y-m-d H:i:s', strtotime($data));
    }

    /*
    * retorna data no padrão brasileiro
    */
    public static function FormataDataPadrao($data)
    {
        $data = str_replace('/', '-', $data);
        return date('d/m/Y', strtotime($data));
    }

    /*
    * retorna data/hora padrão brasileiro
    */
    public static function FormataDataHoraPadrao($data)
    {
        $data = str_replace('/', '-', $data);
        return date('d/m/Y H:i:s', strtotime($data));
    }

    /*
    * retorna data por extenso
    */
    public static function extenso($data = null)
    {
        setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
        date_default_timezone_set('America/Sao_Paulo');

        $data = $data == null ? date( 'Y-m-d' ) : $data;

        return strftime( '%d de %B de %Y', strtotime( $data ) );
    }

    /*
    * retorna data por extenso com hora
    */
    public static function extensoDataHora($data = null)
    {
        setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
        date_default_timezone_set('America/Sao_Paulo');

        $data = $data == null ? date('Y-m-d H:i') : $data;

        return strftime('%d de %B de %Y, às %H:%M', strtotime($data));
    }

    /*
    * retorna mes/ano padrão brasileiro extenso
    */
    public static function mesAnoExtenso($mes, $ano)
    {
        setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
        date_default_timezone_set('America/Sao_Paulo');
        
        return strftime( '%B/%Y', strtotime($ano.'-'.$mes.'-01'));
    }
}