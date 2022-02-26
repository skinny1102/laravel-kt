@extends('../layout')
@section('content')
            <div class="container">
                <h2>Đây là trang page Product</h2>
                <h3>WELLCOME</h3>
                @php
                $id = 5
                @endphp
                 <a href="{{ route('product.show',['product'=>$id ]) }}">Xem chi tiết bài viết  </a> 
            </div>
@endsection('content')
