@extends('layouts.app')

@section('content')
<div class="container">
    @include('components.info', [
        'items' => $items,
        'model' => $tag,
        'name' => 'tag',
        'tag' => true,
    ])
    @include('items.listing', ['items' => $items])
</div>
@endsection