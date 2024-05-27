<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';

        return view('admin.dashboard.index', compact(['pageTitle']));
    }

    public function profileIndex()
    {
        $pageTitle = 'Manage Profile';
        $admin = auth('admin')->user();

        return view('admin.profile.index', compact(['pageTitle', 'admin']));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'image' => ['nullable', 'image', new FileTypeValidate(['jpg', 'jpeg', 'png'])]
        ]);

        $user = auth('admin')->user();

        if ($request->hasFile('image')) {
            try {
                $old = $user->image;
                $user->image = fileUploader($request->image, getFilePath('adminProfile'), getFileSize('adminProfile'), $old);
            } catch (\Exception $err) {
                $notify[] = ['error', 'Couldn\'t upload your image!'];
                return back()->withNotify($notify);
            }
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $notify[] = ['success', 'Profile has been updated successfully!'];
        return to_route('admin.profile.index')->withNotify($notify);
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => ['required', 'min:5', 'confirmed']
        ]);

        $user = auth('admin')->user();

        if (!Hash::check($request->old_password, $user->password)) {
            $notify[] = ['error', 'Password doesn\'t match!'];
            return back()->withNotify($notify);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        $notify[] = ['success', 'Password changed successfully!'];
        return to_route('admin.profile.index')->withNotify($notify);
    }
}
