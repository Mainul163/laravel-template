@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category') }}</div>

                <div class="card-body">
                    <a href="{{route('category.index')}}" class="btn btn-success"> All Category</a>
                    <br>
                    <br>
                    <br>
                    <form action="{{route('category.store')}}" method='post'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category name</label>
                            <input type="text" class="form-control" name="name" id="inputEmail3"
                                class="@error('name') is-invalid @enderror" value="{{old('name')}}">

                            @error('name')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Size</label>
                            <input type="text" class="form-control" name="size" id="inputEmail3"
                                class="@error('size') is-invalid @enderror" value="{{old('size')}}">

                            @error('size')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" id="inputEmail3"
                                class="@error('price') is-invalid @enderror" value="{{old('price')}}">

                            @error('price')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection