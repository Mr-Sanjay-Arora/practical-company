<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyDetails extends Controller
{
    public function index(){
        return view('index');
    }

    public function generateCompany(Request $request){
        $data = $request->all();
        $name = $data['name'];
        $city = $data['city'];

        if(!empty($name) && !empty($city)){
            $res = new Company;
            $res->name = $name;
            $res->city = $city;
            $res->save();
            $request->session()->flash('success','Data submitted successfully');
            return redirect('/');
        }
        else{
            return redirect('/');
        }
        
    }

    public function listingcompany(){
        return view('list-company')->with('company',Company::orderBy('created_at','desc')->get());
    }

    public function destroy($company_id, Company $company)
    {
        $book = company::find($company_id);
        $book->delete();
        return redirect('list-company');
    }

}
