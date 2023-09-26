<?php
namespace Hrm\User\Presenters;

use Hrm\User\Transformers\EmployeeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class EmployeePresenter extends FractalPresenter
{
    /**
     * @var string
     */
    public $resourceKeyItem = 'Employee';

    /**
     * @var string
     */
    public $resourceKeyCollection = 'Employies';
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EmployeeTransformer();
    }
}