@extends('layout2.app')

@section('content')
   <div class="wrapper">
       <form action="/pages" method="POST">
        @csrf
            <div class="card text-center" style="width:700px; margin-top:-200px">
                <h5 class="card-header">Add Incident type</h5>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="place" class="col-lg-4 col-form-label">Incident type</label>
                        <div class="col-lg-8">
                            <input type="text" name="type" class="form-control" placeholder="Incident type">
                        </div>
                    </div>
                    <button class="btn btn-secondary">Add</button>
                </div>
            </div>
        </form>
   </div>
@endsection