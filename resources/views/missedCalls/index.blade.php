@extends('layouts.app')

@section('content')

    <a href="{{ route('missedCalls.create') }}" class="btn bg-gray-dark" style="margin-top: .5rem; margin-left: 1rem">Create New Missed Call</a>

    @foreach($missedCalls as $missedCall)
        <div class="card bg-gray presentationCard">
{{--            style="margin-top: .5rem; margin-left: 1rem; margin-right: 2rem; margin-bottom: .5rem"--}}
        <a href="{{route('missedCalls.show', $missedCall->id)}}" class="margin-top1">
            <p>
                <strong>{{ $missedCall->phoneNumber }}</strong><br>
                <small>First Name: {{ $missedCall->firstName }}</small><br>
                <small>Last Name: {{ $missedCall->lastName }}</small><br>
                <small>Region: {{ $missedCall->region }}</small>
            </p>
        </a>
        </div>
        <a href="{{route('missedCalls.edit', $missedCall->id) }}" class="btn bg-gray-dark" style="margin-left: 1rem; margin-bottom: 1rem">Edit</a>
    @endforeach
    {{ $missedCalls->links() }}
@endsection
