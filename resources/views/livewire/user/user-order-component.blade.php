<div>
    {{-- Do your work, then step back. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tr>
                            @foreach ($orders as $order)
                            <td>{{$order->nama}}</td>
                            <td>{{$order->alamat}}</td>
                            <td>{{$order->subtotal}}</td>
                            <td>
                                <a href="{{route('user.OrderDetail',['order_id'=>$order->id])}}" class="btn">Detail</a>
                            </td>     
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
