<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Jogador;

/**
 * Class JogadorTransformer.
 *
 * @package namespace App\Transformers;
 */
class JogadorTransformer extends TransformerAbstract
{
    /**
     * Transform the Jogador entity.
     *
     * @param \App\Entities\Jogador $model
     *
     * @return array
     */
    public function transform(Jogador $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
