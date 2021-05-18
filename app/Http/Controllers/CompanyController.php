<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Manager;
use Illuminate\Http\Request;
use Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!empty(Auth::user()->company)){
            return redirect(route('company-information.edit', Auth::user()->company->id));
        }
        return view('company.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return request()->all();

        $validated = $request->validate([
            'title' => 'required',
            'field' => 'required',
            'webAddress' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $company = New Company;
        $company->title = request('title');
        $company->user_id = Auth::user()->id; 
        $company->field = request('field');
        $company->webAddress = request('webAddress');
        $company->email = request('email');
        $company->phone = request('phone');
        $company->instagram = request('instagram');
        $company->linkedin = request('linkedin');
        $company->address = request('address');
        $company->description = request('description');


        if(request()->hasFile('avatar')){
            $fileName = time().'_'.request('avatar')->getClientOriginalName();  
            request('avatar')->move(public_path('uploads'), $fileName);
            $filePath = 'uploads/'.$fileName;
            $company->avatar = $filePath;
        }

        $company->save();
        unset($filePath);
        unset($fileName);


        if(request('managerName')){
            $manager = New Manager;
            $manager->user_id = Auth::user()->id; 
            $manager->company_id = $company->id; 
            $manager->name = request('managerName');
            $manager->lastName = request('managerLastName');
            $manager->position = request('managerPosition');
            $manager->email = request('managerEmail');
            $manager->phone = request('managerPhone');

            if(request()->hasFile('managerAvatar')){
                $fileName = time().'_'.request('managerAvatar')->getClientOriginalName();  
                request('managerAvatar')->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/'.$fileName;
                $manager->avatar = $filePath;
            }
            $manager->save();

        }
        unset($filePath);
        unset($fileName);
        if(request('managerName2')){
            $manager2 = New Manager;
            $manager2->user_id = Auth::user()->id; 
            $manager2->company_id = $company->id; 
            $manager2->name = request('managerName2');
            $manager2->lastName = request('managerLastName2');
            $manager2->position = request('managerPosition2');
            $manager2->email = request('managerEmail2');
            $manager2->phone = request('managerPhone2');

            if(request()->hasFile('managerAvatar2')){
                $fileName = time().'_'.request('managerAvatar2')->getClientOriginalName();  
                request('managerAvatar2')->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/'.$fileName;
                $manager2->avatar = $filePath;
            }
            $manager2->save();
        }
        
        return redirect()->back()->with('success', 'اطلاعات فعال فرهنگی با موفقیت ثبت شد.
        حالا می‌توانید پیچ خود را ثبت کنید.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        if(Auth::user()->id != $company->owner->id) {
            return redirect()->back()->with('success', 'شما اجازه دسترسی به این بخش را ندارید.');
        }
        return view('company.create', compact('company')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {

        if(Auth::user()->id != $company->owner->id) {
            return redirect()->back()->with('success', 'شما اجازه دسترسی به این بخش را ندارید.');
        }
        
        $validated = $request->validate([
            'title' => 'required',
            'field' => 'required',
            'webAddress' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $company->title = request('title');
        $company->user_id = Auth::user()->id; 
        $company->field = request('field');
        $company->webAddress = request('webAddress');
        $company->email = request('email');
        $company->phone = request('phone');
        $company->instagram = request('instagram');
        $company->linkedin = request('linkedin');
        $company->address = request('address');
        $company->description = request('description');


        if(request()->hasFile('avatar')){
            $fileName = time().'_'.request('avatar')->getClientOriginalName();  
            request('avatar')->move(public_path('uploads'), $fileName);
            $filePath = 'uploads/'.$fileName;
            $company->avatar = $filePath;
        }

        $company->save();
        
        $company->managers()->delete();

        if(request('managerName1')){
            $manager = New Manager;
            $manager->user_id = Auth::user()->id; 
            $manager->company_id = $company->id; 
            $manager->name = request('managerName1');
            $manager->lastName = request('managerLastName1');
            $manager->position = request('managerPosition1');
            $manager->email = request('managerEmail1');
            $manager->phone = request('managerPhone1');

            if(request()->hasFile('managerAvatar1')){
                $fileName = time().'_'.request('managerAvatar1')->getClientOriginalName();  
                request('managerAvatar1')->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/'.$fileName;
                $manager->avatar = $filePath;
            }
            $manager->save();

        }
        unset($filePath);
        unset($fileName);
        if(request('managerName2')){
            $manager2 = New Manager;
            $manager2->user_id = Auth::user()->id; 
            $manager2->company_id = $company->id; 
            $manager2->name = request('managerName2');
            $manager2->lastName = request('managerLastName2');
            $manager2->position = request('managerPosition2');
            $manager2->email = request('managerEmail2');
            $manager2->phone = request('managerPhone2');

            if(request()->hasFile('managerAvatar2')){
                $fileName = time().'_'.request('managerAvatar2')->getClientOriginalName();  
                request('managerAvatar2')->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/'.$fileName;
                $manager2->avatar = $filePath;
            }
            $manager2->save();
        }
        return redirect()->back()->with('success', 'اطلاعات فعال فرهنگی با موفقیت ثبت شد.
        حالا می‌توانید پیچ خود را ثبت کنید.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
