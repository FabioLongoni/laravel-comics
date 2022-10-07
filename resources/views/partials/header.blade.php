<header>
  <div class="container__lg">
    <img src="{{asset('img/dc-logo.png')}}" alt="logo Dc-Comics">
    @php 

    $links = [
      [
        'text' => 'characters',
      ],
      [
        'text' => 'comics',
      ],
      [
        'text' => 'movies',
      ],
      [
        'text' => 'tv',
      ],
      [
        'text' => 'movies',
      ],
      [
        'text' => 'collectibles',
      ],
      [
        'text' => 'videos',
      ],
      [
        'text' => 'fans',
      ],
      [
        'text' => 'news',
      ],
      [
        'text' => 'shop',
      ],
    ];
  @endphp

    <ul class="nav-bar-header">
      @foreach($links as $link)
      <li class="list-item {{ $loop->first ? 'active' : '' }}">
          <a class="">
              {{ $link['text'] }}
          </a>
      </li>
      @endforeach
    </ul>
    
  </div>
</header>