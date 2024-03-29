@extends('public.layout')

@section('title', $page->meta->meta_title ?: $page->name)

@push('meta')
    <meta name="title" content="{{ $page->meta->meta_title ?: $page->name }}">
    <meta name="description" content="{{ $page->meta->meta_description }}">
    <meta name="twitter:card" content="summary">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $page->meta->meta_title ?: $page->name }}">
    <meta property="og:description" content="{{ $page->meta->meta_description }}">
    <meta property="og:image" content="{{ $logo }}">
    <meta property="og:locale" content="{{ locale() }}">

    @foreach (supported_locale_keys() as $code)
        <meta property="og:locale:alternate" content="{{ $code }}">
    @endforeach
@endpush

@section('content')
    <section class="custom-page-wrap">
        <div class="container">
            @if($page->banner->path)
                <div class="custom-page-header" style="background: url('{{ $page->banner->path }}')">
                </div>
            @endif
            <div class="custom-page-content">
                @if ($latestProducts->isNotEmpty())
                    <div class="custom-page-left">
                        @include('public.products.index.latest_products')
                    </div>
                @endif
                <div class="custom-page-right">
                    {!! nl2br_save_html($page->body) !!}
                </div>
            </div>
        </div>
    </section>
@endsection
