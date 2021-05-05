<?php

namespace App\Http\Controllers\Admin;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
    
        $user = User::where('id','!=',Auth::user()->id)->paginate(10);
        return view('admin.users.user', compact('user'));
    }
    public function update_type($id)
    {
        $user=User::find($id);
        return view('admin.users.update',compact('user'));
    }
    public function update(Request $request)
    {
        $user=User::find($request-> id);
        $user->user_type=$request->user_type;
        $user->email=$request->email;
        $user->name=$request->name;
        $user->save();
        return redirect('admin/all-user');
    }
    public function delete($id)
    {
       $user = User::find($id);
       $user->delete();
        return redirect()->back();
    }

   }
