<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//         $user = User::find(1);
      #   add permission for user
//        $user->roles()->attach(2, [
//            'note' => 'this is remake for you with role equal 2'
//        ]);
//        $user->roles()->attach(3);

        // sync permission
//        $user->roles()->sync([2]);

        # delete a permission
        //$user->roles()->detach();

//        foreach ($user->roles as $role) {
//            echo $role->name,'<br>';
//
//            # access into table role_user
//            echo $role->pivot->user_id,'<br>';  # get user_id
//            echo $role->pivot->role_id,'<br>';  # get user_id
//            echo $role->pivot->created_at,'<br>';  # get user_id
//
//            echo $role->pivot->note,'<br>';  # get user_id
//        }
        //dd($user->roles);


        $role = Role::find(1);
        //$role->users()->attach(1, ['note' => 'from role 1 assign user1']);

        foreach ($role->users as $user) {
            echo $user->name,'<br>';

            # access into table role_user
            echo $user->pivot->user_id,'<br>';  # get user_id
            echo $user->pivot->role_id,'<br>';  # get user_id
            echo $user->pivot->created_at,'<br>';  # get user_id

            echo $user->pivot->note,'<br>';  # get user_id
        }
//        dd($role->users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
