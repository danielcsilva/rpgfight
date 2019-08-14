<?php

namespace App\Presenters;

use App\Transformers\ArmaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ArmaPresenter.
 *
 * @package namespace App\Presenters;
 */
class ArmaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ArmaTransformer();
    }
}
