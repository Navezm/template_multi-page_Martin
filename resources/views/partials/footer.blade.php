<footer class="footer text-faded text-center py-5">
   @foreach ($footer as $item)
    <div class="container">
      <p class="m-0 small">{{$item->p}}</p>
    </div>
   @endforeach
</footer>