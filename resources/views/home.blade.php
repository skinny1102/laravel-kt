@extends('layouts.app')
@section('content')
<div class="container">
<div class="d-flex justify-content-center mt-4">
<div class="card text-white bg-primary mb-3 ml-3" style="max-width: 18rem;">
<a href="{{route('product.index')}}"  class="text-a-style-display"rel="noopener noreferrer">
  <div class="card-header">Quản lý sản phẩm</div>
    <div class="card-body">
      <h6 class="card-title">Số lượng sản phẩm hiện có : </h6>
      <p class="card-text">{{$productcount}}</p>
    </div>
  </a>
  </div>

  <!-- <div class="card text-white bg-secondary mb-3 ml-3" style="max-width: 18rem;">
      <a href="{{route('category.index')}}" class="text-a-style-display"  rel="noopener noreferrer">
      <div class="card-header">Quản lý loại sản phẩm </div>
        <div class="card-body">
          <h6 class="card-title">Số lượng loại sản phẩm hiện có : </h6>
          <p class="card-text">{{$categorycount}}</p>
        </div>
      </a>
  </div> -->

    <!-- <div class="card text-white bg-success mb-3 ml-3" style="max-width: 18rem;">
    <a href="http://" class="text-a-style-display" target="" rel="noopener noreferrer">
    <div class="card-header">Quản lý Nhà cung cấp</div>
      <div class="card-body">
        <h6 class="card-title">Số lượng nhà cung cấp : </h6>
        <p class="card-text">{{$suppliercount}}</p>
      </div>

    </a>
    </div> -->
</div>
</div>
@endsection
