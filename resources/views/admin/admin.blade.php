@extends('voyager::master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Order_id</th>
                        <th scope="col">name</th>
                        <th scope="col">address</th>
                        <th scope="col">country</th>
                        <th scope="col">city</th>
                        <th scope="col">phone</th>
                        <th scope="col">time</th>
                        <th scope="col">product name</th>
                        <th scope="col">qty</th>
                        <th scope="col">totalprice</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($orders as $index=> $order)

                    <tr>
                        <th scope="row">
                            {{$index+1}}
                        </th>

                        <td>{{ $order[0]['id']}}</td>
                        <td>{{ $order[0]['name']}}</td>
                        <td>{{ $order[0]['address']}}</td>
                        <td>{{ $order[0]['country']}}</td>
                        <td>{{ $order[0]['city']}}</td>
                        <td>{{ $order[0]['phone']}}</td>
                        <td>{{ $order[0]['time']}} , {{$order[0]['user_id']}}</td>

                        <td>
                            @foreach($order[1]->items as $item)
                            {{$item['name']}},
                            @endforeach
                        </td>

                        <td>{{$order[1]->totalqty}}</td>
                        <td>{{$order[1]->totalprice}}</td>
                        <form action="{{route('admin.store',$ord[$index]['id'])}}" method="post">
                            @csrf
                            <td>
                                <input type="checkbox" name="status" value="1">
                                @if( ( $ord[$index]['status'] ) == 0)
                                <p style="color: #09b509;"> Active </p>
                                @else( $ord[$index]['status'] == 1)
                                <p style="color: #2266ff;"> Deliverd </p>
                                @endif
                            </td>

                            <td> <button type="submit" class="btn btn-success">Update</button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection