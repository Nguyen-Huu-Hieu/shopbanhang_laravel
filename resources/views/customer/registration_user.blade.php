@extends('layout')
@section('registration_user')
    <div class="container">
        <h3>Đăng Ký</h3>
        <div class="row">
            <form action="{{ Route('SaveRegistration')}}" method="POST">
                @csrf
                <div class="col-sm-4">
                    <div class="form-group">
                    <label for="email">Địa chỉ Email (*)</label>
                    <input id="email" class="form-control" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu (*)</label>
                    <input id="password" class="form-control" type="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="re-password">Nhập lại mật khẩu (*)</label>
                    <input id="re-password" class="form-control" type="text" name="re-password" required>
                </div>
                
                <div class="form-group">
                    <label for="fullname">Họ và tên (*)</label>
                    <input id="fullname" class="form-control" type="text" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="">Giới tính</label>
                    <input id="male" class="form-control" type="radio" name="gender" value="male">
                    <label for="male">Nam</label>
                    <input id="female" class="form-control" type="radio" name="gender" value="female">
                    <label for="female">Nữ</label>
                    
                </div>
                <div class="form-group">
                    <label for="city">Tỉnh/Tp</label>
                    <select name="city" id="city">
                        <option value="">Ha Noi</option>
                        <option value="">Ha Noi</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ nhận hàng</label>
                    <input id="address" class="form-control" type="text" name="address">
                </div>
                <div class="form-group">
                    <label for="phone">Điện thoại di động</label>
                    <input id="phone" class="form-control" type="number" name="phone">
                </div>
                <button type="submit" class="btn btn-danger">Đăng ký</button>
            </form>
            </div>
        </div>
    </div>
@endsection