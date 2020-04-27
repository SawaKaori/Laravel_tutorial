<h2>sample</h2>

<table>
    <tr>
        <td>名前</td>
        <td>値段</td>
    </tr>
@foreach($flower_list as $flower)
<tr>
    <td>{{$flower["name"]}}</td>
    <td>{{$flower["price"]}}</td>
</tr>
@endforeach
</table>

<p>\{{$total}}</p>