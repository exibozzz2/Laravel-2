@extends("layout")


@section("allContacts")
    @foreach($allContacts as $contact)
        <p>{{ $contact->email }}</p>
    @endforeach
@endsection
