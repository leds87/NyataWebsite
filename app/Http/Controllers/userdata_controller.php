<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userbalance;
use App\Models\userdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Mail\register as registermail;
use App\Mail\register;

class userdata_controller extends Controller
{

    public function index()
    {
        return view('adminpage.adminlogin');
    }

    public function store(Request $request)
    {
        //CREATE CUSTOM ID
        $prefix = "U";
        $count = userdata::count() + 1;

        // Create a formatted ID with a prefix and padded count
        $formattedCount = str_pad($count, 3, '0', STR_PAD_LEFT);
        $customId = $prefix . $formattedCount;

        $data = $request->validate(
            [
                'name' => 'required|max:100',
                'email' => 'required|unique:userdata,email',
                'password' => 'required|confirmed',
                'address' => 'required',
                'phone' => 'required',
                'tier' => 'required',
                'note' => 'required',
                'since' => 'required',
                'status' => 'required',
                'image' => 'image|file|max:2048'
            ],
            [
                'email.unique' => 'Email telah digunakan, silakan gunakan email lain!',
                'password.confirmed' => 'Password Confirmation doesnt match!'
            ]
        );

        $data['log'] = 'user';
        $data['slug'] = $request->name . '%' . $customId;

        // $data['user_id'] = $customId;
        $data['password'] = Hash::make($data['password']);


        if ($request->image) {
            $image = $request->file('image');
            $imagename = $request->name . '_picture_' . time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('user-image', $imagename, 'public');
            $data['image'] = $path;
            // Storage::disk('public')->move($image, $path);
        }
        userdata::create($data);

        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'description' => $request->description
        ];
        Mail::to($request->email)->send(new register($mailData));


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
        // $data->image = $request->image;

        if ($request->image) {
            $image = $request->file('image');
            $imagename = $data->name . '_picture_' . time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('user-image', $imagename, 'public');
            // Storage::disk('public')->put($image, 'user-image');
            $data['image'] = $path;
            // Delete current images 
            if ($request->oldimage) {
                $filename =   $request->oldimage;
                Storage::disk('public')->delete($filename);
            }
        }

