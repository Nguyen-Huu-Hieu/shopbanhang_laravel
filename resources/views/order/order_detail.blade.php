@extends('layout.master')
@section('listCategory')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chi tiết đơn hàng
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
            
                </div>
                <div class="col-sm-3">
                    
                </div>
                <form action="" role="form">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" name="keyword" value="" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-sm btn-default" type="submit">Tìm kiếm</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
			</div>
			
            <div class="table-responsive">
                
                    <div class="col-sm-4">
                        <h4>Thông tin người mua</h4>
                        <div>
                            <label for="">Họ tên</label>
                            <div>{{ }}</div>
                        </div>
                        <div>
                            <label for="">SĐT</label>
                            
                        </div>
                        <div>
                            <label for="">Địa chỉ nhận hàng</label>
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h4>Thông tin đơn hàng</h4>
                        <div>
                            <label for="">Mã SP</label>
                            <div></div>
                        </div>
                        <div>
                            <label for="">Tên SP</label>
                            <div>{{ $orderDetail->product_name }}</div>
                        </div>
                        <div>
                            <label for="">Số lượng</label>
                            
                        </div>
                        <div>
                            <label for="">Đơn giá</label>
                            
                        </div>
                        <div>
                            <label for="">Tổng tiền</label>
                            
                        </div>
                    </div>
                

            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    {{-- <script>
		$(document).ready(function() {
			$('.btn-delete').click(function() {
				let isDelete = confirm('Bạn có muốn xóa?');
				if(isDelete) {
					$(this).parents('form').submit();
				}
			})
		});
	</script> --}}
@endsection
