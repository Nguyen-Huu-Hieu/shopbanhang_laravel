@extends('layout.master')
@section('addCategory')

<section class="panel">
    <header class="panel-heading">
        Thêm danh mục sản phẩm
    </header>

    <div class="panel-body">
        <div class="position-center">
            <form action="/save_category_product" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <label for="category_name">Tên danh mục</label>
                    <input type="text" name="category_product_name" class="form-control" id="category_name" placeholder="Nhập tên danh mục ..." required>
                </div>  
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea style="resize: none" class="form-control" name="category_product_desc" id="description" cols="30" rows="10" placeholder="Nhập mô tả ..."></textarea>
                </div>
    
                <div class="form-group">
                    <label for="display">Hiển thị</label>
                    <select name="category_product_status" class="form-control" name="" id="display">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiển thị</option>

                    </select>
                </div>
                <button type="submit" class="btn btn-info">Lưu</button>
            </form>
        </div>

    </div>
</section>

@endsection