        $data['password'] = Hash::make($data['password']);
        // dd($data);
        $data->save();
        return redirect('profile')->with("success", "Data Updated");
    }

    public function changePassword(Request $request, $id)
    {
        // $request->validate([
        //     'current_password' => ['required'],
        //     'password' => ['required','min:6','confirmed'],
        //     'password_confirmation' => ['required'],
        // ]);
        // if (Hash::check($request->current_password,auth()->user()->password)){
        // };
        // return back()->with('message','Your password has been updated');


        // throw ValidationException::withMessages([
        //     'current_password'=>'Your Current Password Doesnt Match with our record'
        // ]);
        $validatedData = $request->validate(
            [
                'password' => 'required|min:6|confirmed',
            ],
            [
                'password.required' => 'The password field required',
                'password.min' => 'The password must be at least :min characters.',
                'password.confirmed' => 'The password confirmation does not match.',
            ]
        );

        $data = userdata::find($id);
        // dd($data);
        $data->password = $request->password;
        $data->password = bcrypt($validatedData['password']);
        $data->save();

        return redirect('profile')->with("success", "Your Password has been updated!");
    }

    public function changePasswordviaadmin(Request $request, $id)
    {
        // $request->validate([
        //     'current_password' => ['required'],
        //     'password' => ['required','min:6','confirmed'],
        //     'password_confirmation' => ['required'],
        // ]);
        // if (Hash::check($request->current_password,auth()->user()->password)){
        // };
        // return back()->with('message','Your password has been updated');


        // throw ValidationException::withMessages([
        //     'current_password'=>'Your Current Password Doesnt Match with our record'
        // ]);

        $validatedData = $request->validate(
            [
                'password' => 'required|min:6|confirmed',
            ],
            [
                'password.required' => 'The password field required',
                'password.min' => 'The password must be at least :min characters.',
                'password.confirmed' => 'The password confirmation does not match.',
            ]
        );

        $data = userdata::find($id);
        // dd($data);
        $data->password = $request->password;
        $data->password = bcrypt($validatedData['password']);
        $data->save();
        return redirect('usershow')->with("success", "Password Updated");
    }

    public function XchangePassword(Request $request)
    {
        // $request->validate([
        //     'current_password' => ['required'],
        //     'password' => ['required','min:6','confirmed'],
        // ]);
        // dd(auth()->user());
        // dd($request->all());
        // if (Hash::check($request->current_password,auth()->user()->password)){
        //     auth()->user->update($request->has('new_password'));

        //     // auth()->user()->update($request->only('password'))
        //     // return back()->with('message','Your password has been updated');
        // };
        // return back()->with('message','Your password has been updated');


        // throw ValidationException::withMessages([
        //     'current_password'=>'Your Current Password Doesnt Match with our record'
        // ]);

        $user = Auth::user()->id;
        $userupdate = userdata::where('id', $user)->get(); //GET ALL DATA FROM USER



        // dd($data);
        // $data->password = $request->password;

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|different:current_password|confirmed',
            'password_confirmation' => 'required|same:new_password',
        ]);
        // $userdata = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
        $test = $userupdate->update(['password' => Hash::make($request->new_password)]);
        $data = userdata::find($user); // SAMA AJA KEK USER UPDATE
        dd($data);
        return redirect()->route('profile')->with('success', 'Password changed successfully!');


        // $userupdate->password = $request->password;
        // $data['password'] = Hash::make($data['new_password']);
        // $password = Hash::make($request->new_password);
        // $data->save();

        // Check if the current password matches the one in the database
        // if (!Hash::check($request->current_password)) {
        //     return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        // }

        // Update the password
        // $data->update(['password' => Hash::make($request->new_password)]);


    }


    public function edit($id)
    {
        $data = userdata::find($id);
        return view('adminpage.useredit', compact('data'));
    }


    public function profileedit($slug)
    {
        $data = userdata::find($slug);
        return view('adminpage.profileedit', compact('data'));
    }

    public function profileupdate(Request $request)
    {
        $data = userdata::find(auth()->user()->id);

        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->tier = $request->tier;
        $data->note = $request->note;
        $data->since = $request->since;
        $data->status = $request->status;
        // $data->image = $request->image;

        if ($request->image) {
            $image = $request->file('image');
            $imagename = $data->name . '_picture_' . time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('user-image', $imagename, 'public');
            // Storage::disk('public')->put($image, 'user-image');
            $data['image'] = $path;
            // Delete current images 
            if ($request->oldimage) {
                $filename =   $request->oldimage;
                Storage::disk('public')->delete($filename);
            }
        }

        $data->save();
        return redirect('profile')->with("success", "Data" . ' ' . auth()->user()->name . ' ' . 'updated');
    }

    public function userinformationdata()
    {
        $data = userdata::all();
        $activeusers = userdata::where('status', 'active')->count();
        $inactiveusers = userdata::where('status', 'inactive')->count();
        $postponeusers = userdata::where('status', 'postpone')->count();
        $usercount = userdata::count();

        //TOTALUSERDONATED
        $userbalance = userbalance::all();
        $user1 = [];
        foreach ($userbalance as $us) {
            $user1[] = $us->user_id;
        }
        $totaluserdonated = count(array_unique($user1));

        //TOTALUSERDOESNTDONATED
        $totaluser = userdata::count();
        $totaluserdoesntdoanted = $totaluser - $totaluserdonated;

        return view('adminpage.userinformationdata', compact('totaluser', 'totaluserdoesntdoanted', 'totaluserdonated', 'data', 'activeusers', 'inactiveusers', 'postponeusers', 'usercount'));
    }

    public function deleteuserphoto()
    {
        $data = userdata::findorFail(auth()->user()->id);
        $data->image = null;
        $data->save();
        // dd($data);
        $filename =   auth()->user()->image;
        Storage::disk('public')->delete($filename);
        return back()->with('Success', 'Photo Deleted');
    }
}
