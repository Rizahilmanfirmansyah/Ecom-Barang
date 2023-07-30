<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card">
                @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>   
                @endif
                <div class="card-body">
                    <form enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                        <div class="form-group">
                            <label for="">NAMA PRODUK</label>
                            <input type="text" class="form-control" wire:model="nama_produk">
                        </div>
                        <div class="form-group">
                            <label for="">DESKRIPSI</label>
                            {{-- <input type="text" class="form-control" wire:model="desk_produk"> --}}
                            <textarea class="form-control" wire:model="desk_produk" style="height: 10rem;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">STOK PRODUK</label>
                            <input type="text" class="form-control" wire:model="stock_produk">
                        </div>
                        <div class="form-group">
                            <label for="">HARGA</label>
                            <input type="text" class="form-control" wire:model="harga_produk">
                        </div>
                        <div class="form-group">
                            <label for="">FOTO</label>&nbsp;
                            <input type="file" class="form" name="foto_produk" wire:model="foto">
                            <br>
                            @if ($foto)
                                <img src="{{$foto->temporaryUrl()}}" width="120px" alt="">
                            @else
                                <img src="{{asset('assets/images/product')}}/{{$foto_produk}}" width="120px" alt="">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">MULTI IMAGES</label>&nbsp;
                            <input type="file" class="form" name="multi_images" wire:model="new_multi_images" multiple>
                            <br>
                            @if ($new_multi_images)
                            @foreach ($new_multi_images as $new_multi_image)
                            @if ($new_multi_image)
                            <img src="{{$new_multi_image->temporaryUrl()}}" width="120px" alt="">                                    
                            @endif
                            @endforeach    
                            @else
                            @foreach ($multi_images as $image)
                            @if ($image)
                            <img src="{{asset('assets/images/product')}}/{{$image}}" width="120px" alt="">                              
                            @endif    
                            @endforeach
                            @endif
                        </div>

                       <br>
                       <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
