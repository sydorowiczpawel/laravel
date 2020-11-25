<h3>Dane ze strony http://jsonplaceholder.typicode.com/albums</h3>

<ul>
@foreach ($tab as $item)
<li>
<p>Title: {{$item['title']}}</p>
<img src=" {{$item['url']}}" alt="">
</li>
@endforeach
</ul>

{{print_r($tab)}}