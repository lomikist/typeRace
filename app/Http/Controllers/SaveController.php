<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class SaveController extends BaseController{
    public function store(Request $request)
    {
        $file = file_get_contents(__FILE__, FILE_USE_INCLUDE_PATH);
        $file = str_replace( array("\r","\t","\n"),' ',$file);
        $array = explode(' ',$file);
        return response()->json(
            array(
                'content'=>$array,
            )
        );
    }
}
