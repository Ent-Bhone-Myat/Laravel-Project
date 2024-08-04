<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //Profile
    public function profile()
    {
        return view('profile');
    }

    // Profile Edit
    public function edit(Request $request)
    {
        // Validation
        $this->vali($request);

        // Data Arrange
        $data = $this->dataArrange($request);

        // Image Store
        if ($request->hasFile('image')) {
            $dbImage = User::where('id', Auth::user()->id)->value('image');
            // Delete old image from storage folder
            if ($dbImage != NULL) {
                Storage::delete('public/profile/' . $dbImage);
            }
            $imageName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/profile', $imageName);

            $data['image'] = $imageName;

            User::where('id', Auth::user()->id)->update($data);
            return back()->with(['success' => 'Profile update success']);
        }
    }

    // Change Password
    public function password(Request $request)
    {
        $this->passwordVali($request);
        $dbData = User::where('id', Auth::user()->id)->first();
        $dbPassword = $dbData->password;
        if (Hash::check($request->oldPassword, $dbPassword)) {
            $newPassword = Hash::make($request->newPassword);
            User::where('id', Auth::user()->id)->update(['password' => $newPassword]);
            Auth::guard('web')->logout();
            return redirect()->route('login')->with(['success' => 'change password success']);
        } else {
            return back()->with(['error' => 'Old password do not match']);
        }
    }

    // Check Password Validation
    private function passwordVali($request)
    {
        $rules = [
            'oldPassword' => 'required',
            'newPassword' => 'required | min:6 | different:oldPassword',
            'confirmPassword' => 'required | same:newPassword'
        ];
        Validator::make($request->all(), $rules)->validate();
    }

    // Private function for DataArrange
    private function dataArrange($request)
    {
        return [
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'phone' => $request->phone,
            'address' => $request->address
        ];
    }
    // Private function for validation
    private function vali($request)
    {
        $rules = [
            'name' => 'required | string',
            'age' => 'required',
            'phone' => 'required',
            'image' => 'image | mimes:jpeg,jpg,png'
        ];

        $messages = [
            'name.required' => 'Please enter your name',
            'name.string' => 'Only letter accepted',
            'age.required' => 'Please enter your age',
            'phone.required' => 'Please enter your phone',
            'image.image' => 'Only image file accepted',
            'image.mimes' => 'Only jpeg, jpg and png files are accepted'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();
    }
}
