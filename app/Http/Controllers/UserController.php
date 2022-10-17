<?php

namespace App\Http\Controllers;

use App\Http\Services\UserServices;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit_profile(Request $request)
    {
        return UserServices::editProfile($request->all(), $request->image);
    }

    public function travellers(Request $request)
    {
        return UserServices::userTravellers();
    }

    public function add_traveller(Request $request)
    {
        return UserServices::addTraveller($request->all());
    }

    public function update_traveller(Request $request)
    {
        return UserServices::updateTraveller($request->all());
    }
}
