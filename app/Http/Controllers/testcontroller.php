<?php

namespace App\Http\Controllers;

use App\Models\Datadiri;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Datadiri::latest()->get();
        return view('product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['judul'=>'required|min:3|max:20', 'deskripsi'=>'required'],
    ['judul.required'=>'Masukin Judul dlu donkk....',
    'judul.min'=>'Tulis judul yang bener deck....',
    'judul.max'=>'Panjang bener nulis judulnya....',
    'deskripsi.required'=>'yuk sini keluh kesah sama om..']
    );
        dd($request->all());
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
        $data = Datadiri::find($id);
         return view('product.editdata',compact('data'));
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
        $data = Datadiri::find($id);
        $data->delete();
        return redirect()->route('test.index')->with('success', '
        berhasil dihapus');
    }

    public function login(){
        return view('test');
    }

    public function logout(){
        return view('test2');
    }

    public function about(){
        return view('about');
    }

    public function school(){
        return view('school');
    }

    public function languange(){
        return view('languange');
    }

    // public function product($id){
    //     return view ('product', ['id'=>$id]);
    // }
    public function product(){
        $products = ['nama'=>'Samsung Galaxy ', 'Harga'=>'500000'];
        return view ('product', Compact('products') );
    }
    
    public function datadiri(){
         
        return view('product.datadiri');
    }

    public function inputdatadiri(Request $request){

        $this->validate($request,
        [
        'nama'=>'required', 
        'kelas'=>'required',
        'jurusan'=>'required',
        'nohp'=>'required',
        'hobby'=>'required',
        'cita'=>'required',
        'alamat'=>'required',
        ],
        [
        'nama.required'=>'jan lupa isi nama om!....'
        ]
        );
        // dd($request->all());
        // return back()->with('message','Data sudah ke input masseh...');
        Datadiri::create($request->all());
        return redirect('/test/datadiri')->with('message','Data berhasil di Input!');
     }

    public function updatedata(Request $request, $id){

        $this->validate($request, [
            'nama'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
            'nohp'=>'required',
            'hobby'=>'required',
            'cita'=>'required',
            'alamat'=>'required',
            
        ]);
        
            $data = Datadiri::find($id);
            $data->nama = $request->get('nama');
            $data->kelas = $request->get('kelas');
            $data->jurusan = $request->get('jurusan');
            $data->nohp = $request->get('nohp');
            $data->hobby = $request->get('hobby');
            $data->cita = $request->get('cita');
            $data->alamat = $request->get('alamat');
            
            // dd($tampils);
            
            $data->save();
            return
                redirect()->route('test.index')->with('success','Data Berhasil Diubah');
    }


     
    }
    

