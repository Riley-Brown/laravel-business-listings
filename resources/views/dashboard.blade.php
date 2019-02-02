@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h3>Your Listings</h3>
                   @if(count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @forEach($listings as $listing)
                        <tr>
                            <td>{{$listing->name}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </table>
                  
                   @endif

                   
                </div>
            </div>
        </div>
    </div>
@endsection
