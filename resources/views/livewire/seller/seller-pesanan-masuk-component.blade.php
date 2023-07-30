<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-header">
                    Test
                </div>
                <div class="card-body">
                    @if (Session::has('notif'))
                    <div class="alert alert-success" role="alert">{{Session::get('notif')}}</div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama </th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Subtotal</th>
                                <th>Tanggal-Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->nama}}</td>
                            <td>{{$order->alamat}}</td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->subtotal}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>
                                <a href="{{ route('seller.DetailOrder',['order_id'=>$order->id])}}" class="btn">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
