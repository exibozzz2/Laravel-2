@extends("layout")

@section("pageTitle")
    Contact
@endsection

@section("contactForm")
    <form class="mb-3 mt-3">
        <div class="form-group mb-1">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Enter your subject ">
        </div>

        <div class="form-group mb-1">
            <label for="exampleInputPassword1">Message</label>
            <input type="text" class="form-control" id="message" placeholder="Enter your message ">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4233.471273096432!2d2.1734675173087554!3d41.384593838194874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f962dd581f%3A0x1d5b17bdc7ffe994!2sFa%20Patxoca!5e0!3m2!1sen!2srs!4v1733104645619!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection

@section("textInfo")
    <h2>This text is displayed only in contact blade</h2>
@endsection
