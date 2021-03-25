@extends('customer.account_customer')
@section('account_info')

    <div class="col-sm-9">
        <h3>Thông tin cá nhân</h3>
        <table border="1px solid gray">
        
                <tr>
                    <td>Họ tên</td>
                    <td>{{ $customer->fullname}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $customer->email}}</td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>{{ $customer->address}}</td>
                </tr>
                <tr>
                    <td>Số ĐT</td>
                    <td>{{$customer->phone}}</td>
                </tr>
        </table>
    </div>

@endsection
