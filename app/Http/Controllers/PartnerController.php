<?php

namespace App\Http\Controllers;
use Auth;
use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:partner-account')->except('stoere');
    }

    protected function validateRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:partners,name',
            'company_name' => 'required',
            'trade_registry' => 'required',
            'ice' => 'required',
            'taxe_id' => 'required',
            'about' => 'required',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'You Are A Partner space'.Auth::id();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);

        $partner = new Partner();
        $partner->company_name = $request->company_name;
        $partner->name = $request->name;
        $partner->about = $request->about;
        $partner->taxe_id = $request->taxe_id;
        $partner->ice = $request->ice;
        $partner->trade_registry = $request->trade_registry;
        $partner->status = '0';
        $partner->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }
}