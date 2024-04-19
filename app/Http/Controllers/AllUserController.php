<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AllUserController extends Controller
{
    public function index()
    {
        $users = User::where('hide',0)->get();
        return view('BackEnd.user.index',compact('users'));
    }

    public function showBlockedUsers()
    {
        $users = User::where('hide',1)->get();
        return view('BackEnd.user.bannedUsers',compact('users'));
    }

    public function blockUser($id) {
        $user = User::find($id);
        $user->update([
            'hide' => 1,
        ]);
        // dd($user->hide);
        return redirect()->back()->with('success', 'The block process was completed successfully.');
    }
    public function UnblockedUser($id) {
        $user = User::find($id);
        $user->update([
            'hide' => 0,
        ]);
        return redirect()->back()->with('success', 'The unblock process was completed successfully.');
    }
    public function toggleAdminStatus($id)
    {
        $user = User::find($id);
        $user->is_admin = !$user->is_admin; 
        $user->save();

        return response()->json($user->is_admin ? 1 : 0);
    }
}
