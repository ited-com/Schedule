@extends('layouts.app')
@section('content')
    <div class="container">
  <h2>{{$building->building_name}}</h2>
  <?php $i= 0;?>
  <?php $floor_number= 1;?> 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>floor</th>
      </tr>
        <tr>
          <th scope="row">{{$floor_number}}</th>
            @foreach ($rooms as $item)
        <td><a id="td" href="/schedule/{{$item->id}}">{{$item->id}}</a></td>
                  <?php $i += 1;?>
                @if ($i == $room_per_floor)
                  <?php $i = 0;?>
                  </tr>
                  <tr>
                    <?php $floor_number+= 1;?> 
                   <th scope="row">{{$floor_number}}</th>
                @endif
            @endforeach
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
@endsection