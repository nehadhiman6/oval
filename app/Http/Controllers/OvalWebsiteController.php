<?php

namespace App\Http\Controllers;

use App\Models\Auth\Contact\ContactUs;
use Illuminate\Http\Request;

class OvalWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.home');
    }

    public function ourProgram()
    {
        return view('website.our_program');
    }

    public function ScienceAndTechnology()
    {
        return view('website.science_and_technology');
    }

    public function aboutUs()
    {
        return view('website.about_us');
    }

    public function contactUs()
    {
        return view('website.contact_us');
    }

    public function medical()
    {
        return view('website.medical');
    }

    public function OvalPrivacyPolicy()
    {
        return view('website.privacy_policy');
    }

    public function OvalTerms()
    {
        return view('website.terms');
    }

    public function OvalCookiePolicy()
    {
        return view('website.cookie_policy');
    }

    public function leaderboardRules()
    {
        return view('website.leaderboard_rules');
    }

    public function ovalWaiver()
    {
        return view('website.oval_waiver');
    }

    public function contactUsSave(Request $request)
    {
        //dd("here");
        $this->validate($request, [
            'first_name' => 'required|max:191',
            'last_name' => 'nullable|max:191',
            'email' => 'email|required',
            'phone' => 'required',
            'message' => 'required|max:2000',
            'terms' => 'required|in:Y',
        ]);

        $contact_us = new ContactUs();
        $contact_us->fill($request->all());
        $contact_us->save();

        return view('contact-us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
