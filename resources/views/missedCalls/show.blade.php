@extends('layouts.app')

@section('content')
    <div style="padding: 1rem">
        <div class="bg-gray" style="padding: 1rem; margin-bottom: 1rem; border-radius: .5rem">
            <h1 style="padding-top: .5rem">{{$missedCall->phoneNumber}}</h1>
            <a class="btn bg-gray-dark" href="{{route('missedCalls.edit', $missedCall->id)}}">Edit</a>
        </div>
        <div>
            <p>First Name: {{ $missedCall->firstName }}</p>
            <p>Last Name: {{ $missedCall->lastName }}</p>
            <p>Region: {{ $missedCall->region }}</p>
        </div>
    </div>

@endsection


