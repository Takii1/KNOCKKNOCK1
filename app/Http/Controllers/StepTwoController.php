<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserIdPic;
use App\Models\User;
use App\Notifications\AprovalNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class StepTwoController extends Controller
{
    public function getData()
    {
        return view('getData');
    }

    public function saveData(Request $request)
    {
        $usr = User::find(Auth::id());

        $usr ->dateOfBirth = $request->DOB;
        $usr ->address = $request->address;
        $usr ->mobilePhone = $request->mobilePhone;
        $imageName = Auth::user()->name."-profile".".".$request->profilePicture->extension();
        $request->profilePicture->move(public_path('ProfilePics'),$imageName);
        $usr ->profilePicture = $imageName;
        if($request->has('idFront') && $request->has('idBack') ){


                    $img1 =str_replace(' ','',Auth::user()->name).'-img-'.time().rand(1,1000).'.'.$request->idFront->extension();
                $request->idFront->move(public_path('UserIdPics'),$img1);

                $img2 =str_replace(' ','',Auth::user()->name).'-img-'.time().rand(1,1000).'.'.$request->idBack->extension();
                $request->idBack->move(public_path('UserIdPics'),$img2);

            UserIdPic::create([
                'User_id' => Auth::id(),
                'IdImage1'=>$img1,
                'IdImage2'=>$img2
            ]);
        }

        if($usr->save()){
            $admins = User::role('Admin')->get();
            foreach ($admins as $admin) {
                Notification::send($admin,new AprovalNotification($usr->id));
            }
            return redirect(route('Home'));
        }
        return redirect(route('dashboard'));
    }



}
