<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jakett;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;


class jaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()){
            $jakets = jakett::with('bahanjakets')->get();
            return Datatables::of($jakets)
             ->addColumn('action',function($jaket){
                return view('datatable._action', [
                    'model'     => $author,
                    'form_url'  => route('jaket.destroy',$jaket->id),
                    'edit_url'  => route('jaket.edit',$jaket->id),
                    'confirm_message' => 'Yakin Ingin Menghapus ' . $jaket->id . ' ?' ]);
            })->make(true);
        }

        $html = $htmlBuilder
        ->addColumn(['data'=>'foto','name'=>'foto','title'=>'Foto'])
        ->addColumn(['data'=>'harga','name'=>'harga','title'=>'Harga'])
        ->addColumn(['data'=>'bahanjakets.bahan_jaket','name'=>'bahanjakets.bahan_jaket','title'=>'Bahan'])
        ->addColumn(['data'=>'action','name'=>'action','title'=>'action','orderable'=>false,'searchable'=>false]);
        return view('jaket.index')->with(compact('html'));
    }
        


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jaket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto'=>'image|max:2048',
            'harga'=>'required|unique:jaketts,harga',
            'bahanjakets_id'=>'required|exists:bahanjakets,id',
            ]);
        $jaket = Jakett::create($request->except('foto'));
        if($request->hasFile('foto'))
        {
            $uploaded_foto=$request->file('foto');
            $extension=$uploaded_foto->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_foto->move($destinationPath, $filename);
            $jaket->foto=$filename;
            $jaket->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan "]);
        return redirect()->route('jaket.index');
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
