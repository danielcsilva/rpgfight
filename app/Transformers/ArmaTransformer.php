<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Arma;

/**
 * Class ArmaTransformer.
 *
 * @package namespace App\Transformers;
 */
class ArmaTransformer extends TransformerAbstract
{
    /**
     * Transform the Arma entity.
     *
     * @param \App\Entities\Arma $model
     *
     * @return array
     */
    public function transform(Arma $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
