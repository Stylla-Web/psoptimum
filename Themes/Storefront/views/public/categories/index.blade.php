@extends('public.layout')

@section('title', trans('storefront::categories.all_categories'))

@section('content')
    <section class="all-categories-wrap">
        <div class="container">
            <div class="row">
                @forelse ($categories as $category)
                    <div class="category-wrap col-4 mb-5">
                        <a class="pt-3" href="{{ $category->url() }}" title="{{ $category->name }}">
                        <h4 class="d-flex flex-column align-items-center">
                            <img src="{{$category->logo->path}}" alt="{{ $category->name }}" width="100px" class="mb-3"/>
                                {{ $category->name }}
                        </h4>
                        </a>
                        <h6>{{ $category->products->count() }} produits</h6>
                        @if ($category->items->isNotEmpty())
                            <p>
                                @foreach ($category->items as $subCategory)
                                    <a href="{{ $subCategory->url() }}"
                                       title="{{ $subCategory->name }}">{{ $subCategory->name }}</a>@if($loop->last).@else,@endif
                                    @include('public.categories.index.sub_category_items')
                                @endforeach
                            </p>
                        @endif
                    </div>
                @empty
                    @include('public.categories.index.empty_category')
                @endforelse
            </div>
        </div>
    </section>
@endsection
