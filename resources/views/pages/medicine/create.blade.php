@extends('layouts.app')
@section('content')
    <form action="{{route('medicine.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Medicine Name</span>
            <input type="text" name="m_name" value="{{old('m_name')}}" class="form-control">
            @error('m_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Manufacturing Date</span>
            <input type="date" name="man_date" value="{{old('man_date')}}" class="form-control">
            @error('man_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="col-md-4 form-group">
            <span>Expiry Date</span>
            <input type="date" name="ex_date" value="{{old('ex_date')}}" class="form-control">
            @error('ex_date')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Medicine Category</span>
            <input type="text" name="m_category" value="{{old('m_category')}}" class="form-control">
            @error('m_category')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>In Stock</span>
            <input type="text" name="stock" value="{{old('stock')}}" class="form-control">
            @error('stock')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Add" >
    </form>
@endsection