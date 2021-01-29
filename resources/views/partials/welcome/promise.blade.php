<section class="page-section cta">
    <div class="container">
      @foreach ($promise as $item)
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$item->span1}}</span>
                <span class="section-heading-lower">{{$item->span2}}</span>
              </h2>
              <p class="mb-0">{{$item->p}}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</section>