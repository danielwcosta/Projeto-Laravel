<ul>
    <!-- // comando @ funciona no blade -->
    @foreach($filmes as $filme)
    
    <!-- <li>{{ $filme->title }} ({{ $filme->rating }})</li> -->
    <li>{{ $filme->titleComRating() }}</li>


    @endforeach()

    {{ $filmes->links() }}
</ul>