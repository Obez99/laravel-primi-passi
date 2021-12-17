<html>
<head>
  <title>{{$title}}</title>
</head>

<body>
  <h1 style="text-align:center; color:red;">{{$title}}</h1>
  @if(isset($desc) && is_string($desc))
  <p>{{$desc}}</p>
  @else
  <p>Nessuna descrizione disponibile</p>
  @endif


  <a href="/">
    << Torna indietro </a>
</body>
</html>
