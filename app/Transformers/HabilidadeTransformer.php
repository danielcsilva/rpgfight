<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Habilidade;

/**
 * Class HabilidadeTransformer.
 *
 * @package namespace App\Transformers;
 */
class HabilidadeTransformer extends TransformerAbstract
{
    /**
     * Transform the Habilidade entity.
     *
     * @param \App\Entities\Habilidade $model
     *
     * @return array
     */
    public function transform(Habilidade $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
