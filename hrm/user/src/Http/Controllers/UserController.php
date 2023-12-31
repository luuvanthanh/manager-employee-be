<?php

namespace Hrm\User\Http\Controllers;

use Hrm\User\Http\Requests\EmployeeCreateRequest;
use Hrm\User\Models\Employee;
use Hrm\User\Repositories\Contracts\EmployeeRepository;
use Illuminate\Http\Request;
use Manager\Core\Http\Controllers\Controller;

class UserController extends Controller
{
     /**
     * @var $employeeRepository
     */
    protected $employeeRepository;

    /**
     * UserController constructor.
     * @param StatusParentLeadRepository $inOutHistoriesRepository
     */
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }
    /**
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index(Request $request)
    {
        $employees = $this->employeeRepository->getAll($request->all());

        return $this->success($employees, trans('lang::messages.common.getListSuccess'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeCreateRequest $request)
    {
        dd($request->all());
        $credentials = $request->all();
        $result = $this->employeeRepository->create($credentials);

        return $this->success($result, trans('lang::messages.common.createSuccess'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = $this->employeeRepository->find($id);

        return $this->success($result, trans('lang::messages.common.getInfoSuccess'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $credentials = $request->all();

        $result = $this->employeeRepository->update($credentials, $id);

        return $this->success($result, trans('lang::messages.common.modifySuccess'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $this->employeeRepository->delete($id);

        return $this->success([], trans('lang::messages.common.deleteSuccess'));
    }
}