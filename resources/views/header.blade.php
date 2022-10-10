<header class="main_header">
    <div class="logo-header">
        <img src="{{ asset('images.dc-logo.png') }}" alt="">
    </div>
    <div>
        @php
            
            $links = [
                [
                    'text' => 'CHARACTERS',
                    'href' => 'http://127.0.0.1:8000/index',
                ],
                [
                    'text' => 'COMICS',
                    'href' => 'http://127.0.0.1:8000/index',
                ],
                [
                    'text' => 'MOVIE',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
                [
                    'text' => 'TV',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
                [
                    'text' => 'GAMES',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
                [
                    'text' => 'COLLECTIBLES',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
                [
                    'text' => 'VIDEOS',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
                [
                    'text' => 'FANS',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
                [
                    'text' => 'NEWS',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
                [
                    'text' => 'SHOP',
                    'href' => 'http://127.0.0.1:8000/comics',
                ],
            ];
        @endphp
{{-- <a href="{{isset( $link['routeName'])? $link['routeName']:'/'}}" --}}
{{-- class="{{Route::currentRouteName()=== $link['routeName']? 'active': ''}}" --}}
        <nav class="nav">
            @foreach ($links as $link)
            <ul class="list">
                    <li class="nav_link ">
                        <a href="">
                            {{ $link['text'] }}
                        </a>
                    </li>
            </ul>
            @endforeach
        </nav>
    </div>
</header>
</header>
