@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card mt-3">
                    <div class="card-header">
                        Insert a New Discount
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.discount.store')}}" method="post">
                            @csrf 
                            <div class="form-group mb-4">
                                <label for="" label="form-label">Name</label>
                                <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name')}}" required>
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" label="form-label">Code</label>
                                <input name="code" type="text" class="form-control {{$errors->has('code') ? 'is-invalid' : ''}}" value="{{old('code')}}" required>
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{$errors->first('code')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" label="form-label">Description</label>
                                <textarea name="description" cols="0" rows="2" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}">{{old('description')}}</textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{$errors->first('description')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" label="form-label">Discount Percentage</label>
                                <input name="precentage" type="number" class="form-control {{$errors->has('precentage') ? 'is-invalid' : ''}}" min="1" max="200" value="{{old('precentage')}}" required>
                                @if ($errors->has('precentage'))
                                    <p class="text-danger">{{$errors->first('precentage')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection