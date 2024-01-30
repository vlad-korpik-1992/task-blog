@extends('layouts.main')
@section('content')
    <div class="manager__box__items">
        <div class="manager__box__items__header">
            <h2>{{ $post->title }}</h2>
            <div class="manager__box__items__right">
                <a href="" onclick="openMenu(event)" class="menu__btn">
                    <span class="menu__btn__element"></span>
                </a>
            </div>
        </div>
        <div class="manager__box__items__effect manager__box__items__effect--end">
            <div class="manager__box__items__effect--end">
                <a href="{{ route('post.edit', $post->id) }}" class="effect__link effect__link--transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path
                            d="M2 14.5H4.87048L12.4055 6.96498C12.7862 6.58433 13 6.06806 13 5.52974C13 4.99142 12.7862 4.47515 12.4055 4.0945C12.0249 3.71385 11.5086 3.5 10.9703 3.5C10.4319 3.5 9.91567 3.71385 9.53502 4.0945L2 11.6295V14.5Z"
                            stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 5.5L11 7.5" stroke="#536460" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    Редактировать
                </a>
                <form action="{{ route('post.delete', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="effect__link effect__link--danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="17" viewBox="0 0 12 17" fill="none">
                            <path
                                d="M0.857143 14.7222C0.857143 15.1937 1.03775 15.6459 1.35925 15.9793C1.68074 16.3127 2.11677 16.5 2.57143 16.5H9.42857C9.88323 16.5 10.3193 16.3127 10.6408 15.9793C10.9622 15.6459 11.1429 15.1937 11.1429 14.7222V4.05556H0.857143V14.7222ZM2.57143 5.83333H9.42857V14.7222H2.57143V5.83333ZM9 1.38889L8.14286 0.5H3.85714L3 1.38889H0V3.16667H12V1.38889H9Z"
                                fill="#EB5757"/>
                        </svg>
                        Удалить
                    </button>
                </form>
            </div>
        </div>
        <div class="manager__box__items__table">
            <div class="programme__box">
                <div class="programme__box__items">
                    <div class="programme__box__items__title">Категория:</div>
                    <div class="programme__box__items__content">
                        <a class="crop__box__head__items__link"
                           href="{{ route('category.show', $post->category->id) }}">{{ $post->category->title }}
                        </a>
                    </div>
                </div>
                <div class="programme__box__items">
                    <div class="programme__box__items__title">Контент:</div>
                    <div class="programme__box__items__content">{{ $post->content }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
