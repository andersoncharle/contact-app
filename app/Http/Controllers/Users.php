<?php

namespace App\Http\Controllers;
/*
 * controller act as intermediate btn models and views.
 * so it control the data from the database and display them on the views page.
 * controller used to fetch data from database and display them in the view.
 *
 *
 * */

use App\Models\Companies;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Users extends Controller
{

    public function index($username): array
{
//    echo "This is  ".$username."  controller";
return ['name'=>'anderson','age'=>29,'favourites'=>$username];
}
 public static function homeView(): Factory|View|Application
 {
//$data=['anderson','rose','charles'];
     $data = Companies::all();
//dd($data);['users'=>$data]
return view('home_page',compact('data'));

}
}
