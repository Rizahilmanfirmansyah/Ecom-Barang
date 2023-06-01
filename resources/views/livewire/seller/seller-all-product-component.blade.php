<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div>
        <div class="">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 63rem;">
                    <div class="card-header">
                        <strong class="card-title">Semua Product</strong>
                    </div>
                    <div class="card-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table id="data" class="table">
                            <thead>
                                <tr>
                                    <th>FOTO PRODUK</th>
                                    <th>NAMA PRODUK</th>
                                    <th>HARGA PRODUK</th>
                                    <th>STOCK PRODUK</th>
                                    <th>TANGGAL UPLOAD</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $produk)
                                <tr>
                                    <td><img src="{{ asset('assets/images/product')}}/{{$produk->foto_produk}}" width="120px" height="120px" alt=""></td>
                                    <td>{{$produk->nama_produk}}</td>
                                    <td>Rp {{number_format($produk->harga_produk ,0,",",".")}}</td>
                                    <td>{{$produk->stock_produk}}</td>
                                    <td>{{$produk->created_at}}</td>
                                    <td>
                                        <a href="{{route('seller.edit-product',['product_id'=>$produk->id])}}" class="btn btn-success ti-marker"></a>
                                        &nbsp;
                                        <a href="#" wire:click.prevent="deleteProduct({{$produk->id}})" class="btn btn-danger ti-trash"></a>
                                    </td>
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
