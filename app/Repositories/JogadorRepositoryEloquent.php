<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\JogadorRepository;
use App\Entities\Jogador;
use App\Validators\JogadorValidator;

/**
 * Class JogadorRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class JogadorRepositoryEloquent extends BaseRepository implements JogadorRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Jogador::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return JogadorValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
