@extends('layout')
@section('login_customer')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

                <h3 for="">Đăng Nhập</h3>
                <form action="{{ Route('khach_hang_dang_nhap')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email đăng nhập</label>
                        <input id="email" class="form-control" type="email" value="huuhieu2468@gmail.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input id="password" class="form-control" value="123456" type="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-danger">Đăng nhập</button>
                    @php
                        $customer_login_message = Session::get('customer_login_message');
                        if($customer_login_message) {
                            echo '<span style="color: red">' .$customer_login_message . '</span>' ;
                            Session::put('customer_login_message', null);
                        }
                    @endphp
                </form>
            </div>
        </div>
    </div>
@endsection  