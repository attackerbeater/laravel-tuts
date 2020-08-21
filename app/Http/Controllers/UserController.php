<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile()
    {
        // return view('user.profile', ['user' => User::findOrFail($id)]);
        return __METHOD__;
    }

}