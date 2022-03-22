@extends('user.layoutuser')
@section('content')
<section id="contentSection">
  <p class="url-crix">
    <span> <a href="/" class="text-dark">Trang chủ</a> </span>
    <span> / </span>
    <span>Laptop</span>
    <span> / </span>
    <span>{{$product->name_product}}</span>
  </p>
<hr class="hr-top">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="row">
      <p class="name-product">{{$product->name_product}}</p>
            <div class="col-lg-7 col-md-7 col-sm-">
                <img src="{{ asset('/uploads/' . $product->image_product) }}" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <p class="price-procduct"> @convert($product->price) <span>Đ</span></p>
                <p class="title-product"> {{$product->title}}</p>
                <p class="h4">Hãng : {{$product->name_supplier}} </p>
                <p class="h4">CPU : {{$product->cpu_name}}</p>
                <p class="h4">RAM : {{$product->ram_name}}</p>
                <p class="h4">Ổ cứng : {{$product->disk_name}}</p>
                <p class="h4">Card đồ họa  : {{$product->disk_name}}</p>
                <p class="h4">Màn hình : {{$product->desktop_name}} </p>
            </div>
    </div>
    <div class="row">
      <div>
      <hr class="hr-line">
        <p class="ddnb">Đặc điểm nổi bật</p>
        <hr class="hr-line">
      </div>
      <p class="ddnb-title">{{$product->title}}</p>
      <div class="ddnb-pr-content">
      <p  class="ddnb-content">{{$product->content}}</p>
      </div>

   

         
    </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Sản Phẩm Liên Quan</span></h2>
            <ul class="spost_nav">
            @foreach($productld as $key=>$value)
            <li>
                <div class="media wow fadeInDown"> <a href="" class="media-left"> 
                  <img alt="" src="{{ asset('/uploads/' . $value->image_product) }}"
                  style=" hieght:200px; width:347; object-fit: cover;" 
                  > 
                </a>
                <div class="media-body">
                     <a href="/product-details/{{$value->id_product}}" class="catg_title text-decoration-none h5">{{$value->name_product}}</a> 
                     <br>
                     <p class="card-text text-decoration-none font-weight-bold text-danger h5">
                        @convert($value->price) <span>Đ</span></p>
                  </div>
                </div>
              </li>
                @endforeach

            
            </ul>
        </aside>
      </div>
    </div>
      <hr>
  </section>

@endsection('content')
