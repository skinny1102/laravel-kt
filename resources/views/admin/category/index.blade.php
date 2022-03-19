@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8 my-3">
            <div class="card">
                <div class="card-header text-center">Quản lý sản phẩm</div>
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
            <li class="list-group-item bg-light"><a href="{{route('product.index')}}">Tất cả Loại sản phẩm </a> </li>
            <li class="list-group-item"><a href="{{route('product.create')}}">Thêm sản loại sản phẩm</a></li>
        </ul>
        <!-- <a href="{{route('product.create')}}" class="btn btn-primary mt-3"> Thêm sản phẩm <i class="fa-solid fa-plus"></i></a> -->
      </div>
      <div class="col-9">
        <div class="tab-content" id="nav-tabContent">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên loại sản phẩm</th>
                <th scope="col">Số lượng hiện có </th>
                <th scope="col">Ation</th>
                </tr>
            </thead>
            <tbody>
            @foreach($category as $key=>$value)
            <tr>
                <th scope="row">{{$value->id_category}}</th>
                <td>{{$value->name_category}}</td>
                <td>{{$value->count}}</td>
                <td>

                    <button class="btn-edit-produc btn btn-success" data-toggle="modal" data-target="#modal-edit" data-idpedit=""><i class="fa-solid fa-pen-to-square"></i></button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-delete-inside btn btn-danger disable" data-toggle="modal" data-idproduct="" data-target="#delete-product-modal" >
                    X
                    </button>
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
