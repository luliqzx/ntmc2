<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\GCMUser;


class GCMUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function test(Request $request)
{
    # code...
            $gcmuser = GCMUser::all();
            return $gcmuser;
}

    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $gcmuser = GCMUser::select(['card_id', 'driver_id', 'gcm_id']);
            // echo var_dump($gcmuser);
            return Datatables::of($gcmuser)->make(true);
            // ->addColumn('action', function($gcmuser){
            //     return view('datatable._action', [
            //         'model' => $gcmuser,
            //         // 'form_url' => route('admin.books.destroy', $book->id),
            //         // 'edit_url' => route('admin.books.edit', $book->id),
            //         // 'confirm_message' => 'Yakin mau menghapus ' . $book->title . '?'
            //         ]);
            // })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'card_id', 'name'=>'card_id', 'title'=>'Card ID'])
        ->addColumn(['data' => 'driver_id', 'name'=>'driver_id', 'title'=>'Driver ID'])
        ->addColumn(['data' => 'gcm_id', 'name'=>'gcm_id', 'title'=>'GCM ID']);
        // ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
        return view('page.gcmuser.index')->with(compact('html'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
