@extends('layout.master')
@section('addCategory')

<section class="panel">
    <header class="panel-heading">
        Thêm sản phẩm
    </header>

    <div class="panel-body">
        <div class="position-center">
            <form action="{{ route('saveProduct')}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_name">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Nhập tên danh mục ..." required>
                </div>  

                <div class="form-group">
                    <label for="product_name">Danh mục</label>
                    <select name="category_product" id="" class="form-control">
                        @foreach ($category_product as $category)
                            <option value="{{ $category->category_id}}">{{ $category->category_name}}</option>
                        @endforeach
                    </select>
                </div> 

                <div class="form-group">
                    <label for="product_name">Thương hiệu</label>
                    <select name="product_brand" id="" class="form-control">
                        @foreach ($product_brand as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endforeach

                    </select>
                </div> 

                <div class="form-group">
                    <label for="description">Mô tả sản phẩm</label>
                    <textarea style="resize: none" class="form-control" name="category_product_desc" id="description" cols="30" rows="5" placeholder="Nhập mô tả ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="product_content">Nội dung sản phẩm</label>
                    <textarea style="resize: none" class="form-control" name="product_content" id="product_content" cols="30" rows="10" placeholder="Nhập nội dung ..."></textarea>
                </div>  

                <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" name="product_image" class="form-control" id="image" required>
                </div>  


                <div class="form-group">
                    <label for="product_price">Giá sản phẩm</label>
                    <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Nhập giá ..." required>
                </div>  

                <div class="form-group">
                    <label for="product_status">Tình trạng sản phẩm</label>
                    <input type="text" name="product_status" class="form-control" id="product_status" placeholder="" >
                </div>  
                
        
                <button type="submit" class="btn btn-info">Lưu</button>
            </form>
        </div>

    </div>
</section>

@endsection