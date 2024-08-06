<table cellspacing="10" cellpadding="10">
    <tr>
        <th>Folio</th>
        <th>Iniciativa</th>
        <th>Autor</th>
    </tr>
    @foreach($data as $item)
        <tr>
            <td>{{$item->folio}} </td>
            <td>{{$item->iniciativa}} </td>

            <td>
                @foreach($item->autor as $item)
               {{$item->name}},
            @endforeach
                </td>
        </tr>
    @endforeach

</table>
