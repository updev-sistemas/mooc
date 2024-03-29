<?php

namespace Mooc\Transformers;

use League\Fractal\TransformerAbstract;
use Mooc\Entities\Sale;

/**
 * Class SaleTransformer.
 *
 * @package namespace Mooc\Transformers;
 */
class SaleTransformer extends TransformerAbstract
{
    /**
     * Transform the Sale entity.
     *
     * @param \Mooc\Entities\Sale $model
     *
     * @return array
     */
    public function transform(Sale $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
