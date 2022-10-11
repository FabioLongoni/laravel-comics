<header>
  <div class="container__lg">
    <a href="">
      <img src="{{asset('img/dc-logo.png')}}" alt="logo Dc-Comics">
    </a>  
    @php 

    $links = [
      [
        'text' => 'characters',
        'routeName' => 'home'
      ],
      [
        'text' => 'comics',
        'routeName'=> 'comics'
      ],
      [
        'text' => 'movies',
        'routeName' => 'movies'
      ],
      [
        'text' => 'tv',
        'routeName' => 'tv'
      ],
      [
        'text' => 'collectibles',
        'routeName' => 'collectibles'
      ],
      [
        'text' => 'videos',
        'routeName' => 'videos'
      ],
      [
        'text' => 'fans',
        'routeName' => 'fans'
      ],
      [
        'text' => 'news',
        'routeName' => 'news'
      ],
      [
        'text' => 'shop',
        'routeName' => 'shop'
      ]
    ];
    @endphp

    <ul class="nav-bar-header">
      @foreach($links as $link)
        <li class="">
          <a class="list-item {{ Route::currentRouteName() === $link['routeName'] ? 'active' : '' }}" 
            href="{{isset($link['routeName']) ? route($link['routeName']) : '/'}}">
            {{ $link['text'] }}
          </a>
        </li>
      @endforeach
    </ul>
    
  </div>
</header>