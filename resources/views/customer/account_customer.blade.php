@extends('layout')
@section('account_customer')

    <div id="content">
        <h3>Thông Tin Tài Khoản</h3>
        <table id="tb-account">
            <tr>
                <td id="account-left">
                    <dl>
                        <dt>Đơn hàng đặt mua</dt>
                        <dd>
                            <a href="">Danh sách đơn hàng</a>
                        </dd>
                    </dl>
                    <dl>
                        <dt>Thông tin tài khoản</dt>
                        <dd><a href="">Thông tin cá nhân</a></dd>
                        <dd><a href="">Thay đổi mật khẩu</a></dd>
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
@endsection