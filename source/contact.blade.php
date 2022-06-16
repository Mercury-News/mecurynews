@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact Us</h1>
<form
  name="contact"
  method="POST"
  data-netlify-recaptcha="true"
  data-netlify="true"
>
  <p>
    <label>
      Email: <input type="text" name="name" />
    </label>
  </p>
  <p>
    <label>
      Message: <textarea name="message"></textarea>
    </label>
  </p>
  <div data-netlify-recaptcha="true"></div>
  <p>
    <button type="submit">Send</button>
  </p>
</form>

@endsection
