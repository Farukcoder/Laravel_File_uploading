<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DawonloadController extends Controller
{
    public function OnDawonload($folderPath,$name){
        return storage::download($folderPath."/".$name);

    }


    public function OnSelectFile(){
        $result = DB::table('file_uploading')->get();
//        dd($result);
        return $result;
    }

    public function DeleteFile(){
        Storage::delete('images/4azYg2VneVyw1AKp0aW9ZPf5sLhsPzXnUTGYbhiR.jpg');
    }
}
