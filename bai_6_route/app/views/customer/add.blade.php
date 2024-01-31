@extends('layout.main')
@section('content')
    <h1>Thêm khách hàng mới</h1>

    <form action="{{ route('create-customer') }}" method="post">
        <label for="">Họ và tên:</label>
        <input type="text" name="name">
        <br/>

        <label for="">Email:</label>
        <input type="text" name="email">
        <br/>

        <label for="">Số điện thoại:</label>
        <input type="text" name="phone">
        <br/>

        <input type="submit" name="add" value="Thêm mới">
    </form>
@endsection