@extends('layouts.main')
@section('content')
    <div class="manager__box__items">
        <div class="manager__box__items__header">
            <h2>Новый пост</h2>
            <div class="manager__box__items__right">
                <a href="" onclick="openMenu(event)" class="menu__btn">
                    <span class="menu__btn__element"></span>
                </a>
            </div>
        </div>
        <div class="manager__box__items__table manager__box__items__table--ptb">
            <form class="form" action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="form__box form__box--full">
                    <div class="form__box__items">
                        <div class="form__box__items__column">
                            <label>Название поста</label>
                            <input class="form__input" type="text" name="title" value="{{ old('title') }}"
                                   placeholder="Название поста">
                            @error('title')
                            <div class="form__error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form__box__items">
                        <div class="form__box__items__column">
                            <label>Выбор категории</label>
                            <select class="form__input" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? ' selected' : '' }}>{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="form__error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__box form__box--full form__box--grid-auto">
                    <div class="form__box__items__column">
                        <label>Содержание</label>
                        <textarea class="form__input" rows="15" name="content">{{ old('content') }}</textarea>
                        @error('content')
                        <div class="form__error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <input class="form__btn" type="submit" value="Добавить">
            </form>
        </div>
    </div>
@endsection
