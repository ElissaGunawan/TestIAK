@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Promo</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/promos') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Promo Code</label>
                                <input type="text" name="promo_code" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Expired Date</label>
                                <input type="date" name="expired_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Image URL (opsional)</label>
                                <input type="text" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Promo</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection