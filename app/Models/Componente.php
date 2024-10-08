<?php

namespace App\Models;

use App\Models\Componentes\BalinsChumbo;
use App\Models\Componentes\Espoletas;
use App\Models\Componentes\Polvora;
use App\Models\ImagensProjetil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Componente extends Model
{
    use SoftDeletes;

    protected $table = 'componentes';

    protected $fillable = ['laudo_id', 'quantidade_frascos', 'componente',
        'tipo_raiamento', 'quantidade', 'tamanho','altura_projetil','constituicao_formato','massa','quantidade_raias',
        'detalharLocalizacao','tipo_projetil','calibreReal','calibreNominal',
        'aderencia','sentido_raias','origem_projetil','deformacaoAcidental','cavados','ressaltos',
        'lacrecartucho','tipo_prjetil','projetil','origem_coletaPerito','rep_materialColetado','lacreSaida','recoberto'];

    protected $dates = ['deleted_at'];

    public function imagensProjetil(){
        return $this->hasMany(ImagensProjetil::class,'projetil_id','id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class)->withTrashed();
    }

    public function calibre()
    {
        return $this->belongsTo(Calibre::class)->withTrashed();
    }
    public function laudo()
    {
        return $this->belongsTo(Laudo::class);
    }

    
}
