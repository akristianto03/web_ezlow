@extends('layout/main')

@section('title', 'Edit Residence')

@section('container',)

    <div class="container" style="margin-top: 20px;">
        <div class="row mt-5">
            <h1 class="mt-5">Edit {{ $residence->name }} Residence Data</h1>
        </div>

        <div class="row mb-5">
            <div class="col">
                <form action="{{ route('residence.update', $residence) }}" method = "post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $residence->name }}">
                        @error('name')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $residence->email }}">
                        @error('email')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Call Center:</label>
                        <input type="text" class="form-control @error('call_center') is-invalid @enderror" name="call_center" value="{{ $residence->call_center }}">
                        @error('call_center')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Street</label>
                        <input type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ $residence->street }}">
                        @error('street')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
