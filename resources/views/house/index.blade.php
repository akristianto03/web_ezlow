@extends('layout/main')

@section('title', 'House')

@section('container',)

    <link rel="stylesheet" href="{{asset('css/style3/style.min.css')}}">

<div class="container py-5 mt-5">

    <div class="row" style="text-align: center; padding: 0;margin-bottom: 20px;">
        <div class="col">
            <h1>List Data Houses</h1>
        </div>
    </div>

    @auth()
    <div class="row mb-3" style="margin: auto; width: 100%;" >
        <div class="col-md-2 offset-md-5">
            <a href="{{ route('house.create') }}" class="btn btn-info btn-block" role="button" aria-pressed="true">Tambah</a>
        </div>
    </div>
    @endauth

    <div class="row">
        <div class="mx-auto bg-white rounded shadow">

            <!-- Fixed header table-->
            <div class="table-responsive">
                <table class="table table-fixed">
                    <thead>
                    <tr>
                        <th scope="col" class="">Block</th>
                        <th scope="col" class="">Area</th>
                        <th scope="col" class="">Owner</th>
                        <th scope="col" class="">Telephone</th>
                        <th scope="col" class="">Purchase Date</th>
                        <th scope="col" class="">Created</th>
                        <th scope="col" class="">Updated</th>
                        @auth()
                        <th scope="col" class="">Action</th>
                        @endauth
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($houses as $house)

                    <tr>
                        <th scope="row" class="">{{ $house->block }}</th>
                        <th scope="row" class="">{{ $house->creator->name }}</th>
                        <td class="">{{ $house->owner }}</td>
                        <td class="">{{ $house->telephone }}</td>
                        <td class="">{{ $house->purchase_date }}</td>
                        <td class="">{{ $house->created_at }}</td>
                        <td class="">{{ $house->updated_at }}</td>

                        @auth()
                        <td>
                            <a href="{{ route('house.edit', $house) }}" class="btn btn-primary" style="width: 100px;">Edit</a>
                            <form action="{{ route('house.destroy', $house) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" style="width: 100px;">Delete</button>
                            </form>
                        </td>
                        @endauth
                    </tr>

                    @endforeach

                    </tbody>
                </table>
            </div><!-- End -->

        </div>
    </div>
</div>

    <script src="{{asset('js/jquery2.min.js')}}"></script>

@endsection
