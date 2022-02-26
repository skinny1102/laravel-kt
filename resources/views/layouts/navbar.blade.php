<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Quản lý sản phẩm
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="{{route('product.create')}}">Thêm sản  phẩm</a>
         <a class="dropdown-item" href="{{route('product.index')}}">Liệt kê sản phẩm</a>
         </div>
     </li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Quản lý danh mục
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="{{route('category.create')}}">Thêm loại sản phẩm</a>
        <a class="dropdown-item" href="{{route('category.index')}}">Liệt kê loại sản phẩm</a>
        </div>
     </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
</div>
