<html>
<head>
  <title>{{$title}}</title>
</head>
<body>
  <h1>{{$text}}</h1>

  <h2>I linguaggi di programmazione che ho utilizzato durante il corso Boolean:</h2>

  <ul>
    @foreach($contentList as $listItem)
    <li>{{$listItem}}</li>
    @endforeach
  </ul>
</body>
</html>
