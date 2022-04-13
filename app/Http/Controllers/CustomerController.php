<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    public function profile()
    {
        try {
            if (Auth::id()) {
                $customer = \App\Student::where('id', Auth::id())->get()[0];
                return view('frontend.customer.profile', compact('customer'));
            }
        } catch (\Exception $x) {
            return redirect('my/profile')
                ->with(['error' => $x->message]);
        }
    }

    public function ProfileUpdate(ProfileRequest $request)
    {

        //  $media = new \TCG\Voyager\Http\Controllers\VoyagerController ();

        $customer = \App\Student::find(Auth::id());
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->mobile = $request->input('mobile');
        $customer->country = $request->input('country');
        $customer->city = $request->input('city');

        if ($request->input('avatar')) {
            $customer->avatar = $customer->upload($request);
        }

        $customer->save();

        return redirect('my/profile')->withInput();
    }
}
