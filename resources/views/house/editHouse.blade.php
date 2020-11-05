@extends('layout/main')

@section('title', 'Edit House')

@section('container',)

    <div class="container" style="margin-top: 20px;">
        <div class="row mt-5">
            <h1 class="mt-5">Edit House Block {{ $house->block }} Data</h1>
        </div>

        <div class="row mb-5">
            <div class="col">
                <form action="{{ route('house.update', $house) }}" method = "post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Block:</label>
                        <input type="text" class="form-control @error('block') is-invalid @enderror" name="block" value="{{ $house->block }}">
                        @error('block')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Owner:</label>
                        <input type="text" class="form-control @error('owner') is-invalid @enderror" name="owner" value="{{ $house->owner }}">
                        @error('owner')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Telephone Number:</label>
                        <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $house->telephone }}">
                        @error('telephone')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Purchase Date</label>
                        <input type="date" class="form-control @error('purchase_date') is-invalid @enderror" name="purchase_date" value="{{ $house->purchase_date }}">
                        @error('purchase_date')<div class="invalid-feedback">
                            {{ $message }}
                        </div>@enderror
                    </div>
                    <div class="form-group">
                        <label>Residence:</label>
                        <select name="residential_area" class="custom-select">
                            @foreach($residences as $residence)
                                <option value="{{ $residence->id }}">{{ $residence->name . '(' . $residence->email . ')' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
