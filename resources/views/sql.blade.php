<html>
<head>
  <title>{{$title}}</title>
</head>

<body>
  <h1 style="text-align:center; color:lightblue;">{{$title}}</h1>
  <p>{{$listHeader}}</p>
  <ul>
    @foreach($list as $listItem)
    <li>{{$listItem}}</li>
    @endforeach
  </ul>
  <p>{{$listFooter}}</p>
</body>
</html>
