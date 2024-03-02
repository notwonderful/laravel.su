@extends('layout')
@section('title', 'Способы поддержки сайта')

@section('content')

    <x-header image="/img/ui/carpet.svg">
        <x-slot:sup>Ваша помощь держит нас на ковре</x-slot>
        <x-slot:title>Поддержите крутой проект</x-slot>

        <x-slot:description>
            Благодаря вашей помощи на проекте проявляются конкурсы, поддерживаются актуальные переводы и пишутся статьи.
        </x-slot>

        <x-slot:actions>
            <a href="{{ config('services.donate.yoomoney') }}" target="_blank" rel="noreferrer" class="btn btn-primary btn-lg px-4">Сделать пожертвование</a>
        </x-slot>
    </x-header>

    <x-container>
        <div class="row">
            <div class="bg-body-tertiary p-4 p-xl-5 rounded z-1">
                <div class="col-xxl-8 mx-auto">
                    <main data-controller="prism">
                        <h2>Способы поддержки</h2>
                        <p>Есть много способов внести свой вклад в русскоязычное сообщество Laravel,
                           не имея технических навыков или навыков программирования, которые также способствуют продвижению.</p>


                        <h3>Помощь другим пользователям</h3>

                        <p>Помимо создания хорошего хаба, нам также чрезвычайно важно создать вокруг него сильное сообщество.
                           Вы можете помочь нам достичь этой цели напрямую, помогая другим пользователям Laravel.</p>

                        <ul>
                            <li><p><strong>Создание учебных пособий.</strong> На всех уровнях приветствуются новые
                                                                              учебные пособия
                                                                              от новичка Laravel до продвинутого
                                                                              пользователя и даже до некоторых тем
                                                                              разработки, например, как создавать
                                                                              собственные пакеты.</p>
                            </li>
                            <li><p><strong>Участвуйте в обсуждениях.</strong> Задавайте вопросы, отвечайте на вопросы
                                                                              или решайте проблемы других пользователей
                                                                              Laravel;
                                                                              обсуждайте вопросы и особенности; делитесь
                                                                              советами, трюками и приемами;
                                                                              участвуйте в розыгрышах или конкурсах; и
                                                                              встречайте новых друзей на этом пути.</p>
                            </li>
                        </ul>


                        <h3>Используйте свои навыки в создании графики</h3>
                        <p>Существует несколько способов использования ваших графических навыков, которые могут принести пользу всему обществу.</p>
                        <ul>
                            <li>Создавайте новые наборы иконок и делитесь ими со всем миром.</li>
                            <li>Если вы думаете, что у вас есть идея для лучшего внешнего вида – мы готовы к экспериментам!</li>
                        </ul>


                        <h3>Спонсировать</h3>

                        <p>Если вы управляете бизнесом или хотите что бы сообщество процветало, имеет смысл
                           финансировать сообщество: это гарантирует, что оно остается здоровым и активно поддерживаемым.
                           Кроме того, это поможет вам упростить <a href="{{ route('jobs') }}">привлечение разработчиков</a>.</p>
                    </main>
                </div>
            </div>
        </div>
    </x-container>

    @include('particles.sponsors')

@endsection
