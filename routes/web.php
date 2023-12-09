<?php

use App\Http\Middleware\DetectDevice;
use App\Models\Dashboard\Menu_panel;
use App\Models\Dashboard\Submenu_panel;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function (){
    $menus    =  Menu::select('slug' , 'class' , 'submenu_route' , 'submenu')->get();
    $submenus =  Submenu::select('id' , 'slug' , 'class')->get();

    foreach ($menus as $menu)
    {
        if($menu->submenu == 0) {
            Route::get($menu->slug, [App\Http\Controllers\Site\IndexController::class, $menu->class])->name($menu->slug);
        }else {
            foreach ($submenus as $submenu) {
                if ($menu->submenu_route == 1) {
                    if ($submenu->menu_id == $menu->id) {
                        Route::get($menu->slug . '/' . $submenu->slug , [App\Http\Controllers\Site\IndexController::class, $submenu->class]);
                    }
                }
            }
        }
    }

    Route::group(['namespace' => 'App\Http\Controllers\Site'] , function (){
        // Authentication Routes...
        Route::get('profile'      , 'ProfileController@profile')->name('profile');
        Route::get('setting'      , 'ProfileController@setting')->name('setting');
        Route::get('message'      , 'ProfileController@message')->name('message');
        Route::get('userrequest'  , 'ProfileController@userrequest')->name('user-request');
        Route::post('edit-user-profile' , 'ProfileController@edituserprofile')->name('edit-user-profile');
        Route::post('change-password'   , 'ProfileController@changepassword')->name('change-password');
    });

    Route::post('/getcategory'           , [App\Http\Controllers\Site\IndexController::class, 'getcategory'])        ->name('getcategory');
    Route::get('/reload-captcha'     , [App\Http\Controllers\Site\IndexController::class, 'reloadCaptcha']);
    Route::post('/Consultationrequest', [App\Http\Controllers\Site\IndexController::class, 'Consultationrequest'])->name('Consultationrequest');
    Route::get('اخبار'.'/'.'{slug}'  , [App\Http\Controllers\Site\IndexController::class, 'singleakhbar']);
    Route::get('شرایط-ضوابط'         , [App\Http\Controllers\Site\IndexController::class   , 'terms'])           ->name('شرایط-ضوابط');

    //    Route::get('course'             , [App\Http\Controllers\Site\CourseController::class  , 'index'])           ->name('course');
//    Route::get('contact'            , [App\Http\Controllers\Site\MobileController::class   , 'contact'])         ->name('contact');
//    Route::get('privacypolicy'      , [App\Http\Controllers\Site\MobileController::class   , 'privacypolicy'])   ->name('privacypolicy');
//    Route::get('careers'            , [App\Http\Controllers\Site\MobileController::class   , 'careers'])         ->name('careers');
//    Route::get('categories'         , [App\Http\Controllers\Site\MobileController::class   , 'categories'])      ->name('categories');
//    Route::get('faq'                , [App\Http\Controllers\Site\MobileController::class   , 'faq'])             ->name('faq');
//    Route::get('lessondetails'      , [App\Http\Controllers\Site\MobileController::class   , 'lessondetails'])   ->name('lessondetails');
//    Route::get('shoppingcart'       , [App\Http\Controllers\Site\PriceController::class   , 'shoppingcart'])    ->name('shoppingcart');
//    Route::get('checkout'           , [App\Http\Controllers\Site\PriceController::class   , 'checkout'])        ->name('checkout');
//    Route::get('pricetable'         , [App\Http\Controllers\Site\PriceController::class   , 'pricetable'])      ->name('pricetable');
//    Route::get('recover'            , [App\Http\Controllers\Site\PriceController::class   , 'recover'])         ->name('recover');
//    Route::get('mycourse'           , [App\Http\Controllers\Site\CourseController::class  , 'my'])              ->name('mycourse');
//    Route::get('coursemain'         , [App\Http\Controllers\Site\CourseController::class  , 'coursemain'])      ->name('coursemain');
//    Route::get('coursedetail'       , [App\Http\Controllers\Site\CourseController::class  , 'coursedetail'])    ->name('coursedetail');
//    Route::get('coursegrid'         , [App\Http\Controllers\Site\CourseController::class  , 'coursegrid'])      ->name('coursegrid');
//    Route::get('studentdetail'      , [App\Http\Controllers\Site\StudentController::class , 'studentdetail'])   ->name('studentdetail');


});


