<!DOCTYPE html>

<head>

    <title>Songs Page</title>
</head>
<body>
<h2>Songs Class</h2>
<table border="1" >
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
</tr>
@endforeach
</table>
</body>
</html>