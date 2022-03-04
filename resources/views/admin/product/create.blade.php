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
    <div class="card-body">

    </div>
      <div class="col-3">
      <ul class="list-group">
            <li class="list-group-item bg-light"><a href="{{route('product.index')}}">Tất cả sản phẩm </a> </li>
            <li class="list-group-item"><a href="{{route('product.create')}}">Thêm sản phẩm</a></li>
        </ul>
        <!-- <a href="{{route('product.create')}}" class="btn btn-primary mt-3"> Thêm sản phẩm <i class="fa-solid fa-plus"></i></a> -->
        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            </div>
            <div class="col-9 bg-light">
            <form method="POST" action="{{route('product.store')}}">
            @csrf
            <div class="form-group">
            <label for="name_product">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name_product" name="name_product" placeholder="Tên sản phẩm ...">
        </div>
        <div class="row ">
            <div class="col-6">
            <label for="category">Loại sản phẩm</label>
            <select class="form-control" name="category" id="category">
                @foreach($category as $key=>$value)
                        <option value="{{$value->id_category}}"> {{$value->name_category}}</option>
                @endforeach
            </select>
            </div>
            <div class="col-6">
            <label for="supplier">Nhà cung cấp</label>
            <select class="form-control" id="supplier" name="supplier">
                @foreach($supplier as $key=>$value)
                        <option value="{{$value->id_supplier}}"> {{$value->name_supplier}}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Tên sản phẩm ...">
        </div>
        <div class="row">
            <div class="col-4">
            <div class="form-group">
            <label for="price">Giá sản phẩm</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Giá sản phẩm  ...">
        </div>
            </div>
            <div class="col-4">
            <div class="form-group">
            <label for="quanlity">Số lượng</label>
            <input type="text" class="form-control" id="quanlity" name="quanlity" placeholder="Số lượng ...">
        </div>
            </div>
        </div>
        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <button class="btn btn-primary my-2">Thêm mới</button>
        </form>
      </div>
  </div>
</div>
@endsection
