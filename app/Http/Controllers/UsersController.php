<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

use P3\Http\Requests;

class UsersController extends Controller
{
    function index() {
        return view('users.index', ['title' => 'User Generator']);
    }

    function show(Request $request) {
        // validate input
        $this->validate($request, ['userCount' => 'required|numeric|max:99']);

        //generate number of users
        for ($i = 0; $i < $request->input('userCount'); $i++) {
            $faker = \Faker\Factory::create();

            // generate user name and add to
            $users[$i]['name'] = $faker->name;

            // add birthdate and profile if requested
            if ($request->input('birthdate') == 'Y')
                $users[$i]['birthdate'] = $faker->date('m/d/Y');
            if ($request->input('profile') == 'Y')
                $users[$i]['profile'] = $faker->paragraph();
        }

        // show users view
        return view('users.show',
            ['users' => $users,
             'title' => 'User Generator']);
    }
}
