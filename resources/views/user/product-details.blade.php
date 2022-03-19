@extends('user.layoutuser')
@section('content')
<section id="contentSection">
  <p class="url-crix">
    <span>Trangchủ</span>
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
                <p>Hãng : {{$product->name_supplier}} </p>
                <p>CPU : {{$product->cpu_name}}</p>
                <p>RAM : {{$product->ram_name}}</p>
                <p>Ổ cứng : {{$product->disk_name}}</p>
                <p>Card đồ họa  : {{$product->disk_name}}</p>
                <p>Màn hình : {{$product->desktop_name}} </p>
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
                  <div class="media-body"> <a href="" class="catg_title">{{$value->name_product}}</a> </div>
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
