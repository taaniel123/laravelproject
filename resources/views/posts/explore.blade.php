@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <span class="font-weight-bold col-4 offset-3 pb-6">
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                    <a href="/profile/{{ $post->user->username }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                    </span>
        <div class="row">
            <div class="col-6 offset-3 pt-2">
                <a href="/profile/{{ $post->user->username }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div>
                    <p>
                        {{ $post->caption }}
                    </p><hr>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
