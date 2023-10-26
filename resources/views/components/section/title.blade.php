<div class="sm:my-4 my-3 flex items-end justify-between pt-3">
    <h2 class="text-2xl font-semibold"> {{ $title }}  </h2>
    @if($link !='')         
    <a href="{{ $link }}" class="text-blue-500 sm:block hidden"> Lihat Selengkapnya </a>
    @endif
</div>