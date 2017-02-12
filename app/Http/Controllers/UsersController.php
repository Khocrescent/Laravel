<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;

class UsersController extends Controller
{
    public function show_u()
    {
        // $user = Users::where('ticket_id', $ticket_id)->firstOrFail();
        $user = User::all();
        return view('tickets.admin_show_users', compact('user'));
    }

    public function delete($userName)
{
    $user = User::where('name', $userName)->delete();

    return redirect()->back()->with("status", "The user has been deleted.");
}
}
