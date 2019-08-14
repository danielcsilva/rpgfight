<?php

namespace App\Presenters;

use App\Transformers\JogadorTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class JogadorPresenter.
 *
 * @package namespace App\Presenters;
 */
class JogadorPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JogadorTransformer();
    }
}
