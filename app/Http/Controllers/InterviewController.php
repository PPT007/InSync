<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'description' => 'required|max:500',
            'email' => 'required|string|email|max:255|unique:users|unique:company_applications',
            'phone' => 'required',
            'category' => 'required|exists:categories,id',
            'city' => 'required|exists:cities,id',
            'website' => 'required|url|max:100',
            'social_media_page' => 'required|url|max:100',
            'id_proof' => 'required|mimes:jpg,png,jpeg|max:548'
        ]);

        /*$newIdProofImageName = time().'-'.Str::slug($request->name, '-').'.'.$request->id_proof->extension();
        $request->id_proof->storeAs('business-id-proofs', $newIdProofImageName);

        $company = new CompanyApplication;
        $company->description = Str::ucfirst($request->description);
        $company->email = $request->email;
        $company->name = Str::ucfirst($request->name);
        $company->category_id = $request->category;
        $company->city_id = $request->city;
        $company->phone = $request->phone;
        $company->id_proof_path = $newIdProofImageName;
        $company->website = $request->website;
        $company->social = $request->social_media_page;
        $company->save();

        Log::channel('slack')->info("New company application: \n".$company->email."\n".$company->website."\n".$company->social);*/
        
        return redirect()->route('interviews.create')->with('message','Details have been submitted for review. We will notify you over email on approval.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
