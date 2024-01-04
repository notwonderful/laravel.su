@extends('html')

@section('body')

    <div class="p-5 mh-100 mw-100 d-flex flex-column align-items-center">

        <li class="col d-flex gap-4 rounded p-3 p-xxl-4 align-items-center align-items-lg-start mb-3">
            <x-icon path="i.livewire" class="text-body-secondary flex-shrink-0" width="2rem" height="2rem"/>
            <a href="{{ route('home') }}"
               class="text-body-secondary text-decoration-none"
               data-action="keydown.left->tabs#previousTab keydown.right->tabs#nextTab keydown.home->tabs#firstTab:prevent keydown.end->tabs#lastTab:prevent">
                <h5 class="mb-0">Главная</h5>
                <small class="opacity-50">Реактивные шаблоны, построенные с помощью PHP</small>
            </a>
        </li>

        <li class="col d-flex gap-4 rounded p-3 p-xxl-4 align-items-center align-items-lg-start mb-3">
            <x-icon path="i.livewire" class="text-body-secondary flex-shrink-0" width="2rem" height="2rem"/>
            <a href="{{ route('feature') }}"
               class="text-body-secondary text-decoration-none"
               data-action="keydown.left->tabs#previousTab keydown.right->tabs#nextTab keydown.home->tabs#firstTab:prevent keydown.end->tabs#lastTab:prevent">
                <h5 class="mb-0">Возможности</h5>
                <small class="opacity-50">Реактивные шаблоны, построенные с помощью PHP</small>
            </a>
        </li>

        <li class="col d-flex gap-4 rounded p-3 p-xxl-4 align-items-center align-items-lg-start mb-3">
            <x-icon path="i.livewire" class="text-body-secondary flex-shrink-0" width="2rem" height="2rem"/>
            <a href="{{ route('feed') }}"
               class="text-body-secondary text-decoration-none"
               data-action="keydown.left->tabs#previousTab keydown.right->tabs#nextTab keydown.home->tabs#firstTab:prevent keydown.end->tabs#lastTab:prevent">
                <h5 class="mb-0">Трибуна</h5>
                <small class="opacity-50">Реактивные шаблоны, построенные с помощью PHP</small>
            </a>
        </li>

        <li class="col d-flex gap-4 rounded p-3 p-xxl-4 align-items-center align-items-lg-start mb-3">
            <x-icon path="i.livewire" class="text-body-secondary flex-shrink-0" width="2rem" height="2rem"/>
            <a href="{{ route('packages') }}"
               class="text-body-secondary text-decoration-none"
               data-action="keydown.left->tabs#previousTab keydown.right->tabs#nextTab keydown.home->tabs#firstTab:prevent keydown.end->tabs#lastTab:prevent">
                <h5 class="mb-0">Пакеты</h5>
                <small class="opacity-50">Реактивные шаблоны, построенные с помощью PHP</small>
            </a>
        </li>

        <li class="col d-flex gap-4 rounded p-3 p-xxl-4 align-items-center align-items-lg-start mb-3">
            <x-icon path="i.livewire" class="text-body-secondary flex-shrink-0" width="2rem" height="2rem"/>
            <a href="{{ route('jobs') }}"
               class="text-body-secondary text-decoration-none"
               data-action="keydown.left->tabs#previousTab keydown.right->tabs#nextTab keydown.home->tabs#firstTab:prevent keydown.end->tabs#lastTab:prevent">
                <h5 class="mb-0">Работа</h5>
                <small class="opacity-50">Реактивные шаблоны, построенные с помощью PHP</small>
            </a>
        </li>


        <li class="col d-flex gap-4 rounded p-3 p-xxl-4 align-items-center align-items-start">
            <x-icon path="i.livewire" class="text-body-secondary flex-shrink-0" width="2rem" height="2rem"/>
            <a href="{{ route('courses') }}"
               class="text-body-secondary text-decoration-none"
               data-action="keydown.left->tabs#previousTab keydown.right->tabs#nextTab keydown.home->tabs#firstTab:prevent keydown.end->tabs#lastTab:prevent">
                <h5 class="mb-0">Курсы</h5>
                <small class="opacity-50">Реактивные шаблоны, построенные с помощью PHP</small>
            </a>
        </li>
    </div>

@endsection
