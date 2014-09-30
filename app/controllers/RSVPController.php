<?php

class RSVPController extends \BaseController {

    protected $layout = "layouts.main";

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function getRSVP() {
        $this->layout->content = View::make('rsvp.rsvp');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), RSVP::$rules);

        if ($validator->passes()) {
            // validation has passed, save user in DB
            $rsvp = new RSVP;
            $rsvp->guest1 = Input::get('guest1');
            $rsvp->guest2 = Input::get('guest2');
            $rsvp->email = Input::get('email');
            $rsvp->save();

            return Redirect::to('/dashboard')->with('message', 'Thanks for your RSVP!');
        } else {
            // validation has failed, display error messages
            return Redirect::to('/')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
        }
    }

    public function getDashboard() {
        $this->layout->content = View::make('rsvp.dashboard');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