Route::prefix('admin')->middleware(['auth:web' , 'checkAdmin'])->group(function (){


    $menu_panels    =  Menu_panel::select('slug' , 'controller' , 'class' , 'submenu')->whereStatus(4)->get();
    $submenu_panels =  Submenu_panel::select('id' , 'slug' , 'class' , 'controller' , 'method')->whereStatus(4)->get();

    foreach ($menu_panels as $menu_panel)
    {
        Route::get($menu_panel->slug, ['App\Http\Controllers\Admin\\'.$menu_panel->controller, $menu_panel->class])->name($menu_panel->slug);

        if($menu_panel->submenu == 1){
            foreach($submenu_panels as $submenu_panel) {
                if ($menu_panel->id == $submenu_panel->menu_id) {
                    if($submenu_panel->method == 'resource')
                        Route::resource($submenu_panel->slug                , 'App\Http\Controllers\Admin\\'.$submenu_panel->controller);
                    elseif ($submenu_panel->method == 'get')
                        Route::get($submenu_panel->slug.'/'.'{slug}'    , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                    elseif ($submenu_panel->method == 'post')
                        Route::post($submenu_panel->slug.'/'.'{slug}'   , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                    elseif ($submenu_panel->method == 'put')
                        Route::put($submenu_panel->slug.'/'.'{slug}'    , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                    elseif ($submenu_panel->method == 'patch')
                        Route::patch($submenu_panel->slug.'/'.'{slug}'  , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                    elseif ($submenu_panel->method == 'delete')
                        Route::delete($submenu_panel->slug.'/'.'{slug}' , [$submenu_panel->controller.'::class' , $submenu_panel->class])->name($submenu_panel->slug);
                }
            }
        }
    }

//    Route::get('panel'                            , [App\Http\Controllers\Admin\PanelController::class   , 'index'])->name('/');


    Route::delete('menudashboards'          , [App\Http\Controllers\Admin\MenudashboardController::class    , 'deletemenudashboards'])   ->name('deletemenudashboards');
    Route::delete('submenudashboards'       , [App\Http\Controllers\Admin\SubmenudashboardController::class , 'deletesubmenudashboards'])->name('deletesubmenudashboards');
    Route::delete('permissions'             , [App\Http\Controllers\Admin\PermissionController::class       , 'deletepermissions'])      ->name('deletepermissions');
    Route::delete('roles'                   , [App\Http\Controllers\Admin\RoleController::class             , 'deleteroles'])            ->name('deleteroles');
    Route::delete('deleteadminlevel'        , [App\Http\Controllers\Admin\RoleController::class             , 'deleteadminlevel'])       ->name('deleteadminlevel');
    Route::delete('deleteuser'              , [App\Http\Controllers\Admin\UserController::class             , 'deleteuser'])             ->name('deleteuser');
    Route::delete('deleteslide'             , [App\Http\Controllers\Admin\SlideController::class            , 'deleteslide'])            ->name('deleteslide');
    Route::delete('deleteakhbar'            , [App\Http\Controllers\Admin\AkhbarController::class           , 'deleteakhbar'])           ->name('deleteakhbars');
    Route::delete('deleteblugs'             , [App\Http\Controllers\Admin\BlugController::class             , 'deleteblugs'])            ->name('deleteblugs');
    Route::delete('deletemenus'             , [App\Http\Controllers\Admin\MenuController::class             , 'deletemenus'])            ->name('deletemenus');
    Route::delete('deletemegamenus'         , [App\Http\Controllers\Admin\MegamenuController::class         , 'deletemegamenus'])        ->name('deletemegamenus');
    Route::delete('deletesubmenus'          , [App\Http\Controllers\Admin\SubmenuController::class          , 'deletesubmenus'])         ->name('deletesubmenus');
    Route::delete('deletecustomers'         , [App\Http\Controllers\Admin\CustomerController::class         , 'deletecustomers'])        ->name('deletecustomers');
    Route::delete('deleteportfolios'        , [App\Http\Controllers\Admin\PortfolioController::class        , 'deleteportfolios'])       ->name('deleteportfolios');
    Route::delete('deletecompany'           , [App\Http\Controllers\Admin\CompanyController::class          , 'deletecompany'])          ->name('deletecompany');
    Route::delete('deletecustomertypes'     , [App\Http\Controllers\Admin\CustomertypeController::class     , 'deletecustomertypes'])    ->name('deletecustomertypes');
    Route::delete('deletequestionlists'     , [App\Http\Controllers\Admin\QuestionlistController::class     , 'deletequestionlists'])    ->name('deletequestionlists');
    Route::delete('deleteemploees'          , [App\Http\Controllers\Admin\EmploeeController::class          , 'deleteemploees'])         ->name('deleteemploees');

    Route::post('slides/img'                , [App\Http\Controllers\Admin\MediaController::class            , 'imgupload'])              ->name('img');
    Route::post('gallerypicmanage/img'      , [App\Http\Controllers\Admin\MediaController::class            , 'imgupload'])              ->name('img');
    Route::post('panel/id'                  , [App\Http\Controllers\Admin\PanelController::class            , 'getsubmenu'])             ->name('getsubmenu');
    Route::post('profile/createuser'        , [App\Http\Controllers\Admin\UserController::class             , 'createuser'])             ->name('createuser');

    Route::PATCH('profile/update'           , [App\Http\Controllers\Admin\ProfileController::class          , 'update'])                 ->name('edituser');

});

Route::group(['namespace' => 'App\Http\Controllers\Auth'] , function (){
    // Authentication Routes...
    Route::get('login'                    , 'LoginController@showLoginuserForm')    ->name('login');
    Route::get('login/{provider}'         , 'LoginController@redirectToProvider')   ->name('redirectToProvider');
    Route::get('login/{provider}/callback', 'LoginController@handleProviderCallback')->name('handleProviderCallback');
    Route::get('remember'                 , 'LoginController@showLoginrememberForm')->name('remember');
    Route::post('remember'                , 'LoginController@remember')             ->name('remember');
    Route::post('login-user'              , 'LoginController@loginuser')            ->name('login-user');
    Route::get('logout'                   , 'LoginController@logout')               ->name('logout');
    Route::get('reload-captcha'           , 'LoginController@reloadcaptcha')        ->name('reload-captcha');
    Route::get('token'                    , 'TokenController@showToken')            ->name('phone.token');
    Route::post('token'                   , 'TokenController@token')                ->name('verify.phone.token');
    Route::get('setpass'                  , 'TokenController@setpassshow')          ->name('setpass');
    Route::post('setpass'                 , 'TokenController@update')               ->name('setpass');
    Route::get('register'                 , 'RegisterController@showRegistrationuserForm');
    Route::post('register'                , 'RegisterController@registeruser')->name('register');

});

Route::group(['namespace' => 'App\Http\Controllers\Auth' , 'prefix' => 'admin'] , function (){
    // Authentication Routes...
    Route::get('login'      , 'LoginController@showLoginForm')->name('panellogin');
    Route::post('login'     , 'LoginController@login');
    Route::get('logout'     , 'LoginController@logout')->name('panellogout');
});

