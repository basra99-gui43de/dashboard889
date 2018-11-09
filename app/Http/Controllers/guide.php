<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
Use App\Company;
use App\Companydetail;
use Auth;
use Illuminate\Support\Facades\Input;
class guide extends Controller
{
  public function index(){
    $category = Category::all();
    $arr=Array('category' => $category);

      return view('categories.guide.index' , $arr);
  
}
public function addcompany($id , Request $request){
    if($request->isMethod('post')){
        $newCompany=new Company();
        $newCompany->company_name=$request->input('company_name');
        $newCompany->category_id=$id;
        $newCompany->subject=$request->input('company_details');
        if(Input::hasFile('logo')){
            $img = Input::file('logo');
            $newCompany->company_logo =  $img->move('company_logo', $img->getClientOriginalName());
        }
        $newCompany->user_id=Auth::user()->id;
        $newCompany->save();

        $companyDetails = new Companydetail();
        $companyDetails->user_id=Auth::user()->id;
        $companyDetails->company_id = $newCompany->id;
        $companyDetails->email=$request->input('email');
        $companyDetails->phone_number=$request->input('tele');
        $companyDetails->location=$request->input('location');
        $companyDetails->map=$request->input('location_map');
        if(Input::hasFile('image')){
            $img = Input::file('image');
            $companyDetails->image =  $img->move('company_img', $img->getClientOriginalName());
        }
 
        $companyDetails->website=$request->input('website');
        $companyDetails->save();
    
    //  if(Input::hasFile('file')){
        //  $img = Input::file('file');
        //  $newServ->img =  $img->move('uploads', $img->getClientOriginalName());
         
    //  }
    $newCompany->save();


    }
        $company = Company::where('category_id', $id)->get();
        $arr=Array('company' => $company , 'id'=>$id );
    
          return view('categories.guide.addcompany' , $arr );
}
public function delete_company($id ,$cat_id){
    $comp = Company::find($id);
    $comp->delete();
    $company = Company::where('category_id', $cat_id)->get();
        $arr=Array('company' => $company , 'id'=>$id );
    
          return view('categories.guide.addcompany' , $arr );
    // return redirect('addcompany');
}

public function edit_company($id ,$cat_id , Request $request){
    if($request->isMethod('post')){
        $editCompany=Company::find($id);
        $editCompany->company_name=$request->input('company_name');
        $editCompany->email=$request->input('email');
        $editCompany->tele=$request->input('tele');
        $editCompany->location=$request->input('location');
        $editCompany->location_map=$request->input('location_map');
        $editCompany->company_derails=$request->input('company_details');
        $editCompany->category_id=$id;
    //  if(Input::hasFile('file')){
        //  $img = Input::file('file');
        //  $newServ->img =  $img->move('uploads', $img->getClientOriginalName());
         
    //  }
    $newCompany->save();
    return redirect('addcompany');
    }
    // }else{
        $company = Company::find($id);
        $arr=Array('company' => $company , 'id'=>$id );
    
          return view('categories.guide.edit' , $arr );
    
    }
   
}
