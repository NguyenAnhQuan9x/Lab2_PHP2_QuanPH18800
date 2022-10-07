@extends('layouts.master')

@section('title')
    Sản phẩm
@endsection
@section('content-title')
    Danh sách sản phẩm
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Danh sách sản phẩm</h3>

      <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Đơn giá</th>
            <th>Ảnh</th>
            <th>Danh muc</th>
            <th>Mô tả</th>
            <th>Số lượng</th>
            <th>Trạng thái</th>
            <th>Lựa chọn</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Váy ngắn thời trang</td>
            <td>560000</td>
            <td><img src="../public/images/vay_nu.JPG" alt="" width="100px" height="100px"></td>
            <td>Váy nữ</td>
            <td>Váy ngắn thời trang nữ cao cấp</td>
            <td>150</td>
            <td>Còn hàng</td>
            <td><a href="{{ BASE_URL}}/san-pham/chi-tiet/1">Chi tiết</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Váy ngắn thời trang</td>
            <td>560000</td>
            <td><img src="../public/images/vay_nu.JPG" alt="" width="100px" height="100px"></td>
            <td>Váy nữ</td>
            <td>Váy ngắn thời trang nữ cao cấp</td>
            <td>150</td>
            <td>Còn hàng</td>
            <td><a href="{{ BASE_URL}}/san-pham/chi-tiet/2">Chi tiết</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Váy ngắn thời trang</td>
            <td>560000</td>
            <td><img src="../public/images/vay_nu.JPG" alt="" width="100px" height="100px"></td>
            <td>Váy nữ</td>
            <td>Váy ngắn thời trang nữ cao cấp</td>
            <td>150</td>
            <td>Còn hàng</td>
            <td><a href="{{ BASE_URL}}/san-pham/chi-tiet/3">Chi tiết</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Váy ngắn thời trang</td>
            <td>560000</td>
            <td><img src="../public/images/vay_nu.JPG" alt="" width="100px" height="100px"></td>
            <td>Váy nữ</td>
            <td>Váy ngắn thời trang nữ cao cấp</td>
            <td>150</td>
            <td>Còn hàng</td>
            <td><a href="{{ BASE_URL}}/san-pham/chi-tiet/4">Chi tiết</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Váy ngắn thời trang</td>
            <td>560000</td>
            <td><img src="../public/images/vay_nu.JPG" alt="" width="100px" height="100px"></td>
            <td>Váy nữ</td>
            <td>Váy ngắn thời trang nữ cao cấp</td>
            <td>150</td>
            <td>Còn hàng</td>
            <td><a href="{{ BASE_URL}}/san-pham/chi-tiet/5">Chi tiết</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <!-- /.card-body -->
  </div>
  <div class="row">
    <div class="col-12">
      <a href="{{BASE_URL}}san-pham" class="btn btn-secondary">Thêm sản phẩm</a>
    </div>
  </div>
@endsection