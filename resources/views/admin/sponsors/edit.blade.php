@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Create Post
    </div>

    <div class="card-body">
        <form method="POST" action="{{route('admin.posts.update', $post->id)}}" enctype="multipart/form-data">
        @method('PUT')    
        @csrf
            <div class="form-group">
                <label class="required" for="name">Category</label>
                <select class="form-control" name="category">
                    <?php foreach($categories as $category){?>
                        <option <?php if($post->category==$category->id){ echo 'selected';}?> value="{{$category->id}}">{{$category->name}}</option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label class="required" for="name">Title</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="title" id="name" value="{{$post->title}}" required>
            </div>
            <div class="form-group">
                <label class="required" for="name">Content</label>
                <textarea name="content" class="form-control" rows="5">{{$post->content}}</textarea>
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