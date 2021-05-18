<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Teaser;
use App\Models\Certificate;
use App\Models\BusinessPlan;
use App\Models\Team;
use App\Models\Pitch;
use App\Models\Characters;
use Illuminate\Http\Request;
use Auth;

class PitchController extends Controller
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
        if(empty(Auth::user()->company)){
            return redirect(route('company-information.create'))->withErrors([ 'قبل از افزودن پیچ لطفاً اطلاعات فعال فرهنگی را تکمیل کنید']);
        }
        return view('pitch.create');
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
            'release' => 'required|string|max:64',
            'feature-effect-des' => 'required',
            'type' => 'required',
            'audience' => 'required',
            'published_on' => 'required',
            'description' => 'required',
            'character' => 'required',
            'creator' => 'required',
            'teamName' => 'required',
            'teamRole1' => 'required',
            'characterDesc' => 'required'
        ]);
        
        $pitch = New Pitch;
        $pitch->user_id = Auth::user()->id;
        $pitch->title = request('title');
        $pitch->title_en = request('nameEn');
        $pitch->release = request('release');
        $pitch->duration = request('feature-effect-des');
        $pitch->type = request('type');
        $pitch->audience = request('audience');
        $pitch->published_on = request('published_on');
        $pitch->description = request('description');
        $pitch->save();


        $team = New Team;
        $team->name = request('teamName');
        $team->role = request('teamRole1');
        $team->pitch_id = $pitch->id;

        if(request()->hasFile('teamAvatar1')){

            $fileName = time().'_'.request('teamAvatar1')->getClientOriginalName();  
            request('teamAvatar1')->move(public_path('uploads/team'), $fileName);
            $filePath = 'uploads/team/'.$fileName;
            $team->image = $filePath;
        }
        $team->save();

        if(request('teamName2')) {
            $team = New Team;
            $team->name = request('teamName2');
            $team->role = request('teamRole2');
            $team->pitch_id = $pitch->id;
            if(request()->hasFile('teamAvatar2')){
                $fileName = time().'_'.request('teamAvatar2')->getClientOriginalName();  
                request('teamAvatar2')->move(public_path('uploads/team'), $fileName);
                $filePath = 'uploads/team/'.$fileName;
                $team->image = $filePath;
            }
            $team->save();
        }


        if(request('teamName3')) {
            $team = New Team;
            $team->name = request('teamName3');
            $team->role = request('teamRole3');
            $team->pitch_id = $pitch->id;
            if(request()->hasFile('teamAvatar3')){
                $fileName = time().'_'.request('teamAvatar3')->getClientOriginalName();  
                request('teamAvatar3')->move(public_path('uploads/team'), $fileName);
                $filePath = 'uploads/team/'.$fileName;
                $team->image = $filePath;
            }
            $team->save();
        }


        if(request('teamName4')) {
            $team = New Team;
            $team->name = request('teamName4');
            $team->role = request('teamRole4');
            $team->pitch_id = $pitch->id;
            if(request()->hasFile('teamAvatar4')){
                $fileName = time().'_'.request('teamAvatar4')->getClientOriginalName();  
                request('teamAvatar4')->move(public_path('uploads/team'), $fileName);
                $filePath = 'uploads/team/'.$fileName;
                $team->image = $filePath;
            }
            $team->save();
        }


        if(request('teamName5')) {
            $team = New Team;
            $team->name = request('teamName5');
            $team->role = request('teamRole5');
            $team->pitch_id = $pitch->id;
            if(request()->hasFile('teamAvatar5')){
                $fileName = time().'_'.request('teamAvatar5')->getClientOriginalName();  
                request('teamAvatar5')->move(public_path('uploads/team'), $fileName);
                $filePath = 'uploads/team/'.$fileName;
                $team->image = $filePath;
            }
            $team->save();
        }

        $character = New Characters;
        $character->name = request('character');
        $character->creator = request('creator');
        $character->description = request('characterDesc');
        $character->pitch_id = $pitch->id;
        if(request()->hasFile('charImage')){
            $fileName = time().'_'.request('charImage')->getClientOriginalName();  
            request('charImage')->move(public_path('uploads/characters'), $fileName);
            $filePath = 'uploads/characters/'.$fileName;
            $character->image = $filePath;
        }
        $character->save();

        if(request('character2')){
            $character = New Characters;
            $character->name = request('character2');
            $character->creator = request('creator2');
            $character->description = request('characterDesc2');
            $character->pitch_id = $pitch->id;
            if(request()->hasFile('charImage2')){
                $fileName = time().'_'.request('charImage2')->getClientOriginalName();  
                request('charImage2')->move(public_path('uploads/characters'), $fileName);
                $filePath = 'uploads/characters/'.$fileName;
                $character->image = $filePath;
            }
            $character->save();
        }

        if(request('character3')){
            $character = New Characters;
            $character->name = request('character3');
            $character->creator = request('creator3');
            $character->description = request('characterDesc3');
            $character->pitch_id = $pitch->id;
            if(request()->hasFile('charImage3')){
                $fileName = time().'_'.request('charImage3')->getClientOriginalName();  
                request('charImage3')->move(public_path('uploads/characters'), $fileName);
                $filePath = 'uploads/characters/'.$fileName;
                $character->image = $filePath;
            }
            $character->save();
        }

        if(request()->hasFile('teaser')){
            
            $teaser = New Teaser;
            $teaser->user_id = Auth::user()->id;
            $teaser->pitch_id = $pitch->id;
            $fileName = time().'_'.request('teaser')->getClientOriginalName();  
            request('teaser')->move(public_path('uploads/teaser'), $fileName);
            $filePath = 'uploads/teaser/'.$fileName;
            $teaser->filename = $filePath;
            $teaser->save();
        }

        if(request()->hasFile('image')){
            $image = New Image;
            $image->user_id = Auth::user()->id;
            $image->pitch_id = $pitch->id;
            $fileName = time().'_'.request('image')->getClientOriginalName();  
            request('image')->move(public_path('uploads/image'), $fileName);
            $filePath = 'uploads/image/'.$fileName;
            $image->filename = $filePath;
            $image->save();
        }

        if(request()->hasFile('image2')){
            $image = New Image;
            $image->user_id = Auth::user()->id;
            $image->pitch_id = $pitch->id;
            $fileName = time().'_'.request('image2')->getClientOriginalName();  
            request('image2')->move(public_path('uploads/image'), $fileName);
            $filePath = 'uploads/image/'.$fileName;
            $image->filename = $filePath;
            $image->save();
        }

        if(request()->hasFile('image3')){
            $image = New Image;
            $image->user_id = Auth::user()->id;
            $image->pitch_id = $pitch->id;
            $fileName = time().'_'.request('image3')->getClientOriginalName();  
            request('image3')->move(public_path('uploads/image'), $fileName);
            $filePath = 'uploads/image/'.$fileName;
            $image->filename = $filePath;
            $image->save();
        }

        if(request()->hasFile('image4')){
            $image = New Image;
            $image->user_id = Auth::user()->id;
            $image->pitch_id = $pitch->id;
            $fileName = time().'_'.request('image4')->getClientOriginalName();  
            request('image4')->move(public_path('uploads/image'), $fileName);
            $filePath = 'uploads/image/'.$fileName;
            $image->filename = $filePath;
            $image->save();
        }

        if(request()->hasFile('certificate')){
            $certificate = New Certificate;
            $certificate->user_id = Auth::user()->id;
            $certificate->pitch_id = $pitch->id;
            $fileName = time().'_'.request('certificate')->getClientOriginalName();  
            request('certificate')->move(public_path('uploads/certificates'), $fileName);
            $filePath = 'uploads/certificates/'.$fileName;
            $certificate->filename = $filePath;
            $certificate->save();
        }

        if(request()->hasFile('certificate2')){
            $certificate = New Certificate;
            $certificate->user_id = Auth::user()->id;
            $certificate->pitch_id = $pitch->id;
            $fileName = time().'_'.request('certificate2')->getClientOriginalName();  
            request('certificate2')->move(public_path('uploads/certificates'), $fileName);
            $filePath = 'uploads/certificates/'.$fileName;
            $certificate->filename = $filePath;
            $certificate->save();
        }

        if(request()->hasFile('certificate3')){
            $certificate = New Certificate;
            $certificate->user_id = Auth::user()->id;
            $certificate->pitch_id = $pitch->id;
            $fileName = time().'_'.request('certificate3')->getClientOriginalName();  
            request('certificate3')->move(public_path('uploads/certificates'), $fileName);
            $filePath = 'uploads/certificates/'.$fileName;
            $certificate->filename = $filePath;
            $certificate->save();
        }

        if(request()->hasFile('plan')){
            $plan = New BusinessPlan;
            $plan->user_id = Auth::user()->id;
            $plan->pitch_id = $pitch->id;
            $fileName = time().'_'.request('plan')->getClientOriginalName();  
            request('plan')->move(public_path('uploads/plans'), $fileName);
            $filePath = 'uploads/plans/'.$fileName;
            $plan->filename = $filePath;
            $plan->save();
        }


        if(request()->hasFile('plan2')){
            $plan = New BusinessPlan;
            $plan->user_id = Auth::user()->id;
            $plan->pitch_id = $pitch->id;
            $fileName = time().'_'.request('plan2')->getClientOriginalName();  
            request('plan2')->move(public_path('uploads/plans'), $fileName);
            $filePath = 'uploads/plans/'.$fileName;
            $plan->filename = $filePath;
            $plan->save();
        }


        if(request()->hasFile('plan3')){
            $plan = New BusinessPlan;
            $plan->user_id = Auth::user()->id;
            $plan->pitch_id = $pitch->id;
            $fileName = time().'_'.request('plan3')->getClientOriginalName();  
            request('plan3')->move(public_path('uploads/plans'), $fileName);
            $filePath = 'uploads/plans/'.$fileName;
            $plan->filename = $filePath;
            $plan->save();
        }


        return redirect('home')->with('success', 'پیچ شما با موفقیت ثبت شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function show(Pitch $pitch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $pitch = Pitch::find($id);
        if(Auth::user()->id != $pitch->owner->id) {
            return redirect()->back()->with('success', 'شما اجازه دسترسی به این بخش را ندارید.');
        }
        // return $pitch;
        return view('pitch.edit', compact('pitch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // return request()->all();
        $validated = $request->validate([
            'title' => 'required',
            'release' => 'required|string|max:64',
            'feature-effect-des' => 'required',
            'type' => 'required',
            'audience' => 'required',
            'published_on' => 'required',
            'description' => 'required',
            'character1' => 'required',
            'creator1' => 'required',
            'teamName1' => 'required',
            'teamRole1' => 'required',
            'characterDesc1' => 'required'
        ]);
        
        $pitch = Pitch::find($id);

        if(Auth::user()->id != $pitch->owner->id) {
            return redirect()->back()->with('success', 'شما اجازه دسترسی به این بخش را ندارید.');
        }

        // $pitch->user_id = Auth::user()->id;
        $pitch->title = request('title');
        $pitch->title_en = request('nameEn');
        $pitch->release = request('release');
        $pitch->duration = request('feature-effect-des');
        $pitch->type = request('type');
        $pitch->audience = request('audience');
        $pitch->published_on = request('published_on');
        $pitch->description = request('description');
        $pitch->save();

        $pitch->members()->delete();
        $pitch->characters()->delete();



        $team = New Team;
        $team->name = request('teamName1');
        $team->role = request('teamRole1');
        $team->pitch_id = $pitch->id;

        if(request()->hasFile('teamAvatar1')){
            $fileName = time().'_'.request('teamAvatar1')->getClientOriginalName();  
            request('teamAvatar1')->move(public_path('uploads/team'), $fileName);
            $filePath = 'uploads/team/'.$fileName;
            $team->image = $filePath;
        }
        $team->save();

        if(request('teamName2')) {
            $team = New Team;
            $team->name = request('teamName2');
            $team->role = request('teamRole2');
            $team->pitch_id = $pitch->id;
            if(request()->hasFile('teamAvatar2')){
                $fileName = time().'_'.request('teamAvatar2')->getClientOriginalName();  
                request('teamAvatar2')->move(public_path('uploads/team'), $fileName);
                $filePath = 'uploads/team/'.$fileName;
                $team->image = $filePath;
            }
            $team->save();
        }


        if(request('teamName3')) {
            $team = New Team;
            $team->name = request('teamName3');
            $team->role = request('teamRole3');
            $team->pitch_id = $pitch->id;
            if(request()->hasFile('teamAvatar3')){
                $fileName = time().'_'.request('teamAvatar3')->getClientOriginalName();  
                request('teamAvatar3')->move(public_path('uploads/team'), $fileName);
                $filePath = 'uploads/team/'.$fileName;
                $team->image = $filePath;
            }
            $team->save();
        }


        if(request('teamName4')) {
            $team = New Team;
            $team->name = request('teamName4');
            $team->role = request('teamRole4');
            $team->pitch_id = $pitch->id;
            if(request()->hasFile('teamAvatar4')){
                $fileName = time().'_'.request('teamAvatar4')->getClientOriginalName();  
                request('teamAvatar4')->move(public_path('uploads/team'), $fileName);
                $filePath = 'uploads/team/'.$fileName;
                $team->image = $filePath;
            }
            $team->save();
        }


        if(request('teamName5')) {
            $team = New Team;
            $team->name = request('teamName5');
            $team->role = request('teamRole5');
            $team->pitch_id = $pitch->id;
            if(request()->hasFile('teamAvatar5')){
                $fileName = time().'_'.request('teamAvatar5')->getClientOriginalName();  
                request('teamAvatar5')->move(public_path('uploads/team'), $fileName);
                $filePath = 'uploads/team/'.$fileName;
                $team->image = $filePath;
            }
            $team->save();
        }

        $character = New Characters;
        $character->name = request('character1');
        $character->creator = request('creator1');
        $character->description = request('characterDesc1');
        $character->pitch_id = $pitch->id;
        if(request()->hasFile('charImage1')){
            $fileName = time().'_'.request('charImage1')->getClientOriginalName();  
            request('charImage1')->move(public_path('uploads/characters'), $fileName);
            $filePath = 'uploads/characters/'.$fileName;
            $character->image = $filePath;
        }
        $character->save();

        if(request('character2')){
            $character = New Characters;
            $character->name = request('character2');
            $character->creator = request('creator2');
            $character->description = request('characterDesc2');
            $character->pitch_id = $pitch->id;
            if(request()->hasFile('charImage2')){
                $fileName = time().'_'.request('charImage2')->getClientOriginalName();  
                request('charImage2')->move(public_path('uploads/characters'), $fileName);
                $filePath = 'uploads/characters/'.$fileName;
                $character->image = $filePath;
            }
            $character->save();
        }

        if(request('character3')){
            $character = New Characters;
            $character->name = request('character3');
            $character->creator = request('creator3');
            $character->description = request('characterDesc3');
            $character->pitch_id = $pitch->id;
            if(request()->hasFile('charImage3')){
                $fileName = time().'_'.request('charImage3')->getClientOriginalName();  
                request('charImage3')->move(public_path('uploads/characters'), $fileName);
                $filePath = 'uploads/characters/'.$fileName;
                $character->image = $filePath;
            }
            $character->save();
        }

        if(request()->hasFile('teaser')){

            $pitch->teasers()->delete();
            $teaser = New Teaser;
            $teaser->user_id = Auth::user()->id;
            $teaser->pitch_id = $pitch->id;
            $fileName = time().'_'.request('teaser')->getClientOriginalName();  
            request('teaser')->move(public_path('uploads/teaser'), $fileName);
            $filePath = 'uploads/teaser/'.$fileName;
            $teaser->filename = $filePath;
            $teaser->save();
        }

        if(request()->hasFile('image')){
            $pitch->images()->delete();
            $image = New Image;
            $image->user_id = Auth::user()->id;
            $image->pitch_id = $pitch->id;
            $fileName = time().'_'.request('image')->getClientOriginalName();  
            request('image')->move(public_path('uploads/image'), $fileName);
            $filePath = 'uploads/image/'.$fileName;
            $image->filename = $filePath;
            $image->save();
        }

        if(request()->hasFile('image2')){
            $image = New Image;
            $image->user_id = Auth::user()->id;
            $image->pitch_id = $pitch->id;
            $fileName = time().'_'.request('image2')->getClientOriginalName();  
            request('image2')->move(public_path('uploads/image'), $fileName);
            $filePath = 'uploads/image/'.$fileName;
            $image->filename = $filePath;
            $image->save();
        }

        if(request()->hasFile('image3')){
            $image = New Image;
            $image->user_id = Auth::user()->id;
            $image->pitch_id = $pitch->id;
            $fileName = time().'_'.request('image3')->getClientOriginalName();  
            request('image3')->move(public_path('uploads/image'), $fileName);
            $filePath = 'uploads/image/'.$fileName;
            $image->filename = $filePath;
            $image->save();
        }

        if(request()->hasFile('image4')){
            $image = New Image;
            $image->user_id = Auth::user()->id;
            $image->pitch_id = $pitch->id;
            $fileName = time().'_'.request('image4')->getClientOriginalName();  
            request('image4')->move(public_path('uploads/image'), $fileName);
            $filePath = 'uploads/image/'.$fileName;
            $image->filename = $filePath;
            $image->save();
        }

        if(request()->hasFile('certificate')){
            $pitch->certificates()->delete();
            $certificate = New Certificate;
            $certificate->user_id = Auth::user()->id;
            $certificate->pitch_id = $pitch->id;
            $fileName = time().'_'.request('certificate')->getClientOriginalName();  
            request('certificate')->move(public_path('uploads/certificates'), $fileName);
            $filePath = 'uploads/certificates/'.$fileName;
            $certificate->filename = $filePath;
            $certificate->save();
        }

        if(request()->hasFile('certificate2')){
            $certificate = New Certificate;
            $certificate->user_id = Auth::user()->id;
            $certificate->pitch_id = $pitch->id;
            $fileName = time().'_'.request('certificate2')->getClientOriginalName();  
            request('certificate2')->move(public_path('uploads/certificates'), $fileName);
            $filePath = 'uploads/certificates/'.$fileName;
            $certificate->filename = $filePath;
            $certificate->save();
        }

        if(request()->hasFile('certificate3')){
            $certificate = New Certificate;
            $certificate->user_id = Auth::user()->id;
            $certificate->pitch_id = $pitch->id;
            $fileName = time().'_'.request('certificate3')->getClientOriginalName();  
            request('certificate3')->move(public_path('uploads/certificates'), $fileName);
            $filePath = 'uploads/certificates/'.$fileName;
            $certificate->filename = $filePath;
            $certificate->save();
        }

        if(request()->hasFile('plan')){
            $pitch->businessPlans()->delete();
            $plan = New BusinessPlan;
            $plan->user_id = Auth::user()->id;
            $plan->pitch_id = $pitch->id;
            $fileName = time().'_'.request('plan')->getClientOriginalName();  
            request('plan')->move(public_path('uploads/plans'), $fileName);
            $filePath = 'uploads/plans/'.$fileName;
            $plan->filename = $filePath;
            $plan->save();
        }


        if(request()->hasFile('plan2')){
            $plan = New BusinessPlan;
            $plan->user_id = Auth::user()->id;
            $plan->pitch_id = $pitch->id;
            $fileName = time().'_'.request('plan2')->getClientOriginalName();  
            request('plan2')->move(public_path('uploads/plans'), $fileName);
            $filePath = 'uploads/plans/'.$fileName;
            $plan->filename = $filePath;
            $plan->save();
        }


        if(request()->hasFile('plan3')){
            $plan = New BusinessPlan;
            $plan->user_id = Auth::user()->id;
            $plan->pitch_id = $pitch->id;
            $fileName = time().'_'.request('plan3')->getClientOriginalName();  
            request('plan3')->move(public_path('uploads/plans'), $fileName);
            $filePath = 'uploads/plans/'.$fileName;
            $plan->filename = $filePath;
            $plan->save();
        }


        return redirect('home')->with('success', 'پیچ شما با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pitch = Pitch::find($id);

        if(Auth::user()->id != $pitch->owner->id) {
            return redirect()->back()->with('success', 'شما اجازه دسترسی به این بخش را ندارید.');
        }

        $pitch->delete();
        return redirect('home')->with('success', 'پیچ مورد نظر با موفقیت حذف شد.');
    }
}
