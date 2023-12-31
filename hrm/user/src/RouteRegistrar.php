<?php

namespace Hrm\User;

use Hrm\User\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Manager\Core\RouteRegistrar as CoreRegistrar;

class RouteRegistrar extends CoreRegistrar
{
    /**
     * The namespace implementation.
     */
    // protected static $namespace = '\GGPHP\Crm\Category\Http\Controllers';

    /**
     * Register routes for bread.
     *
     * @return void
     */
    public function all()
    {
        // $this->forBread();
        // $this->forGuest();
    }

    /**
     * Register the routes needed for managing clients.
     *
     * @return void
     */
    public function forBread()
    {
        // $this->router->group(['middleware' => []], function ($router) {
        //     \Route::resource('status-parent-potentials', 'StatusParentPotentialController');
        //     \Route::resource('status-parent-leads', 'StatusParentLeadController');
        //     \Route::resource('tags', 'TagController');
        //     \Route::resource('search-sources', 'SearchSourceController');
        //     \Route::resource('status-admission-registers', 'StatusAdmissionRegisterController');
        //     \Route::resource('branches', 'BranchController')->except('index');
        //     \Route::resource('category-events', 'CategoryEventController');
        //     \Route::resource('category-relationships', 'CategoryRelationshipController');
        //     \Route::post('sync-branch', 'BranchController@syncBranch');
        // });
    }

    public function forGuest()
    {
        Route::resource('/user', UserController::class);
        // $this->router->group(['middleware' => []], function ($router) {
        //     \Route::resource('branches', 'BranchController')->only('index');
        // });
    }
}
