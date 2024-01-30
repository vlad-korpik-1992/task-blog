@extends('layouts.main')
@section('content')
    <div class="manager__box__items">
        <div class="manager__box__items__header">
            <h2>Категории</h2>
            <div class="manager__box__items__right">
                <a href="" onclick="openMenu(event)" class="menu__btn">
                    <span class="menu__btn__element"></span>
                </a>
            </div>
        </div>
        <div class="manager__box__items__effect manager__box__items__effect--end">
            <a href="{{ route('category.create') }}" class="effect__link">
                <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="add">
                        <path id="Vector" d="M3 12.5C3 13.6819 3.23279 14.8522 3.68508 15.9442C4.13738 17.0361 4.80031 18.0282 5.63604 18.864C6.47177 19.6997 7.46392 20.3626 8.55585 20.8149C9.64778 21.2672 10.8181 21.5 12 21.5C13.1819 21.5 14.3522 21.2672 15.4442 20.8149C16.5361 20.3626 17.5282 19.6997 18.364 18.864C19.1997 18.0282 19.8626 17.0361 20.3149 15.9442C20.7672 14.8522 21 13.6819 21 12.5C21 11.3181 20.7672 10.1478 20.3149 9.05585C19.8626 7.96392 19.1997 6.97177 18.364 6.13604C17.5282 5.30031 16.5361 4.63738 15.4442 4.18508C14.3522 3.73279 13.1819 3.5 12 3.5C10.8181 3.5 9.64778 3.73279 8.55585 4.18508C7.46392 4.63738 6.47177 5.30031 5.63604 6.13604C4.80031 6.97177 4.13738 7.96392 3.68508 9.05585C3.23279 10.1478 3 11.3181 3 12.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Vector_2" d="M9 12.5H15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Vector_3" d="M12 9.5V15.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
                Добавить
            </a>
        </div>
        <div class="manager__box__items__table">
            <table class="crop__box">
                <thead>
                <tr class="crop__box__head">
                    <th class="crop__box__head__items">ID</th>
                    <th class="crop__box__head__items">Название</th>
                    <th class="crop__box__head__items">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr class="crop__box__head">
                        <td class="crop__box__head__items" data-title="ID">{{ $category->id }}</td>
                        <td class="crop__box__head__items" data-title="Название">{{ $category->title }}</td>
                        <td class="crop__box__head__items" data-title="Действие">
                            <div class="crop__action__box">
                                <a href="{{ route('category.show', $category->id) }}" class="crop__action__box__link" title="Посмотреть">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Frame">
                                            <path id="Vector" d="M6.66675 7.99984C6.66675 8.35346 6.80722 8.6926 7.05727 8.94265C7.30732 9.19269 7.64646 9.33317 8.00008 9.33317C8.3537 9.33317 8.69284 9.19269 8.94289 8.94265C9.19294 8.6926 9.33341 8.35346 9.33341 7.99984C9.33341 7.64622 9.19294 7.30708 8.94289 7.05703C8.69284 6.80698 8.3537 6.6665 8.00008 6.6665C7.64646 6.6665 7.30732 6.80698 7.05727 7.05703C6.80722 7.30708 6.66675 7.64622 6.66675 7.99984Z" stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path id="Vector_2" d="M14 8C12.4 10.6667 10.4 12 8 12C5.6 12 3.6 10.6667 2 8C3.6 5.33333 5.6 4 8 4C10.4 4 12.4 5.33333 14 8Z" stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                </a>
                                <a href="{{ route('category.edit', $category->id) }}" class="crop__action__box__link" title="Редактировать">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M2 14H4.87048L12.4055 6.46498C12.7862 6.08433 13 5.56806 13 5.02974C13 4.49142 12.7862 3.97515 12.4055 3.5945C12.0249 3.21385 11.5086 3 10.9703 3C10.4319 3 9.91567 3.21385 9.53502 3.5945L2 11.1295V14Z" stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9 5L11 7" stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <form action="{{ route('category.delete', $category->id) }}"
                                      class="crop__action__box__link" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-del-svg" title="Удалить">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M6.66675 9.33333C6.66675 9.68696 6.80722 10.0261 7.05727 10.2761C7.30732 10.5262 7.64646 10.6667 8.00008 10.6667C8.3537 10.6667 8.69284 10.5262 8.94289 10.2761C9.19294 10.0261 9.33341 9.68696 9.33341 9.33333C9.33341 8.97971 9.19294 8.64057 8.94289 8.39052C8.69284 8.14048 8.3537 8 8.00008 8C7.64646 8 7.30732 8.14048 7.05727 8.39052C6.80722 8.64057 6.66675 8.97971 6.66675 9.33333Z" stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.33398 5.3335H12.6666C12.8589 5.33347 13.0489 5.37502 13.2236 5.4553C13.3982 5.53557 13.5535 5.65267 13.6787 5.79856C13.8039 5.94446 13.896 6.1157 13.9488 6.30055C14.0017 6.4854 14.0139 6.67948 13.9846 6.8695L13.148 11.6375C13.0753 12.1098 12.836 12.5405 12.4733 12.8516C12.1106 13.1627 11.6485 13.3336 11.1706 13.3335H4.82931C4.35158 13.3335 3.88963 13.1624 3.52707 12.8514C3.1645 12.5403 2.92526 12.1097 2.85265 11.6375L2.01598 6.8695C1.98676 6.67948 1.99897 6.4854 2.05178 6.30055C2.1046 6.1157 2.19676 5.94446 2.32194 5.79856C2.44713 5.65267 2.60239 5.53557 2.77708 5.4553C2.95176 5.37502 3.14174 5.33347 3.33398 5.3335Z" stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.3333 6.6665L10 2.6665" stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M4.66675 6.6665L6.00008 2.6665" stroke="#536460" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="programme__box">
                <div class="programme__box__items">{{ $categories->links() }}</div>
            </div>
        </div>
    </div>
@endsection
