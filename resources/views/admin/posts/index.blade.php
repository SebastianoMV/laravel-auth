@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @foreach($posts as $post)
                    <div class="card m-3">
                      <div class="card-body">
                        <h5>
                          {{$post->title}}
                        </h5>
                        <p>
                          {{$post->content}}
                        </p>
                        <div class="text-right"> 
                          <a class="btn btn-primary m-1" href="#">Show</a>
                          <a class="btn btn-primary m-1" href="#">Edit</a>
                        </div>
                      </div>
                    </div>
                      
                    @endforeach
              
        </div>
    </div>
</div>
@endsection
