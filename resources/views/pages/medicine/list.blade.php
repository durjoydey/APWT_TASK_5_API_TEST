
@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Medicine Name</th>
            <th>Manufacturing Date</th>
            <th>Expiry Date</th>
            <th>Medicine Category</th>
            <th>In Stock</th>
        </tr>
        @foreach($medicines as $medicine)
            <tr>
                <td>{{$medicine->m_name}}</td>
                <td>{{$medicine->man_date}}</td>
                <td>{{$medicine->ex_date}}</td>
                <td>{{$medicine->m_category}}</td>
                <td>{{$medicine->stock}}</td>
            </tr>
        @endforeach
    </table>
@endsection

