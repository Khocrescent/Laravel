@extends('layouts.app')

@section('title', 'All Tickets')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user"> <h1><strong>All users</strong></h1></i>
                </div>

                <div class="panel-body">
                @include('includes.flash')

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Users</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($user as $user)
                                <tr>
                                    <td>
                                    {{ $user->name }}

                                    </td>
                                    <td>
                                <form action="{{ url('admin/delete_ticket/' . $user->name) }}" method="POST">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <p>
                            Home: <a href="{{ url('home') }}">HOME</a>
                        </p>
                </div>

            </div>
        </div>
    </div>
@endsection