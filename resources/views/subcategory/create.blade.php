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
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{route('subcategory.store')}}" method='post'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">SubCategory name</label>
                            <input type="text" class="form-control" name="subcategory_name" id="inputEmail3"
                                class="@error('subcategory_name') is-invalid @enderror"
                                value="{{old('subcategory_name')}}">

                            @error('subcategory_name')
                            <strong class=" text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class=" col-form-label">Category <sapn class="text-danger">*</sapn>
                            </label></br></br>
                            <div class="">
                                <select class="form-control" name="category_id" aria-label="Default select example"
                                    class="@error('category_id') is-invalid @enderror" value="{{old('category_id')}}"
                                    required="required">
                                    <option selected disabled>Select</option>
                                    @foreach($category as $row)

                                    <option value="{{$row->id}}">{{$row->name}}
                                    </option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                <strong class=" text-danger">{{ $message }}</strong>
                                @enderror

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection