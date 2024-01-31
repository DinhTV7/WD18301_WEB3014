{{-- Kế thừa lại layout dùng chung --}}
@extends('layout.main')
@section('content')
<h1>{{ $title }}</h1>
{{-- Hàm route là hàm dùng chung được viết ở trong env --}}
<a href="{{ route('add-customer') }}">
    <button>Thêm mới</button>
</a>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection