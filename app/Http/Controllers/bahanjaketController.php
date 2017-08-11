<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bahanjaket;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;




class bahanjaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()){
            $bahanjakets = bahanjaket::select(['id','bahan_jaket']);
            return Datatables::of($bahanjakets)
            
            ->addColumn('action',function($bahanjaket){
                return view('datatable._action', [
                    'model'     => $bahanjaket,
                    'form_url'  => route('bahan.destroy',$bahanjaket->id),
                    'edit_url'  => route('bahan.edit',$bahanjaket->id),
                    'confirm_message' => 'Yakin Ingin Menghapus ' . $bahanjaket->name . ' ?' ]);
            })->make(true);

            
        }
        $html = $htmlBuilder
        ->addColumn(['data'=>'bahan_jaket','name'=>'bahan_jaket','title'=>'Bahan Jaket'])
           ->addColumn(['data'=>'action','name'=>'action','title'=>'','orderable'=>false,'searchable'=>false]);


        return view('bahan.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bahan.create');
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
        $this->validate($request, ['bahan_jaket' => 'required|unique:bahanjakets']);
        $bahanjaket = $request->all();
        bahanjaket::create($bahanjaket);
        
        // $bahanjaket = bahanjaket::create($request->all());
        return redirect('/admin/bahan');
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
