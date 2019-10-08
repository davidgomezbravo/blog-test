@extends('layouts.app')

@section('content')
<h1 class="h3">Post id: {{ $post->id }}</h1>
@include('posts.post')

<responses :post="{{ $post->id }}"></responses>
@endsection