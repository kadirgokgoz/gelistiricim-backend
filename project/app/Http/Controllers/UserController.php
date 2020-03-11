<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;
/**
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     host="localhost",
 *     basePath="/api",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Gelistiricim API",
 *         description="Open Source Coder's Platform",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="info@gelistiricim.com"
 *         ),
 *         @SWG\License(
 *             name="Lisans",
 *             url="URL to the license"
 *         )
 *     ),
 * )
 */
class UserController extends Controller
{
    function index(){
        $all_user = User::all();
        if(is_null($all_user)){
            $all_user="NULL";
        }
        return response(
            [
            "result"=>$all_user,
            "status"=>"OK"
            ],200);
    }
}
