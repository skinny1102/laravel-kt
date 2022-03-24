@extends('user.layoutuser')
@section('content')
<section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
        @foreach($product as $key=>$value)
          <div class="single_iteam"> <a href="/product-details/{{$value->id_product}}"> 
            <img src="{{ asset('/uploads/' . $value->image_product) }}" alt="" 
          style="width: 710px; height: 448px; object-fit: cover;"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="">{{$value->name_product}}</a></h2>
              <p></p>
            </div>
          </div>
          @endforeach  
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Sản phẩm mới </span></h2>
          @foreach($productnew as $key=>$value)
       
                <div class="media"> <a href="/product-details/{{$value->id_product}}" class="media-left"> 
                  <img alt="" src="{{ asset('/uploads/' . $value->image_product) }}"
                   style=" object-fit: cover;" > </a>
                  <div class="media-body">
                     <a href="/product-details/{{$value->id_product}}" class="catg_title text-decoration-none h5">{{$value->name_product}}</a> 
                     <br>
                     <p class="card-text text-decoration-none font-weight-bold text-danger h5">
                        @convert($value->price) <span>Đ</span></p>
                  </div>
         
                </div>
       
          @endforeach  
          <!-- <div class="latest_post_container">

            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">

          
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div id="tindaotao" class="left_content">
          <div class="single_post_content">
            <h2><span>Sản phẩm bán chạy </span></h2>
            <div class="d-flex flex-wrap justify-content-center">
            @foreach($productEx as $key=>$value)
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
          <!-- <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Máy tính để bàn</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="" class="featured_img"> <img alt="" src="https://laptop88.vn/media/product/pro_poster_5961.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="">[Mới 100% Full Box] Laptop Asus Zenbook Q408UG- AMD Ryzen 5</a> </figcaption>
                      <p>Laptop văn phòng cao cấp, sang trọng, mỏng nhẹ chỉ khoảng 1.15kg. Card rời Geforce MX350 2GB. Màn</p>
                    </figure>
                    <h2><span>Giá </span> : 1000000 vnd</h2>
                  </li>
                </ul>
                <ul class="spost_nav">

                  
                  
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Bàn phím , Chuột</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="" class="featured_img"> <img alt="" src="/images/123.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="">[Mới 100% Full Box] Laptop Asus Zenbook Q408UG- AMD Ryzen 5</a> </figcaption>
                      <p>Laptop văn phòng cao cấp, sang trọng, mỏng nhẹ chỉ khoảng 1.15kg. Card rời Geforce MX350 2GB. Màn</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">

                  
                </ul>
              </div>
            </div>
          </div> -->

          <!-- <div class="single_post_content">
            <h2><span>Sản phẩm</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
            @foreach($productEx as $key=>$value)
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> 
                    <a class="fancybox-buttons" data-fancybox-group="button" href="" title="Photography Ttile 1"> 
                      <img src="{{ asset('/uploads/' . $value->image_product) }}" 
                      object-fit: cover;" alt=""/></a> </figure>
                </div>
              </li>
            @endforeach  
            </ul>
          </div> -->
     
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Các hãng sản xuất</span></h2>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <!-- <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Các hãng sản xuất</a></li> -->
              <!-- <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li> -->
               <!-- <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>  -->
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                @foreach($supplier as $key=>$value)
                  <li class="cat-item"><a href="/hang?name={{$value->name_supplier}}">{{$value->name_supplier}}</a></li>
                  @endforeach  
             
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <!-- <h2><span>Liên kết trang</span></h2>
            <a class="sideAdd" href=""><img src="images/lkt.jpg" style="object-fit: cover;" alt=""></a> </div> -->
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category</span></h2>
            <select class="catgArchive">
            @foreach($category as $key=>$value)
              <option>{{$value->name_category}}</option>
     
            @endforeach
            </select>
          </div>
          <!-- <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>  -->
        </aside>
      </div>
    </div>
  </section>
@endsection

