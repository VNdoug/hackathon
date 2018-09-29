<?php

namespace App\Funcoes;

use SnappyPDF;
use View;
use App\Funcoes\Upload;
use Storage;
use Illuminate\Http\File;
/**
 * PDF
 * Funções para geração de PDF
 * Como Utilizar:     
 * Incluir no use PDF; já está no config/app.php a classe
 */

class PDF
{

    public static function gerar($view, $dados, $paginacao = false)
    {
        $dados['paginacao'] = $paginacao;

        $pdf = SnappyPDF::loadView($view, $dados);

        $cabecalho = View::make('tema::impressao.cabecalho', $dados)->render();
        $rodape    = View::make('tema::impressao.rodape', $dados)->render();

        return $pdf ->setOption('encoding', 'utf-8')
                    ->setOption('header-html', $cabecalho)
                    ->setOption('footer-html', $rodape)     
                    ->setOption('margin-bottom',15)         
                    ->stream('documento.pdf');
    }   

    public static function salvarLocal($view, $dados, $caminho, $paginacao = false)
    {
        $dados['paginacao'] = $paginacao;

        $pdf = SnappyPDF::loadView($view, $dados);

        $cabecalho = View::make('tema::impressao.cabecalho', $dados)->render();
        $rodape    = View::make('tema::impressao.rodape', $dados)->render();
        $caminho   = config('filesystems.disks.do.root').'/'.$caminho;
        
        $pdf->setOption('encoding', 'utf-8')
            ->setOption('header-html', $cabecalho)
            ->setOption('footer-html', $rodape)
            ->setOption('margin-bottom',20)
            ->save($caminho);
    }

    public static function salvar($visao, $dados, $caminho, $paginacao = false)
    {        
        $pdf = SnappyPDF::loadView($visao, $dados);

        if(config('filesystems.default') == 's3')
            return self::s3($pdf, $dados, $caminho);
        elseif(config('filesystems.default') == 'do')   
            return self::do($pdf, $dados, $caminho);        
    }

    /* Salva o PDF carregando uma visão */
    public static function salvarVisao($visao, $dados, $caminho, $paginacao = false)
    {        
        $pdf = SnappyPDF::loadHTML($visao);  

        if(config('filesystems.default') == 's3')   
            return self::s3($pdf, $dados, $caminho);
        elseif(config('filesystems.default') == 'do')                       
            return self::do($pdf, $dados, $caminho);   
    }   

    /* Mostra a visão como PDF */
    public static function carregarVisao($visao, $dados)
    {        
        $dados['documento_sem_validade'] = true;
        $pdf = SnappyPDF::loadHTML($visao);
        
        $cabecalho = View::make('tema::impressao.cabecalho', $dados)->render();
        $rodape    = View::make('tema::impressao.rodape', $dados)->render();

        return $pdf ->setOption('encoding', 'utf-8')
                    ->setOption('header-html', $cabecalho)
                    ->setOption('footer-html', $rodape)    
                    ->setOption('margin-bottom',15)
                    ->stream('documento'.date('_d-m-Y').'.pdf');
    }    

    /*
     PARA SALVAR NO S3 É PRECISO 
     1- SALVAR O PDF GERADO LOCALMENTE
     2- JOGAR ELE PARA O S3
     3- EXCLUIR O ARQUIVO LOCAL
    */
    public static function s3($pdf, $dados, $caminho, $paginacao = false)
    {   
        $dados['paginacao'] = $paginacao;

        $rodape      = View::make('tema::impressao.rodape', $dados)->render();
        $cabecalho   = View::make('tema::impressao.cabecalho', $dados)->render();
        $nome        = md5(date("Y.m.d-H.i.s.u").$caminho).'.pdf';

        if (!file_exists('/tmp/sia3f'))
            mkdir('/tmp/sia3f', 0777, true);

        $caminho_tmp = '/tmp/sia3f/'.$nome;
        
        /* Se já existir outro arquivo com mesmo nome, excluo */
        if(file_exists($caminho_tmp))
            unlink($caminho_tmp);
            
        $pdf->setOption('encoding', 'utf-8')
            ->setOption('header-html', $cabecalho)
            ->setOption('footer-html', $rodape)
            ->setOption('margin-bottom',20)
            ->save($caminho_tmp);

        Storage::putFileAs($caminho, new File($caminho_tmp), $nome);

        //Storage::putFile($caminho, new File($caminho_tmp));

        //remover arquivo temporário
        unlink($caminho_tmp);

        return $caminho.'/'.$nome;
    }

    /*
    * SALVAR NO STORAGE NORMAL
    */
    public static function do($pdf, $dados, $caminho, $paginacao = false)
    {   
        $dados['paginacao'] = $paginacao;

        $cabecalho   = View::make('tema::impressao.cabecalho', $dados)->render();
        $rodape      = View::make('tema::impressao.rodape', $dados)->render();
        $nome        = md5(date("Y.m.d-H.i.s.u").$caminho).'.pdf';
        $caminho     = $caminho.'/'.$nome;

        $pdf->setOption('encoding', 'utf-8')
            ->setOption('header-html', $cabecalho)
            ->setOption('footer-html', $rodape)
            ->setOption('margin-bottom',20)
            ->save(config('filesystems.disks.do.root').'/'.$caminho);

        return $caminho;
    }              
}
/*
 ALGUMAS OPÇÕES
  $pdf = App::make('snappy.pdf.wrapper');
    $pdf->setOption('header-html', 'view'));
        ->setOption('footer-html', 'view'))
        ->setOption('footer-left',utf8_decode(''))
        ->setOption('footer-right','Impresso em '.date("\ d/m/Y\ \ \á\s\ H:i"))
        ->setOption('footer-right','[page] de [topage]')
*/