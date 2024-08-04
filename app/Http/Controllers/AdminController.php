<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // User Account List
    public function userList()
    {
        $data = User::where('role', 'user')->paginate(10);
        return view('admin.userList', compact('data'));
    }

    // User Detail
    public function userDetail($id)
    {
        $data = User::where('id', $id)->first();
        return view('admin.userDetail', compact('data'));
    }

    // User Account Promote to Admin
    public function promote($id)
    {
        User::where('id', $id)->update(['role' => 'admin']);
        return redirect()->route('user.list')->with(['success' => 'User role has been changed to admin']);
    }

    // User Delete
    public function userDelete($id)
    {
        $dbImage = User::where('id', $id)->value('image');
        if($dbImage != NULL){
            Storage::delete('public/profile/' . $dbImage);
        }
        User::where('id', $id)->delete();
        return back()->with(['success' => 'User account has been deleted']);
    }

    // Admin Account List
    public function adminList()
    {
        $data = User::where('role', 'admin')->paginate(10);
        return view('admin.adminList', compact('data'));
    }

    // Admin Detail
    public function adminDetail($id)
    {
        $data = User::where('id', $id)->first();
        return view('admin.adminDetail', compact('data'));
    }

    // Admin Account Change to User
    public function changeUser($id)
    {
        User::where('id', $id)->update(['role' => 'user']);
        return redirect()->route('admin.list')->with(['success' => 'Admin role has been changed to user']);
    }

    // Admin Delete
    public function adminDelete($id){
        User::where('id', $id)->delete();
        return back()->with(['success' => 'Admin account has been deleted']);
    }
}
