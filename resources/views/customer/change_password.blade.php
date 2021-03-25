@extends('customer.account_customer')
@section('change_password')

    <div class="col-sm-9">
        <h3>Thay đổi mật khẩu</h3>
        @if(Session::get('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error')}}
            </div>
        @endif

        @if(Session::get('success')) 
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>
        @endif   
        
        <form action="{{ Route('SaveChangePassword')}}" method="POST">
            @csrf
            <div class="form-group">
                <label style="width: 180px" for="">Mật khẩu hiện tại</label>
                <input type="password" name="old_password">
            </div>
            <div class="form-group">
                <label style="width: 180px" for="">Mật khẩu mới</label>
                <input type="password" name="new_password">
            </div>
            <div class="form-group">
                <label style="width: 180px" for="">Nhập lại mật khẩu mới</label>
                <input type="password" name="re_new_password">
            </div>
            <button type="submit" class="btn btn-warning">Thay đổi</button>
        </form>

    </div>

@endsection
