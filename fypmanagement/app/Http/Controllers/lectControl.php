<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lect;
use Illuminate\Support\Facades\DB;

class lectControl extends Controller
{
    function registerForm(){
        return view("register_lect");
    }

    function showList(){
        $data = lect::all();
        return view("view_lect_list", ["data"=>$data]);
    }

    function registerProcess(Request $req){
        $new_lect = new lect;
        $new_lect->id = $req->lect_id;
        $new_lect->name = $req->lect_name;
        $new_lect->contact = $req->lect_contact;
        $new_lect->password = $req->lect_password;
        $new_lect->is_coord = 0;
        $new_lect->save();
        return redirect("/lect");
    }

    function updateForm($id){
        $cur_lect = lect::find($id);
        return view("update_lect", ["cur"=>$cur_lect]);
    }

    function updateProcess(Request $req){
        $lect_upt = lect::find($req->lect_id);
        $lect_upt->id = $req->lect_id;
        $lect_upt->name = $req->lect_name;
        $lect_upt->contact = $req->lect_contact;
        $lect_upt->password = $req->lect_password;
        $lect_upt->is_coord = 0;
        $lect_upt->save();
        return redirect("/lect");
    }
    
    function deleteLect($id){
        $lect = lect::find($id);
        $lect->delete();
        return redirect("lect");
    }

    function resetForm($id){
        $cur_lect = lect::find($id);
        return view("lect_password_form", ["cur"=>$cur_lect]);
    }
}
