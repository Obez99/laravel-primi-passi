<html>
<head>
  <title>{{$title}}</title>
</head>

<body>
  <h1 style="text-align:center; color:lightblue;">{{$title}}</h1>
  @if(isset($listHeader, $list, $listFooter))
  <p>{{$listHeader}}</p>
  <ul>
    @foreach($list as $listItem)
    <li>{{$listItem}}</li>
    @endforeach
  </ul>
  <p>{{$listFooter}}</p>
  @else
  <p>Nessuna descrizione disponibile</p>
  @endif
  <a href="/">
    << Torna indietro </a>
</body>
</html>
