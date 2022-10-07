@extends('layouts.master')

@section('title')
    Sản phẩm
@endsection
@section('content-title')
    Thêm mới sản phẩm
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Sản phẩm</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Tên sản phẩm</label>
              <input type="text" id="inputName" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputPrice">Đơn giá</label>
                <input type="number" id="inputPrice" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputUnit">Số lượng</label>
                <input type="number" id="inputUnit" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputDescription">Mô tả</label>
              <textarea id="inputDescription" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="inputImage">Ảnh sản phẩm</label>
                <input type="file" id="inputImage" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputCate">Danh mục</label>
                <select id="inputCate" class="form-control custom-select">
                  <option selected="" disabled="">Select one</option>
                  <option value="">Váy</option>
                  <option value="">Áo</option>
                  <option value="">Quần</option>
                </select>
              </div>
            <div class="form-group">
              <label for="inputStatus">Trạng thái</label>
              <select id="inputStatus" class="form-control custom-select">
                <option selected="" disabled="">Select one</option>
                <option value="">Còn hàng</option>
                <option value="">Hêt hàng</option>
              </select>
            </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Thêm sản phẩm" class="btn btn-success float-right">
        <a href="{{ BASE_URL}}san-pham/ds-san-pham" class="btn btn-secondary">Danh sách</a>
      </div>
    </div>
  </section>
@endsection