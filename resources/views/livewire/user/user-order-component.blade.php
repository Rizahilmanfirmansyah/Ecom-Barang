<div>
    {{-- Do your work, then step back. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem">
                <div class="card-header">
                    All Product
                </div>
                <div class="card-body">
                    @if(Session::has('notif'))
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nama Penjual</th>
                                <th>Alamat</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->nama}}</td>
                            <td>{{$order->nama_penjual}}</td>
                            <td>{{$order->alamat}}</td>
                            <td>{{$order->subtotal}}</td>
                            <td>
                                <a href="{{route('user.DetailOrder',['order_id'=>$order->id])}}" class="btn">Detail</a>
                            </td>     
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
