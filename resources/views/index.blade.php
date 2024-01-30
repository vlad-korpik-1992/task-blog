@extends('layouts.main')
@section('content')
    <div class="manager__box__items">
        <div class="manager__box__items__header">
            <h2>Добро пожаловать</h2>
            <div class="manager__box__items__right">
                <a href="" onclick="openMenu(event)" class="menu__btn">
                    <span class="menu__btn__element"></span>
                </a>
            </div>
        </div>
        <div class="manager__box__items__content">
            <div class="manager__content__items">
                <a class="manager__content__link"
                   href="{{ route('category.index') }}">
                    <div class="manager__content__title">Категории</div>
                    <div class="manager__content__num">{{ $data['categoriesCount'] }}</div>
                </a>
            </div>
            <div class="manager__content__items">
                <a class="manager__content__link"
                   href="{{ route('post.index') }}">
                    <div class="manager__content__title">Посты</div>
                    <div class="manager__content__num">{{ $data['postsCount'] }}</div>
                </a>
            </div>
        </div>
    </div>
@endsection
