<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ArmaRepository;
use App\Entities\Arma;
use App\Validators\ArmaValidator;

/**
 * Class ArmaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ArmaRepositoryEloquent extends BaseRepository implements ArmaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Arma::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ArmaValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
