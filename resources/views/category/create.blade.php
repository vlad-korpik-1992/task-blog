@extends('layouts.main')
@section('content')
    <div class="manager__box__items">
        <div class="manager__box__items__header">
            <h2>Новая категория</h2>
            <div class="manager__box__items__right">
                <a href="" onclick="openMenu(event)" class="menu__btn">
                    <span class="menu__btn__element"></span>
                </a>
            </div>
        </div>
        <div class="manager__box__items__table manager__box__items__table--ptb">
            <form class="form" action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form__box form__box--full">
                    <div class="form__box__items">
                        <div class="form__box__items__column">
                            <label>Название категории</label>
                            <input class="form__input" type="text" name="title" value="{{ old('title') }}"
                                   placeholder="Название категории">
                            @error('title')
                            <div class="form__error">Это поле обязательно для заполнения</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <input class="form__btn" type="submit" value="Добавить">
            </form>
        </div>
    </div>
@endsection
