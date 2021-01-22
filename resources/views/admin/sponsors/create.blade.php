@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Create Sponsor
    </div>

    <div class="card-body">
        <form method="POST" action="{{route('admin.sponsors.store')}}" enctype="multipart/form-data">
            @csrf            
            <div class="form-group">
                <label class="required" for="name">Link</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="url" id="name" value="{{ old('name', '') }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Image</label>
                <input type="file" name="image" requred class="form-control">
            </div>
            
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection