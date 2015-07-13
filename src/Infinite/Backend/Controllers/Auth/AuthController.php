<?php

namespace Infinite\Backend\Controllers\Auth;
use Infinite\Backend\Controllers\BaseController;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\View;

/**
 *
 * User: YuGang Yang
 * Date: 7/13/15
 * Time: 12:17
 */

class AuthController extends BaseController {

    use AuthenticatesAndRegistersUsers;

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
        //share the config option to all the views
        View::share('siteConfig', config('infinite::config.site_config'));
    }

    public function getLogin() {
        return view('infinite::auth.login');
    }

}