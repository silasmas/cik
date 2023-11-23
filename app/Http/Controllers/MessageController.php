<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatemessageRequest;

class MessageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rep = message::create(
            [
                "fullname" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "addresse" => "",
                "sujet" => $request->subject,
                "message" => $request->msg,
            ]
        );

        if ($rep) {
            return response()->json(
                [
                    'reponse' => true,
                    'msg' => 'Enregistrement fait avec succés!',
                ]
            );
        } else {
            return response()->json(
                [
                    'reponse' => false,
                    'msg' => 'Erreur',
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemessageRequest  $request
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemessageRequest $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(message $message)
    {
        //
    }
}
