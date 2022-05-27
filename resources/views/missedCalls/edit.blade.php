@extends('layouts.app')

@section('content')
    <h1 class="text-center" style="padding-top: .5rem">Edit Missed Call from {{$missedCall->phoneNumber}}</h1>
    <div class="bg-gray-light">
        <div class="card" style="margin-top: 1rem; margin-left: .5rem">
            <form method="POST" action="{{ route('missedCalls.update', $missedCall->id) }}" style="margin: 1rem">
                @csrf
                @method('PUT')
                <div style="margin-bottom: .5rem">
                    <label>Phone Number</label>
                    <div class="control">
                        <input name="phoneNumber"
                               class="input-group form-control @error('phoneNumber') border-danger @enderror"
                               type="text" placeholder="+1 (234) 567 8910" value="{{ $missedCall->phoneNumber }}">
                    </div>
                    @error('phoneNumber')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: .5rem">
                    <label class="label">First Name</label>
                    <div class="control">
                        <input name="firstName"
                               class="input-group form-control @error('firstName') border-danger @enderror"
                               type="text" placeholder="First Name" value="{{ $missedCall->firstName }}">
                    </div>
                    @error('firstName')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: .5rem">
                    <label>Last Name</label>
                    <div class="control">
                        <input name="lastName"
                               class="input-group form-control @error('lastName') border-danger @enderror"
                               type="text" placeholder="Last Name" value="{{ $missedCall->lastName }}">
                    </div>
                    @error('lastName')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div style="margin-bottom: .5rem">
                    <label>Region</label>
                    <div>
                        <input name="region" class="input-group form-control @error('region') border-danger @enderror"
                               type="text" placeholder="Earth" value="{{ $missedCall->region }}">
                    </div>
                    @error('region')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div style="margin-top: 1.5rem">
                    <button type="submit" class="btn bg-green" value="submit">Save</button>
                    <a type="button" href="{{ route('missedCalls.index') }}" class="btn bg-warning">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection


