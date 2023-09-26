<?php

namespace Hrm\User\Transformers;

use Manager\Core\Transformers\BaseTransformer;

/**
 * Class .
 *
 * @package namespace App\Transformers;
 */
class EmployeeTransformer extends BaseTransformer
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $defaultIncludes = [];
   
    /**
     * Array attribute doesn't parse.
     */
    public $ignoreAttributes = [];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [];

    /**
     * Transform the CategoryDetail entity.
     *
     * @param Employee 

     *
     * @return array
     */
    public function customAttributes($model): array
    {
        return [];
    }
}
