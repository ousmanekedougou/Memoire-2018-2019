<?php

use App\Model\Admin\Info;
use App\Model\Admin\Social;
use App\Model\Admin\Hopital;
use App\Model\Admin\Medecin;
use App\Model\Admin\Category;
use App\Model\Admin\Departement;
use App\Model\Admin\Rendez_vous;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

if(! function_exists('notification_pour_client')){
    function notification_pour_client()
    {
        $notification_client = Rendez_vous::where(['user_id'=>Auth::user()->id,'view_user'=>1])->get();
        return $notification_client;
    }
}


if(! function_exists('notification_pour_medecin')){
    function notification_pour_medecin()
    {
        $notification_medecin = Rendez_vous::where(['medecin_id'=>Auth::guard('medecin')->user()->id,'view_medecin'=>1])->get();
        return $notification_medecin;
    }
}

if(! function_exists('page_category')){
    function page_category()
    {
        $category = Category::paginate(10);
        return $category;
    }
}

if(! function_exists('footer_category')){
    function footer_category()
    {
        $category = Category::paginate(6);
        return $category;
    }
}

if(! function_exists('all_category')){
    function all_category()
    {
        $category = Category::all();
        return $category;
    }
}

if(! function_exists('all_info')){
    function all_info()
    {
        $info = Info::first();
        return $info;
    }
}


if(! function_exists('all_reseau')){
    function all_reseau()
    {
        $reseau = Social::all();
        return $reseau;
    }
}


if(! function_exists('departementFor')){
    function departementFor(Medecin $medecin)
    {
        $departements = $medecin->departement->region->departements;
        return $departements;
    }
}

if(! function_exists('hopitalFor')){
    function hopitalFor(Medecin $medecin)
    {
        $opitals = $medecin->departement->hopitals;
        return $opitals;
    }
}

if(! function_exists('all_hopital')){
    function all_hopital()
    {
        $hopital = Hopital::all();
        return $hopital;
    }
}

if(! function_exists('all_departement')){
    function all_departement()
    {
        $departement = Departement::all();
        return $departement;
    }
}

if(! function_exists('set_route_active')){
    function set_route_active($route)
    {
        return Route::is($route) ? 'active_page' : '';
    }
}
if(! function_exists('page_title')){
    function page_title($title)
    {
        $page_title = 'RV-Medical';
        if ($title === '' ) {
            return $page_title;
        }else {
            return $title . ' - ' . $page_title;
        }
    }
}
// if(! function_exists('set_page_active')){
//     function set_page_active($page)
//     {
//         $patient = Auth::guard('web')->user()->departement->region->name;
     
//         if ($patient == "Kedougou") {
//             return ($page) ? 'active' : '';
//         }
//     }
// }

