@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Promo List</div>
                <div class="panel-body">
                    <a href="{{ url('promos/create') }}" class="btn btn-primary">Add Promo</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Promo Code</th>
                                <th>Expired Date</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </th>

                            @if(! count($promos))
                                <tr>
                                    <td colspan="3">No Promo</td>
                                </tr>
                            @endif
                            @foreach($promos as $promo)
                                <tr>
                                    <td>{{ $promo->title }}</td>
                                    <td>{{ $promo->description }}</td>
                                    <td>{{ $promo->promo_code }}</td>
                                    <td>{{ \Carbon\Carbon::parse($promo->expired_date)->format('d-m-Y') }}</td>
                                    <td><img src="{{ $promo->image }}" alt="{{ $promo->id }}" width="50" height="50"></td>
                                    <td>{{ \Carbon\Carbon::parse($promo->created_at)->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($promo->updated_at)->format('d-m-Y') }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('promos/'.$promo->id.'/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('promos/'.$promo->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection