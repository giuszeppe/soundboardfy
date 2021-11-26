<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Logout the user and then destroy his account
     */
    public function destroy(Request $request)
    {
        if(!Auth::user()){
            return new JsonResponse(['text' => "Not logged in, login to delete your account"], 401);
        }
        $user = User::find(Auth::user()->id);

        Auth::logout();
        
        if($user->delete()){
            return $request->wantsJson() 
            ? new JsonResponse(["text" => "Account deleted"],200) 
            : Redirect::route('/');
        }
    }
}
