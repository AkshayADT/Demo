<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\Group;

class IndexController extends Controller
{
    public function index(){
        return Member::with('getGroup')->get();
        // return Member::with('getgroup')->get();
    }

//only group data indore mumbai
public function group(Group $id){

    //=================================
    // return Group::get();

    //=================================
//     $data = Group::with('getMember')->get() ;
//     echo '<pre>';
//    print_r($data->toArray()) ;
//    echo '</pre>';

    //=================================
return $id;
}

}
