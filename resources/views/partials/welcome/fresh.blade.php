<section class="page-section clearfix">
    <div class="container">
      @foreach ($fresh as $item)
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset($item->img)}}" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$item->span1}}</span>
                <span class="section-heading-lower">{{$item->span2}}</span>
            </h2>
            <p class="mb-3">
                {{$item->p}}
            </p>
            <div class="intro-button mx-auto">
                <a class="btn btn-primary btn-xl" href="#">{{$item->btn}}</a>
            </div>
            </div>
        </div>
      @endforeach
    </div>
</section>