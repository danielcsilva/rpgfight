<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TipoJogadorRepository;
use App\Entities\TipoJogador;
use App\Validators\TipoJogadorValidator;

/**
 * Class TipoJogadorRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class TipoJogadorRepositoryEloquent extends BaseRepository implements TipoJogadorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TipoJogador::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
