@extends('user.layoutuser')
@section('content')
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="tindaotao" class="left_content">
          <div class="single_post_content">
            <h2><span>Các hãng sản xuất </span></h2>
            <div class="d-flex flex-wrap justify-content-around">
            @foreach($categoryall as $key=>$value)
            <div class="card text-white bg-primary mb-2 " style="max-width: 20rem;">
            <a href="/hang?name={{$value->name_supplier}}" class="text-white">
                <div class="card-header">{{$value->name_supplier}}</div>
            </a>
             </div>
             @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="tindaotao" class="left_content">
          <div class="single_post_content">
            <h2><span></span></h2>
            <div class="d-flex flex-wrap justify-content-around">
            @foreach($productsuplier as $key=>$value)
            <div class="card m-1" style="width: 20rem;">
            <a href="/product-details/{{$value->id_product}}" class="text-decoration-none ">
            <img src="{{ asset('/uploads/' . $value->image_product) }}"  class="img-thumbnail mx-auto d-block" alt="..."style="width: 200px; height: 200px; object-fit: cover;"> 
              <!-- <img class="card-img-top" src="{{ asset('/uploads/' . $value->image_product) }}" alt="Card image cap"> -->
              <div class="card-body">
                <p class="card-text text-decoration-none font-weight-bold text-dark">{{$value->name_product}}</p>
    
                     <p class="card-text text-decoration-none font-weight-bold text-danger h5">
                        @convert($value->price) <span>Đ</span></p>
             
              </div>
            </a>
              
            </div>
            @endforeach  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

