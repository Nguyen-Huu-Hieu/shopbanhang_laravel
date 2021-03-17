@extends('layout.master')
@section('addBrand')

<section class="panel">
    <header class="panel-heading">
        Thêm thương hiệu sản phẩm
    </header>

    <div class="panel-body">
        <div class="position-center">
            <form action="/save_product_brand" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <label for="brand_name">Tên thương hiệu</label>
                    <input type="text" name="brand_name" class="form-control" id="brand_name" placeholder="Nhập tên danh mục ..." required>
                </div>  
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea style="resize: none" class="form-control" name="product_brand_desc" id="description" cols="30" rows="10" placeholder="Nhập mô tả ..."></textarea>
                </div>
    
                {{-- <div class="form-group">
                    <label for="display">Hiển thị</label>
                    <select name="category_product_status" class="form-control" name="" id="display">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiển thị</option>

                    </select>
                </div> --}}
                <button type="submit" class="btn btn-info">Lưu</button>
            </form>
        </div>

    </div>
</section>

@endsection