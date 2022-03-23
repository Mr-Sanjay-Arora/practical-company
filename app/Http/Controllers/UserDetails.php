<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Company;

class UserDetails extends Controller
{

    public function generateUser(Request $request){
        $data = $request->all();
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];

        $res = new Users;
        $res->name = $name;
        $res->email_id = $email;
        $res->phone = $phone;
        $res->save();

        return redirect('/');
    }

    public function listingusers(){
        return view('list-user')->with('users',Users::orderBy('created_at','desc')->get());
    }

    public function listingauser($user_id){
        $data = Users::where('id',$user_id)->get();

        return view('view-user')
                ->with('user',Users::where('id',$user_id)->get())
                ->with('company',Company::where('id',$data[0]->company_id)->get());
    }

    public function destroy($user_id, Users $user)
    {
        $book = Users::find($user_id);
        $book->delete();
        return redirect('list-user');
    }
}
