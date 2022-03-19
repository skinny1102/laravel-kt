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
                <!-- <th scope="col">Ảnh</th> -->
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
                <!-- <td>
                @if($value->image_product !='')    
                  <img src="{{ asset('uploads/' . $value->image_product) }}" class="rounded mx-auto d-block" 
                  width="100"
                  height="100"
                  alt="...">     
                       
                @else
                  <img src="https://media.sproutsocial.com/uploads/2017/02/10x-featured-social-media-image-size.png" 
                    class="rounded mx-auto d-block" 
                    alt="Girl in a jacket"
                    width="100"
                    height="100">       
                @endif
                </td> -->
                <td>{{$value->price}}</td>
                <td>{{$value->quanlity}}</td>
                <td>

                    <button href="" class="btn-edit-produc btn btn-success" data-toggle="modal" data-target="#modal-edit" data-idpedit="{{$value->id_product}}"><i class="fa-solid fa-pen-to-square"></i></button>
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
                    <input type="hidden" class="btn btn-default"  value="Delete" />
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
<!-- Modal edit -->
<div id="modal-edit" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
      <form  method="post" id="form-edit" class="my-3 mx-3" class="form-edit">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
      <div class="row" >
          <div class="col-md-12"> <h3 class="text-center mt-3s">Chỉnh sửa</h3> </div>
      </div>
      <div class="row">
        <div class="col-md-4 ml-auto">
          <div class="row">
              <img src="https://media.sproutsocial.com/uploads/2017/02/10x-featured-social-media-image-size.png" class="rounded mx-auto d-block" alt="..." id="my_image">
        <div class="form-group">
            <label for="price">Giá sản phẩm</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Giá sản phẩm  ...">
        </div>
        <div class="form-group">
        
            <label for="quanlity">Số lượng</label>
            <input type="text" class="form-control" id="quanlity" name="quanlity" placeholder="Số lượng ...">
        </div>
          </div>
        </div>
        <div class="col-md-8 ml-auto">    
          <div class="form-group">
          <label for="name_product">Tên sản phẩm</label>
          <input type="email" class="form-control" id="name_product" name="name_product" placeholder="...">
        </div>
      <div class="row">
        <div class="col-6">
        <div class="form-group">
        <label for="category">Loại sản phẩm</label>
            <select class="form-control" name="category" id="category">
                @foreach($category as $key=>$value)
                        <option value="{{$value->id_category}}"> {{$value->name_category}}</option>
                @endforeach
            </select>
        </div>
        </div>
        <div class="col-6">
        <div class="form-group">
        <label for="supplier">Nhà cung cấp</label>
            <select class="form-control" id="supplier" name="supplier">
                @foreach($supplier as $key=>$value)
                        <option value="{{$value->id_supplier}}"> {{$value->name_supplier}}</option>
                @endforeach
            </select>
        </div>
        </div>
      </div> 
      <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="cpu_name">CPU Name</label>
                    <input type="text" class="form-control" id="cpu_name" name="cpu_name" placeholder="CPU Name ...">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="ram_name">RAM Name</label>
                    <input type="text" class="form-control" id="ram_name" name="ram_name" placeholder="Ram Name ...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="disk_name">Disk Name</label>
                    <input type="text" class="form-control" id="disk_name" name="disk_name" placeholder="CPU Name ...">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="card_name">Card Name</label>
                    <input type="text" class="form-control" id="card_name" name="card_name" placeholder="Card Name ...">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="desktop_name">DeskTop Name</label>
            <input type="text" class="form-control" id="desktop_name" name="desktop_name" placeholder="Desktop name ...">
        </div> 

 
      </div>
      </div>
      <div class="form-group">
          <label for="title">Tiêu đề</label>
          <input type="text" class="form-control" id="title"  name="title" >
      </div>
      <div class="form-group">
        <label for="content">Nội dung</label>
        <textarea class="form-control" id="content" name="content" rows="4"></textarea>
      </div>
          <div class="d-flex flex-row-reverse">
              <input type="submit" class="btn btn-success px-4" id="btn-edit-modal" value="Sửa"></input>
              <!-- <input type="hidden" class="btn btn-default"  value="Delete" /> -->
              <input type="hidden" name="_method" value="put" />
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
      </form>

    </div>
  </div>
</div>

@endsection
