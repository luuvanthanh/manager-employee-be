<?php

namespace Hrm\User\Repositories\Eloquent;

// use GGPHP\Crm\Category\Models\Branch;
// use GGPHP\Crm\Category\Presenters\BranchPresenter;
// use GGPHP\Crm\Category\Repositories\Contracts\BranchRepository;

use Hrm\User\Models\Employee;
use Hrm\User\Presenters\EmployeePresenter;
use Hrm\User\Repositories\Contracts\EmployeeRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class InOutHistoriesRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquent;
 */
class EmployeeRepositoryEloquent extends BaseRepository implements EmployeeRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_at',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Employee::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return EmployeePresenter::class;
    }

    public function getAll(array $attributes)
    {
        if (!empty($attributes['key'])) {
            $this->model = $this->model->where('name', 'like', '%' . $attributes['key'] . '%');
        }

        if (!empty($attributes['limit'])) {
            $employees = $this->paginate($attributes['limit']);
        } else {
            $employees = $this->get();
        }

        return $employees;
    }

    public function create(array $attributes)
    {
        $attributes = $this->creating($attributes);

        $result = Employee::create($attributes);

        return parent::parserResult($result);
    }

    public function creating($attributes) {
        $employee = Employee::latest()->first();

        if ($employee) {
            $stt = substr($employee['code'], 2);
            $stt += 1;
            
            if (strlen($stt) == 1) {
                $attributes['code'] = Employee::CODE . '00' . $stt;
            }elseif (strlen($stt) == 2) {
                $attributes['code'] = Employee::CODE . '0' . $stt;
            }else {
                $attributes['code'] = Employee::CODE . $stt;
            }
        }else {
            $attributes['code'] = Employee::CODE . '001';
        }

        return $attributes;
    }

    public function update(array $attributes, $id)
    {
        $employee = Employee::findOrfail($id);

        $employee->update($attributes);

        return parent::find($id);
    }
}
