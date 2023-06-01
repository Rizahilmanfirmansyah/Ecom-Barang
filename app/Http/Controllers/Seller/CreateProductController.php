<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Seller.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_produk' => 'required',
            'desk_produk' => 'required',
            'harga_produk' => 'required'
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/fotos', $image->hashName());

        $product = m_product::create([
            'foto' => $image->hashName(),
            'nama_produk' => $request->nama_produk,
            'desk_produk' => $request->desk_produk,
            'harga_produk'=> $request->harga_produk
        ]);

        return redirect()->route('seller.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('Seller.edit');
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
        $this->validate($request,[
            'nama_produk' => 'required',
            'desk_produk' => 'required',
            'harga_produk' => 'required'
        ]);

        $product = m_product::where('id', $id)->first();

        if ($request->file('foto') == '') {
            $produk->update([
                'nama_produk' => $request->nama_produk,
                'desk_produk' => $request->desk_produk,
                'harga_produk'=> $request->harga_produk
            ]);
        }else{
            Storage::disk('local')->delete('public/fotos'.$product->foto);

            $image = $request->file('foto');
            $image->storeAs('public/fotos',$image->hashName());

            $product->update([
                'foto'=>$image->hashName(),
                'nama_produk' => $request->nama_produk,
                'desk_produk' => $request->desk_produk,
                'harga_produk'=> $request->harga_produk
            ]);
        }

        session()->flash('notif', 'produk berhasil di update');
        return redirect()->route('seller.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = m_product::where('id', $id)->first();
        $product->delete();
        session()->flash('notif', 'Produk Berhasil Di hapus');
        return redirect()->route('seller.index');
    }
}
