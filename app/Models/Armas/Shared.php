<?php

/*
 * Developed by Milena Mognon
 */

namespace App\Models\Armas;

use Illuminate\Database\Eloquent\Model;

class Shared extends Model
{
    public static function bandoleira($bandoleira)
    {
        return $bandoleira != 'não possui' ? ", possui bandoleira de $bandoleira" : '';
    }

    public static function modelo($modelo)
    {
        return $modelo != '' ? " modelo $modelo," : '';
    }

    public static function numeracao_montagem($numeracao_montagem)
    {
        return $numeracao_montagem ? ", numeração de montagem $numeracao_montagem" : '';
    }

    public static function coronha_fuste($coronha_fuste)
    {
        $text = 'coronha e fuste';
        switch ($coronha_fuste) {
            case 'madeira':
                return 'com ' . $text . ' inteiriços em madeira';
                break;
            case 'material sintético':
                return 'com ' . $text . ' em material sintético';
                break;
            case 'desprovido':
                return 'desprovido de ' . $text;
                break;
            default:
                return '';
        }
    }

    public static function sentido_raias($sentido_raias)
    {
        switch ($sentido_raias) {
            case 'dextrógiro':
                return 'dextrógiras';
                break;
            case 'sinistrógiro':
                return 'sinistrógiras';
                break;
            case 'danificado':
                return 'danificado';
                break;
            default:
                return '';
        }
    }

    public static function acabamento($acabamento)
    {
        if ($acabamento == "desprovido") {
            return "Desprovido de acabamento";
        } else {
            return "Possui acabamento $acabamento";
        }
    }

    public static function serie($tipo_serie, $num_serie)
    {
        switch ($tipo_serie) {
            case 'legível':
                return "com número de série " . "\"" . $num_serie . "\"";
                break;
            case 'revelado':
                return "com número de série revelado " . "\"" . $num_serie . "\"";
                break;
            case 'regravado':
                return "com número de série regravado " . "\"" . $num_serie . "\"";
                break;
            case 'ilegível':
                return "com número de série ilegível";
                break;
            case 'suprimido intencionalmente':
                return "com número de série suprimido intencionalmente";
                break;
            case 'não aparente':
                return "sem número de série aparente";
                break;
            case 'adulterado':
                return "com número de série adulterado";
                break;
            default:
                return "";
        }
    }

    public static function marca($marca)
    {
        if ($marca == "Não Aparente") {
            return "não aparente";
        } else {
            return "\"" . $marca . "\"";
        }
    }

    public static function funcionamento($funcionamento)
    {
        if ($funcionamento == 'eficiente') {
            return ['texto'=>"Buscando atestar tais atributos da arma, o Perito submeteu-a ao teste de tiro, usando as munições de correspondente calibre encaminhadas para o exame e efetuando disparos  em ação simples e ação dupla. Foram observados os funcionamentos normais dos seus componentes, os quais deflagraram as respectivas cargas de projeção ao serem as espoletas percutidas por uma só vez. Os remanescentes da munição foram devidamente descartados. Nestas condições, verificou-se estar",'textoSublinhado'=>" a arma eficiente para a realização de tiros."];
        }
        if ($funcionamento == 'ineficiente') {
            return "Submetida esta arma de fogo a prova de disparo foi observado o funcionamento dos seus mecanismos, porém a mesma não percutiu eficientemente os estojos a fim de deflagrar a munição, não estando apta para realização de disparos, podendo ainda ser utilizada como instrumento contundente e/ou de intimidação.";
        }
    }

    public static function sistemaFuncionamento($sistema_funcionamento, $tipo_carregador = "")
    {
        if ($sistema_funcionamento == "unitário") {
            return "de tiro unitário";
        } else {
            return $sistema_funcionamento . " e carregador $tipo_carregador";
        }
    }

    public static function chaveAbertura($chave_abertura)
    {
        if ($chave_abertura == "guarda-mato") {
            return "no guarda-mato";
        } else {
            return "na $chave_abertura";
        }
    }

    public static function teclasGatilho($teclas_gatilho)
    {
        if ($teclas_gatilho == "duas") {
            return "duas teclas de gatilho";
        } else {
            return "uma tecla de gatilho";
        }
    }

    public static function calibre($calibre, $calibre_real){
        if(empty($calibre_real)){
            return "$calibre ";//de calibre nominal
        } else {
            return "$calibre_real";//de calibre real
        }
    }
    public static function num_lacre_saida($num_lacre_saida){
        if(isset($num_lacre_saida)){
            return "Lacre de entrada: $num_lacre_saida.";
        } else {
            return "";
        };
    }

    public static function cao($cao)
    {
        switch ($cao) {
            case 'exposto':
                return "com cão exposto";
                break;
            case 'mecanismo embutido':
                return "com mecanismo embutidos";
                break;
           
        }
    }
    public static function calibre_espingarda_artesanal($calibre, $calibre_real){
        if(empty($calibre_real)){
            return "de calibre nominal $calibre";
        } else {
            return "de calibre real $calibre_real";
        }
    }
    public static function coronha_fuste_dois_canos($coronha_fuste){
        switch ($coronha_fuste) {
            case 'madeira':
                return 'em ' . $coronha_fuste ;
                break;
            case 'material sintético':
                return 'em ' . $coronha_fuste ;
                break;
            case 'desprovido':
                return  $coronha_fuste;
                break;
            default:
                return '';
    }}
}
