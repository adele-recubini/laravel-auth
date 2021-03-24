<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css') }}" type="text/css">
        <script src="{{ asset('js/app.js') }}"></script>

        <title>Film</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <h1>film</h1>

      {{-- creo la tabella e riporto tutte le proprietà della tabella, faccio diventare un link il name in modo tale che se clicco mi reindirizza nella route dove ho il singolo prodotto passandogli l id--}}

      <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($films as $film)


    <tr>
       <th scope="row">{{$film->id}}</th>
       <td><a href="{{route('films.show', compact('film'))}}">{{$film->name}}</a></td>
       <td>{{$film->type}}></td>
       <td>{{$film->price}}</td>
       <td><img src="{{$film->image}}" width="100"></td>


       <td>
        @if(Auth::check())
         <a href="{{ route('films.show', compact('film'))}}">
         <button type="button" name="button">SHOW</button></a>
        @endif
     </td>


     </tr>
    @endforeach

  </tbody>
</table>





    </body>
</html>
