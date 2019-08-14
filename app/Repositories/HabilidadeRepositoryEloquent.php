<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\HabilidadeRepository;
use App\Entities\Habilidade;
use App\Validators\HabilidadeValidator;

/**
 * Class HabilidadeRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class HabilidadeRepositoryEloquent extends BaseRepository implements HabilidadeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Habilidade::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return HabilidadeValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
