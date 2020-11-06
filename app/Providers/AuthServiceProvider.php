<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function __construct()
    {
    //$this->middleware('auth');
    $this->middleware(function($request, $next){
    if(Gate::allows('manage-articles')) return $next($request);
    abort(403, 'Anda tidak memiliki cukup hak akses');
    });
}
}
