<h3>Dane ze strony http://jsonplaceholder.typicode.com/posts</h3>

<ul>
@foreach ($tab as $item)
<>
Userid: {{$item['id']}}
<p>Title: {{$item['title']}}</p>
</li>
@endforeach
</ul>

{{print_r($tab)}}