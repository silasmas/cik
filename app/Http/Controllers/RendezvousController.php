<?php

namespace App\Http\Controllers;

use App\Models\rendezvous;
use Illuminate\Http\Request;
use App\Http\Requests\UpdaterendezvousRequest;

class RendezvousController extends Controller
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
     * @param  \App\Http\Requests\StorerendezvousRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $re = Validator::make(
        //     $request->all(),
        //     [
        //         'fullname' => ['required', 'string'],
        //         // 'bio' => ['required', 'string'],
        //         'is_titular' => ['required', 'string'],
        //         'is_active' => ['required', 'string'],
        //         'contact' => ['required', 'string'],
        //         'type' => ['required', 'string'],
        //         'image_url' => ['required', 'image', 'max:2000'],
        //     ]
        // );

        // if ($re->passes()) {
            $rep = rendezvous::create(
                [
                    "fullname" => $request->fullname,
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "daterdv" => $request->udate,
                    "departement" => $request->udepartment,
                    "message" => $request->umsg,
                    "docteur_id" => $request->udoctor,
                ]
            );

            if ($rep) {
                return response()->json(
                    [
                        'reponse' => true,
                        'msg' => 'Evenement enregistrer avec succés!',
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
        // } else {
        //     // dd( $re->errors()->first());
        //     return response()->json(
        //         [
        //             'reponse' => false,
        //             'msg' => $re->errors()->first(),
        //             'datas' => $re->errors(),
        //         ]
        //     );
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function show(rendezvous $rendezvous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function edit(rendezvous $rendezvous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterendezvousRequest  $request
     * @param  \App\Models\rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterendezvousRequest $request, rendezvous $rendezvous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function destroy(rendezvous $rendezvous)
    {
        //
    }
}
