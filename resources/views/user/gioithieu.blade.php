@extends('user.layoutuser')
@section('content')

<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <p class="h2"  style="text-align: center; withd:100%">Giới thiệu chung về trang web</p>
            <h3 style="text-align: center">

            <p><sup> Một trong những đơn vị ti&ecirc;n phong tại H&agrave; Nội hoạt động trong lĩnh vực kinh doanh c&aacute;c d&ograve;ng sản phẩm laptop. Tạo dựng được chỗ đứng vững chắc tr&ecirc;n thị trường v&agrave; trở th&agrave;nh c&aacute;i t&ecirc;n quen thuộc đối với kh&aacute;ch h&agrave;ng.</sup></p>
            <p><sup>Sau 7 năm th&agrave;nh lập, lu&ocirc;n nỗ lực hết m&igrave;nh để đem đến dịch vụ v&agrave; giải ph&aacute;p c&ocirc;ng nghệ chuy&ecirc;n nghiệp, với t&acirc;m niệm mỗi kh&aacute;ch h&agrave;ng khi t&igrave;m kiếm đến ch&uacute;ng t&ocirc;i kh&ocirc;ng chỉ trải nghiệm dịch vụ mua b&aacute;n th&ocirc;ng thường m&agrave; sẽ cảm nhận thấy sự kh&aacute;c biệt - tin cậy, an t&acirc;m đến từ chất lượng sản phẩm, chế độ hậu m&atilde;i.</sup></p>
            <p><sup> cam kết c&aacute;c sản phẩm lu&ocirc;n đảm bảo chất lượng cao v&agrave; nguồn gốc r&otilde; r&agrave;ng, gi&aacute; cạnh tranh tr&ecirc;n thị trường, nhiều sự lựa chọn, nhiều ưu đ&atilde;i hấp dẫn, bảo h&agrave;nh uy t&iacute;n với chế độ hậu m&atilde;i d&agrave;i l&acirc;u.</sup></p>
            <p><sup>✅ Laptop cũ chất lượng - Bảo h&agrave;nh hậu m&atilde;i D&Agrave;I L&Acirc;U</sup></p>
            <p><sup>✅ Laptop mới 100% ch&iacute;nh h&atilde;ng - GI&Aacute; TỐT NHẤT THỊ TRƯỜNG</sup></p>
            <p><sup>Quy tụ&nbsp;đội ngũ nh&acirc;n vi&ecirc;n trẻ tuổi, c&oacute; chuy&ecirc;n m&ocirc;n, nhiệt huyết, tận tụy với kh&aacute;ch h&agrave;ng, khi t&igrave;m đến c&aacute;c bạn sẽ&nbsp;cảm thấy h&agrave;i l&ograve;ng khi tiếp x&uacute;c trực tiếp tại cửa h&agrave;ng hoặc qua điện thoại, nh&acirc;n vi&ecirc;n tư vấn của ch&uacute;ng t&ocirc;i sẽ hướng dẫn v&agrave; cung cấp cho kh&aacute;ch h&agrave;ng những th&ocirc;ng tin hữu &iacute;ch nhất với sự nhiệt th&agrave;nh v&agrave; th&acirc;n thiện. Đi theo&nbsp;phương ch&acirc;m &ldquo;Kiến tạo chất lượng - Kết nối sẻ chia&rdquo;, ch&uacute;ng t&ocirc;i lu&ocirc;n lắng nghe v&agrave; quan t&acirc;m tới nhu cầu của kh&aacute;ch h&agrave;ng, đồng thời kh&ocirc;ng ngừng n&acirc;ng cao chất lượng dịch vụ mỗi ng&agrave;y.</sup></p>
            <p><em><sup>Xin ch&acirc;n th&agrave;nh cảm ơn qu&yacute; kh&aacute;ch đ&atilde; ủng hộ . Sự h&agrave;i l&ograve;ng của qu&yacute; kh&aacute;ch ch&iacute;nh l&agrave; niềm vui v&agrave; tạo động lực gi&uacute;p ch&uacute;ng t&ocirc;i kh&ocirc;ng ngừng ho&agrave;n thiện v&agrave; ph&aacute;t triển dịch vụ hơn nữa!</sup></em></p>

            </h3>

            
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
  </section>

@endsection('content')
