<h2>sample</h2>

<table>
    <tr>
        <td>���??�����?</td>
        <td>���?���������?</td>
    </tr>
@foreach($flower_list as $flower)
<tr>
    <td>{{$flower["name"]}}</td>
    <td>{{$flower["price"]}}</td>
</tr>
@endforeach
</table>

<p>\{{$total}}</p>