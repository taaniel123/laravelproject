@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-5 pt-5">
            <div class="d-flex">
                <div class="h4 pt-3">{{ $user->username }}</div>
                <div class="p-2 pr-3"> <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button></div>
                <div class="p-2 pl-3"> @can('update', $user->profile)
                    <a href="/profile/{{ $user->username }}/edit"><button type="button" class="btn btn-light">Muuda profiili</button></a>
                    @endcan</div>
                <div class="pt-2 pl-3"> @can('update', $user->profile)
                    <a href="/p/create"><button type="button" class="btn btn-success">Lisa postitus</button></a>
                    @endcan</div>
            </div>
            <br>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> postitust</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> jälgijat</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> jälgib</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
