@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-200 shadow-xl">
            <div class="card-body">
                
                    @csrf
                    @method('PUT')
                    <div class="form-control w-full">
                        <label class="label">
                          <span class="label-text text-xl">Title</span>

                        </label>
                        <p  class=" w-full" >{{old('title') ?? $post->title}}</p>
                        @error('title')
                            <label class="label">
                                <span class="label-text-alt text-error">{{$message}}</span>
                            </label>
                        @enderror
                      </div>
                      <div class="form-control w-full">
                        <label class="label">
                          <span class="label-text text-xl">Content</span>
                        </label>
                        <p class=" w-full" placeholder="Content" name="body">{{old('body') ?? $post->body}}</p>
                        @error('body')
                            <label class="label">
                                <span class="label-text-alt text-error">{{$message}}</span>
                            </label>
                        @enderror
                      </div>
                      <a href="{{route('posts.index')}}" class="btn btn-primary my-3 max-w-xs w-full mx-auto">Back</a>
                
            </div>
          </div>
    </div>
@endsection
