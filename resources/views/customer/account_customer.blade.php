@extends('layout')
@section('account_customer')

<div class="container">
    <div class="row">
        <div id="content" class="col-sm-3">
            <h3>Thông Tin Tài Khoản</h3>
            <table id="tb-account">
                <tr>
                    <td id="account-left">
                        <dl>
                            <dt>Đơn hàng đặt mua</dt>
                            <dd>
                                <a href="{{ Route('account_order')}}">Lịch sử mua hàng</a>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Thông tin tài khoản</dt>
                            <dd><a href="{{Route('account_info')}}">Thông tin cá nhân</a></dd>
                            <dd><a href="{{Route('change_password')}}">Thay đổi mật khẩu</a></dd>
                        </dl>
                        <div>
                            <a href="{{Route('dang_xuat')}}">Đăng xuất</a>
                        </div>
                    </td>
                    <td>
                        <h3></h3>
                    </td>
                </tr>
            </table>
        </div>
        <h4>Chọn các mục bên trái để xem thông tin</h4>
        @yield('account_order')
        @yield('account_info')
        @yield('change_password')
    </div>
</div>

@endsection