<div class="catalog__top">
    <div class="filter">
        <div class="filter__btn">
            <svg>
                <use xlink:href="#filter"></use>
            </svg>
            фильтр
        </div>
        <div class="filter__top-close js-filter-close">
            <img src="{{ asset('assets/images/svg/close2.svg') }}" alt="">
        </div>
        <div class="filter-bl">
            <div class="filter__top">
                <div class="filter__top-title">Фильтр</div>
                <div class="filter__top-close js-filter-close">
                    <img src="{{ asset('assets/images/svg/close2.svg') }}" alt=""></div>
            </div>
            <div class="filter__item open">
                <div class="filter__title open">цена</div>
                <div class="filter__holder" style="display: block;">
                    <div class="filter__container">
                        <div class="filter__range polzunok-container-6">
                            <div class="filter__range-item">
                                <input class="polzunok-input-6-left" type="text" value="{{$filters['price']['min']}}">
                            </div>
                            <div class="filter__range-item">
                                <input class="polzunok-input-6-right" type="text" value="{{$filters['price']['max']}}">
                            </div>
                            <div class="polzunok-6" data-min="{{$filters['price']['min']}}" data-max="{{$filters['price']['max']}}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter__item filter__item-list open">
                <div class="filter__title open">бренд</div>
                <div class="filter__holder" style="display: block;">
                    <div class="filter__container">
                        @foreach($filters['brands'] as $brand)
                            <div class="filter__group-check">
                                <div class="filter__check">
                                    <input type="checkbox" id="{{$brand['_id']}}" name="equipment-brand" value="{{$brand['_id']}}">
                                    <label for="{{$brand['_id']}}">{{$brand['title']}}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="filter__item open">
                <div class="filter__title open">Дополнительно</div>
                <div class="filter__holder" style="display: block;">
                    <div class="filter__container">
                        @foreach($filters['tags'] as $tag)
                        <div class="filter__group-check">
                            <div class="filter__check">
                                <input type="checkbox" id="{{$tag['_id']}}" name="dop" value="{{$tag['_id']}}">
                                <label for="{{$tag['_id']}}">{{$tag['title']}}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="filter__item filter__item-bord open">
                <div class="filter__holder">
                    <div class="filter__container">
                        <div class="filter__group-check">
                            <div class="filter__check">
                                <input type="checkbox" id="act2" name="act2">
                                <label for="act2">В наличии</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter__item filter__item-bord open">
                <div class="filter__holder">
                    <div class="filter__container">
                        <div class="filter__group-check">
                            <div class="filter__check">
                                <input type="checkbox" id="act1" name="act">
                                <label for="act1">Акции</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter__btn-b">
                <a class="button button-primary" href="#">Показать 40 товаров</a>
                <a class="button button-tx" href="#">Сбросить</a>
            </div>
        </div>
    </div>
    <div class="catalog__sorting">
        <div class="catalog__sorting-title">сортировать:</div>
        <ul class="catalog__sorting-list">
            <li class="{{ $sort["sort"] === "discount" ? "active" : "" }}"
                data-sort="{{$sort_param === "discount-asc" ? "discount-desc" : "discount-asc" }}">
                <a href="javascript:void(0)">
                    % скидки@if($sort['sort'] === 'discount') {!! $sort["order"] === 'asc' ? '&#8593' : '&#8595' !!} @endif
                </a>
            </li>
            <li class="{{$sort["sort"] === "price" ? "active" : "" }}"
                data-sort="{{$sort_param === "price-asc" ? "price-desc" : "price-asc" }}">
                <a href="javascript:void(0)">
                    цене@if($sort['sort'] === 'price') {!! $sort["order"] === 'asc' ? '&#8593' : '&#8595' !!} @endif
                </a>
            </li>
        </ul>
    </div>
</div>
