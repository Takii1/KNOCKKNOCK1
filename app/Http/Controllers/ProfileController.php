<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\UserIdPic;
use App\Notifications\ProfileAprovedNotification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

    public function Users()
    {
        $rol = User::with('roles')->get();
        return view('Users',compact('rol'));
    }

    public function SaveUser(Request $request)
    {

        $Us = User::find($request->id);
        $Us->Approved = $request->Approved;

        if($Us->save()){
            $Us->notify(new ProfileAprovedNotification($Us));
        }

        return redirect(route('Users'))->with('Msg1','User Approved successfully');



    }

    public function EditUser($id)
    {
        $usr = User::find($id);
        $img = json_decode(UserIdPic::where('User_id' , $id)->get());
        // dd($img);
        return view('EditUser',compact('usr','img'));

    }

    public function DeleteUser($id)
    {
        User::find($id)->delete();

        return redirect(route('Users'))->with('Msg_delete','User has been Deleted successfully') ;
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function editProfile(Request $req)
    {
        $usr = User::find(Auth::id());
        return view('frontEnd.editProfile',compact('usr'));
    }

    public function saveEditProfile(Request $req)
    {
        $usr = User::find(Auth::id());

        $usr->name = $req->name;
        $usr->email = $req->email;
        $usr->mobilePhone = $req->mobile;
        $usr->dateOfBirth = $req->dateOfBirth;
        $usr->address = $req->address;
        if($req->has('profilePicture')){
        $imageName = Auth::user()->name."-profile".".".$req->profilePicture->extension();
        $req->profilePicture->move(public_path('ProfilePics'),$imageName);

        $usr->profilePicture = $imageName;
        }
        $usr->update();

        return redirect(route("EditProfile"));
    }

    public function verification()
    {
        $uId = User::find(Auth::id());
        if($uId->email_verified_at != null){
            $email ="verified";
        }else{
            $email ="notverified";
        }
        if($uId->Approved != 0){
            $profile ="verified";
        }else{
            $profile ="notverified";
        }

        return view('frontEnd.Verifications',compact('email','profile'));
    }
}
