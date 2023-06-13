@php
  $dashboard = [
    'title' => 'Dashboard',
    'url' => route('user.dashboard'),
    'name' => 'dashboard',
    'icon' => 'bi-house-fill',
  ];

  $questions = [
    'title' => 'Pertanyaan',
    'name' => '#',
    'icon' => 'bi-question-square-fill',
    'children' => [
        [
            'title' => 'Daftar Pertanyaan',
            'name' => '#asdf',
            'icon' => 'bi-list-task',
            'url' => '#',
        ],
        [
            'title' => 'Buat Pertanyaan',
            'name' => '#',
            'icon' => 'bi-plus-square',
            'url' => '#',
        ],
    ]
  ];

  $nilai = [
    'title' => 'Nilai',
    'url' => route('user.nilai'),
    'name' => 'nilai',
    'icon' => 'bi-123',
  ];

  $users = [
    'title' => 'User',
    'url' => route('user.setting'),
    'name' => 'setting',
    'icon' => 'bi-person-circle',
  ];

  $menus = [$dashboard , $questions , $nilai , $users];

@endphp


<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="{{ route('user.dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-6"  src="/template/source/dist/images/logo.svg">
        <span class="hidden xl:block text-white text-lg ml-3"> Rubick </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        @foreach ($menus as $index => $menu)
            @if (empty($menu['children']))
                <li>
                    <a href="{{ $menu['url'] }}" class="side-menu {{request()->is($menu['name'].'*') ? 'side-menu--active' : ''}}">
                        <div class="side-menu__icon text-xl"> <i class="bi {{ $menu['icon'] }}"></i> </div>
                        <div class="side-menu__title">
                            {{ $menu['title'] }}
                        </div>
                    </a>
                </li>
            @else
                <li>
                    <a href="javascript:;" class="side-menu {{request()->is($menu['name'].'*') ? 'side-menu--active' : ''}} ">
                        <div class="side-menu__icon text-xl">
                            <i class="bi {{ $menu['icon'] }}"></i>
                        </div>
                        <div class="side-menu__title">
                            {{ $menu['title'] }}
                            <div class="side-menu__sub-icon"><i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="{{request()->is($menu['name'].'*') ? 'side-menu__sub-open' : ''}}">
                        @foreach ($menu['children'] as $submenu)
                            <li>
                                <a href="{{ $submenu['url'] }}" class="side-menu {{request()->is($submenu['name']) ? 'side-menu--active' : ''}}">
                                    <div class="side-menu__icon text-xl">
                                        <i class="bi {{ $submenu['icon'] }}"></i>
                                    </div>
                                    <div class="side-menu__title">{{ $submenu['title'] }}</div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    </ul>
</nav>
<!-- END: Side Menu -->
