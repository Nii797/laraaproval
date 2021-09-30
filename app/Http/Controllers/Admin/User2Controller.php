<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User2;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "This is User 2";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function edit(User2 $user2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User2 $user2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User2  $user2
     * @return \Illuminate\Http\Response
     */
    public function destroy(User2 $user2)
    {
        //
    }
}
