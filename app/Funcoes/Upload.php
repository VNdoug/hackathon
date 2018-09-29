<?php

namespace App\Funcoes;

use Storage;
use Intervention\Image\Facades\Image;

/*
 * Uploads e Pastas
 * Para armazenar no local:
 *
 * Configurar variável FILESYSTEM_DRIVER no .env
 * FILESYSTEM_DRIVER = public
 * 
 */

class Upload
{
	/* Gera a URL para buscar o arquivo */
	public static function url($caminho)
	{
		return Storage::url($caminho);
	}

	/* Gera a URL para buscar o arquivo */
	public static function path($caminho)
	{
		/* 
		 * Utilizado quando é preciso do path para realizar o merge ou inserir arquivo na impressão
		 */
		if(env('STORAGE') == 's3')
			return Storage::url($caminho);
		else
			return "storage/$caminho";
	}	

	public static function criarDiretorio($diretorio){
		$storage = Storage::disk(env('STORAGE'));

		if(!$storage->exists($diretorio))
			$storage->makeDirectory($diretorio);

		return $diretorio;
	}

	public static function removerDiretorio($diretorio){
		$storage     = Storage::disk(env('STORAGE'));
		$storage->deleteDirectory($diretorio);
	}

	public static function uploadImagem($arquivo, $diretorio, $largura, $altura, $thumbLargura = null, $thumbAltura = null){
		Self::criarDiretorio($diretorio);

		$prefixo = Storage::getDriver()->getAdapter()->getPathPrefix();
        $nome    = Self::nomeArquivo($arquivo);
        $nomeHash = $nome['nomeHash'];
        $nomeOriginal = $nome['nomeOriginal'];

        Self::removerArquivos([$nomeHash]);        

        $img = Image::make($arquivo->getRealPath());       
        $img->fit($largura, $altura, function ($constraint) {
		    $constraint->aspectRatio();
		    $constraint->upsize();
		})->stream();
        
        Storage::put(
			$diretorio . '/' . $nomeHash,
			$img->__toString()
		);

		if ($thumbLargura || $thumbAltura){
		    /*
		     * Cria a pasta thumbs caso ela não exista ainda
		     */
		    Self::criarDiretorio($diretorio."/thumbs//");
		    $img->fit($thumbLargura,$thumbAltura)->stream();
            Storage::put(
    			$diretorio . "/thumbs//" . $nomeHash,
    			$img->__toString()
    		);
		} else {
		    $pathThumb = null;
		}

		return ['path' => $diretorio.'/'.$nomeHash, 'pathThumb' => $diretorio. "/thumbs/" .$nomeHash, 'nomeOriginal' => $nomeOriginal];
	}

	public static function uploadArquivo($arquivo, $diretorio){   
        $nome = self::criarDiretorio($diretorio).'/'.self::nomeArquivo($arquivo)['nomeHash'];

        Storage::put(
            $nome,
            file_get_contents($arquivo->getRealPath())
        );  

        return $nome;
	}		

	public static function nomeArquivo($arquivo){
		$nomeOriginal = $arquivo->getClientOriginalName();
		$mime = $arquivo->getClientOriginalExtension();
		return ['nomeHash' => md5(date("Y.m.d-H.i.s").$nomeOriginal). '.' . $mime, 'nomeOriginal' => $nomeOriginal];
	}

	public static function removerArquivos($arquivos){
		$storage = Storage::disk(env('STORAGE'));
		
		foreach ($arquivos as $arquivo){
			if($storage->exists($arquivo))
				$storage->delete($arquivo);	
		}
	}

    // public static function baixarURL($url)
    // {
    //     if (!file_exists('/tmp/sia3f'))
    //         mkdir('/tmp/sia3f', 0777, true);

    //     set_time_limit(0);  

    //     $caminho = '/tmp/sia3f/'.md5(date("Y.m.d-H.i.s.u").$url).'.pdf';

    //     /* Se já existir outro arquivo com mesmo nome, excluo */
    //     if(file_exists($caminho))
    //         unlink($caminho);

    //     $fp      = fopen ($caminho, 'w+');
    //     $ch      = curl_init(str_replace(" ","%20",$url));

    //     curl_setopt($ch, CURLOPT_TIMEOUT, 300);
    //     curl_setopt($ch, CURLOPT_FILE, $fp);
    //     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    //     $data = curl_exec($ch);
    //     curl_close($ch);

    //     return $caminho;
    // }   

    // public static function removerDiretorioPDF($dir) 
    // { 
    //     if(file_exists($dir))
    //     {           
    //         $files = array_diff(scandir($dir), array('.','..'));
    //         foreach ($files as $file) 
    //         { 
    //             (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    //         } 

    //         rmdir($dir); 
    //     }
    // }

    /**
     * Formata bytes para kb, mb, gb, tb
     *
     * @param  integer $size
     * @param  integer $precision
     * @return integer
     */
    public static function formatBytes($size, $precision = 2)
    {
        if ($size > 0) {
            $size = (int) $size;
            $base = log($size) / log(1024);
            $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');

            return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
        } else {
            return $size;
        }
    }
}