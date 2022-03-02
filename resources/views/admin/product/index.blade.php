@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header">Quản lý sản phẩm</div>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div> -->

            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-3">
        <ul class="list-group">
            <li class="list-group-item bg-light"><a href="{{route('product.index')}}">Tất cả sản phẩm </a> </li>
            <li class="list-group-item"><a href="{{route('product.create')}}">Thêm sản phẩm</a></li>
        </ul>
        <a href="{{route('product.create')}}" class="btn btn-primary mt-3"> Thêm sản phẩm <i class="fa-solid fa-plus"></i></a>
      </div>
      <div class="col-9">
        <div class="tab-content" id="nav-tabContent">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Ation</th>
                </tr>
            </thead>
            <tbody>
            @foreach($product as $key=>$value)
            <tr>
                <th scope="row">{{$value->id_product}}</th>
                <td>{{$value->name_product}}</td>
                <td>{{$value->id_product}}</td>
                <td>{{$value->id_product}}</td>
                <td>
                    <a href="" class="btn-succes"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="" class="btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
                </tr>
                @endforeach        
            </tbody>
            </table>
        </div>
      </div>
  </div>
</div>
@endsection
