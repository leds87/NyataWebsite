<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userdata_controller extends Controller
{

    public function index()
    {
        return view('adminpage.adminlogin');
    }

    public function store(Request $request)
    {
        // //CREATE CUSTOM ID
        // $prefix = "U";
        // $count = userdata::count() + 1;

        // // Create a formatted ID with a prefix and padded count
        // $formattedCount = str_pad($count, 3, '0', STR_PAD_LEFT);
        // $customId = $prefix . $formattedCount;
        // // dd($customId);

        $data = $request->validate(
            [
                'name' => 'required|max:100',
                'email' => 'required',
                'password' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'tier' => 'required',
                'note' => 'required',
                'since' => 'required',
                'status' => 'required',
            ]
        );
        $data['log'] = 'user';
        // $data['user_id'] = $customId;
        $data['password'] = Hash::make($data['password']);
        userdata::create($data);
        return redirect('/adminpage')->with("success", "Data " . $request->name . " Has been input.");
    }

    public function showdata()
    {
        $data = userdata::all();
        return view('adminpage.usershow', ['data' => $data]);
    }

    public function destroy($id)
    {
        $data = userdata::find($id);
        $data->delete();
        return redirect('usershow')->with("success", "Data Deleted!");
    }

    public function update(Request $request, $id)
    {
        $data = userdata::find($id);

        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        // $data->password = $request->password;
        $data->phone = $request->phone;
        $data->tier = $request->tier;
        $data->note = $request->note;
        $data->since = $request->since;
        $data->status = $request->status;

        // $data['password'] = Hash::make($data['password']);
        $data->save();
        return redirect('profile')->with("success", "Data Updated");
    }


    public function changePassword(Request $request, $id)
    {
        // $user = Auth::user()->id;
        // $userupdate = userdata::where('id', $user)->get();

        $data = userdata::find($id);
        $data->password = $request->password;
        // $data = $request->validate([
        //     'current_password' => 'required',
        //     'new_password' => 'required|min:8|different:current_password',
        //     'confirm_password' => 'required|same:new_password',
        // ]);

        // dd($data);

        // $userupdate->password = $request->password;
        $data['password'] = Hash::make($data['password']);
        // $password = Hash::make($request->new_password);
        $data->save();

        // // Check if the current password matches the one in the database
        // if (!Hash::check($request->current_password, $userupdate->password)) {
        //     return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        // }

        // // Update the password
        // $userupdate->update(['password' => Hash::make($request->new_password)]);

        return redirect()->route('profile')->with('success', 'Password changed successfully!');
    }


    public function edit($id)
    {
        $data = userdata::find($id);
        return view('adminpage.useredit', [
            'data' => $data,
        ]);
    }
}
