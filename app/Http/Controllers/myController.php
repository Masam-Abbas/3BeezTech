<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class myController extends Controller
{
    function index()
    {
        return view('index');
    }
    function about()
    {
        return view('about');
    }
    function blog()
    {
        return view('blog');
    }
    function contact()
    {
        return view('contact');
    }

    function services()
    {
        return view('services');
    }
    function detail()
    {
        return view('detail');
    }
    function team()
    {
        return view('team');
    }

    function contact_form(Request $request)
    {
        $done = Contact::create($request->all());

        if ($done) {
            return redirect('contact')->with('message', 'Query sent successfully');
        }
        return "Sorry There is an error";
    }

    function register()
    {
        return view('register');
    }

    function register_process(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm-password' => 'required|same:password',
                'profile_pic' => 'required', 'image',
            ]
        );

        // return $request->all();

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $image = $request->profile_pic;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->profile_pic->move('uploads/users', $imagename);
        $user->profile_pic = $imagename;
        $user->save();

        return redirect('/showall_team')->with('message', 'User added successfully');
    }

    function user_edit($id)
    {
        $info = User::find($id);

        return view('user_edit', ['data' => $info]);
    }

    function user_update(Request $request, $id)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm-password' => 'required|same:password',
                'profile_pic' => 'required', 'image',
            ]
        );

        // $id = $request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);

        $image = $request->profile_pic;
        if ($image) {
            // $products::find($id);
            // unlink('uploads/products/' . $products->product_image);
            // $products->delete();

            $imagename = time() . '_' . $image->getClientOriginalExtension();
            $request->profile_pic->move('uploads/users', $imagename);
            $user->profile_pic = $imagename;
        }

        $user->update();
        return redirect('/showall_team')->with('message', 'Product Updated Successfully');
    }

    function user_delete($id)
    {
        $delete = User::find($id);
        unlink('uploads/users/' . $delete->profile_pic);
        $delete->delete();

        return redirect('showall_team');
    }


    function login()
    {
        return view('login');
    }

    function login_process(Request $request)
    {

        // return $request->all();
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        $email = $request->email;
        $password = $request->password;


        $done = Auth::attempt(['email' => $email, 'password' => $password]);

        if ($done) {
            return redirect('/');
        }

        return "<h2>There is some error</h2>";
    }

    function profile()
    {
        $data = Auth::user();
        return view('dashboard-profile', ['data' => $data]);
    }

    function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    function dashboard_admin()
    {
        $data = Auth::user();
        return view('dashboard-admin', ['data' => $data]);
    }

    // Team Section

    function showall()
    {

        $data = User::all();

        return view('showall_team', ['data' => $data]);
    }

    function user_add()
    {

        return view('user_add');
    }
    function user_login()
    {

        return view('user_login');
    }
    function user_profile()
    {

        $data = Auth::user();
        return view('user_profile', ['data' => $data]);
    }
}
