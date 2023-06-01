<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem">
                <div class="card-body">
                    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addproduct">
                        <div class="form-group">
                            <label for="">NAMA PRODUK</label>
                            <input type="text" class="form-control" wire:model="nama_produk">
                            <br>
                            @error('nama_produk') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">DESKRIPSI</label>
                            {{-- <input type="text" id="myTextarea" class="form-control" wire:model="desk_produk"> --}}
                            <textarea class="form-control" wire:model="desk_produk" style="height: 10rem;"></textarea>
                            @error('desk_produk') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">STOK PRODUK</label>
                            <input type="text" class="form-control" wire:model="stock_produk">
                        </div>
                        <div class="form-group">
                            <label for="">HARGA</label>
                            <input type="text" class="form-control" wire:model="harga_produk">
                            @error('harga_produk') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">STATUS</label>
                            <input type="text" class="form-control" wire:model="status" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">FOTO</label>&nbsp;
                            <input type="file" class="" wire:model="foto_produk">
                            <br>
                            @if ($foto_produk)
                                <img src="{{$foto_produk->temporaryUrl()}}" width="120px" alt="">
                            @endif
                        </div>
                        <div style="margin-top: 15px;">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
