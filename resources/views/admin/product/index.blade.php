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
        <!-- <a href="{{route('product.create')}}" class="btn btn-primary mt-3"> Thêm sản phẩm <i class="fa-solid fa-plus"></i></a> -->
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

                    <button href="{{route('product.destroy',['product' => $value->id_product])}}" class="btn-edit-produc btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn-delete-inside btn btn-danger" data-toggle="modal" data-idproduct="{{$value->id_product}}" data-target="#delete-product-modal">
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
<form  method="post" id="form_delete_product">
                    <input class="btn btn-default" type="submit" value="Delete" type="hidden"/>
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>             
<!-- Modal -->
<div class="modal fade" id="delete-product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xoá</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Bạn có chắc muốn xóa sản phảm này không > 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="btn-delete-product" type="button" class="btn btn-danger">Đồng ý </button>
      </div>
    </div>
  </div>
</div>
@endsection
