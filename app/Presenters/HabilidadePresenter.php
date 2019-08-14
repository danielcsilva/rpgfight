<?php

namespace App\Presenters;

use App\Transformers\HabilidadeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class HabilidadePresenter.
 *
 * @package namespace App\Presenters;
 */
class HabilidadePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new HabilidadeTransformer();
    }
}
