@extends('layout.master')
@section('listCategory')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách khách hàng đăng ký tài khoản
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5"></div>
                <div class="col-sm-4">
                    
                </div>
                <form action="" role="form">
                    <div class="row">
                        <div class="col-sm-3">
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
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Số ĐT</th>
                            <th>Ngày đk</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_customer as $customer)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                            </td>
                            <td>{{ $customer->fullname }}</td>
                            <td>{{ $customer->email}}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td><span class="text-ellipsis">{{ $customer->created_at }}</span></td>
                            <td style="display:flex">
                                <a style="margin-right: 8px" href="" class="btn btn-primary" ui-toggle-class="">Sửa</a>
                                {{-- <a href="" class="btn btn-danger" ui-toggle-class="">Xóa</a> --}}

                                <form action="" method="POST" role="form">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-danger btn-delete">delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
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

    <script>
		$(document).ready(function() {
			$('.btn-delete').click(function() {
				let isDelete = confirm('Bạn có muốn xóa?');
				if(isDelete) {
					$(this).parents('form').submit();
				}
			})
		});
	</script>
@endsection
