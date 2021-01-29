@foreach ($header as $item)
  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">{{$item->span1}}</span>
    <span class="site-heading-lower">{{$item->span2}}</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">{{$item->a1}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item {{$urlRelatif == "/" ? 'active' : ''}} px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('w')}}">
              {{$item->a2}}
            </a>
          </li>
          <li class="nav-item {{$urlRelatif == "about" ? 'active' : ''}} px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('a')}}">{{$item->a3}}</a>
          </li>
          <li class="nav-item {{$urlRelatif == "products" ? 'active' : ''}} px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('p')}}">{{$item->a4}}</a>
          </li>
          <li class="nav-item {{$urlRelatif == "store" ? 'active' : ''}} px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="{{route('s')}}">{{$item->a5}}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endforeach