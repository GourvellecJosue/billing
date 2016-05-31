<?php

namespace Billing\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Billing\Entities\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get();
        return view('index',['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {	
       	return view('create', ['client' => new Client()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @returbin \Illuminate\Http\Response
     */
    public function store(Request $request, UserRepository $users)
    {
         $client = Client::find(1);
         $client->name = $request->input('name');
         $client->address = $request->input('address');
         $client->zip_code = $request->input('zip_code');
         $client->city = $request->input('city');
         $client->save();

         $user = $users->where('age', '=', 5)->first();
         $user = $users->getMyTrucCool('age', 5);



         $user = $users->update(5, $request->all());


        Client::create($request->all());
        Client::where('');
        Client::delete();

         return redirect('/client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$clients = Client::where('id', '=', $id)->get();
        return view('index',['clients' => $clients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$client = Client::where('id', '=', $id)->first();
        return view('edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('delete');
    }
}
