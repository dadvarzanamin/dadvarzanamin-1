<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Akhbar;
use App\Models\Company;
use App\Models\Dashboard\Customer;
use App\Models\Dashboard\Slide;
use App\Models\Emploee;
use App\Models\mega_menu;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index(Request $request){
        $url = $request->segments();
        $menus        = Menu::select('id' , 'title' , 'slug' , 'submenu' , 'priority' , 'mega_menu')->whereStatus(4)->orderBy('priority')->get();
        if (count($url) == 1) {
            $thispage = Menu::select('id' , 'title', 'slug', 'tab_title', 'page_title', 'keyword', 'page_description')->whereSlug($url[0])->first();
        }else{
            $thispage = Submenu::select('id' , 'title', 'slug', 'tab_title', 'page_title', 'keyword', 'page_description')->whereSlug($url[1])->first();
        }
        $megacounts = mega_menu::selectRaw('COUNT(*) as count, menu_id')
            ->groupBy('menu_id')
            ->get()
            ->toArray();
        $megamenus          = mega_menu::all();
        $submenus           = Submenu::select('id' , 'title' , 'slug' , 'menu_id' , 'megamenu_id')->whereStatus(4)->get();

        $companies          = Company::first();
        $servicelawyers     = Submenu::select('title' , 'slug' , 'menu_id' , 'image' , 'megamenu_id')->whereStatus(4)->whereMegamenu_id(4)->whereMenu_id(64)->get();
        $serviceclients     = Submenu::select('title' , 'slug' , 'menu_id' , 'image' , 'megamenu_id')->whereStatus(4)->whereMegamenu_id(5)->whereMenu_id(64)->get();
        $slides             = Slide::select('id', 'file_link')->whereMenu_id($thispage['id'])->whereStatus(4)->get();
        $customers          = Customer::select('name' , 'image')->whereStatus(4)->whereHome_show(1)->get();
        $emploees           = Emploee::whereStatus(4)->get();
        $akhbars            = Akhbar::leftjoin('users' , 'akhbars.user_id' , '=' , 'users.id')->
        select('akhbars.title' ,'akhbars.slug' ,'akhbars.image' ,'akhbars.description' ,'users.name as username' ,'akhbars.updated_at')->where('akhbars.status' , 4)->where('akhbars.home_show' , 1)->get();
        return view('Mobile.index')
            ->with(compact('menus','thispage' , 'companies' , 'slides' , 'customers' , 'submenus' , 'servicelawyers', 'serviceclients' , 'akhbars' , 'megamenus' , 'megacounts' , 'emploees'));
    }

}
