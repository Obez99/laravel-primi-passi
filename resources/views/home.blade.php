<html>
<head>
  <title>{{$title}}</title>
</head>
<body>
  <header style="padding:10px 0; border-bottom: 1px solid lightgray;">
    <ul style="list-style-type:none; display:flex; justify-content:space-around">
      @foreach($contentList as $listItem)
      <li><a href="#" style="padding: 20px 50px; text-decoration:none; color:black; border:1px solid black">{{$listItem}}</a></li>
      @endforeach
    </ul>
  </header>
  <main>
    <h1>{{$text}}</h1>
  </main>
</body>
</html>
