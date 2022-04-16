@extends('layout.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')

<div class="container">
    <form action="">
        <label for="img">Select image:</label>
        <input type="file" id="img" name="img" accept="image/*">
        <input type="submit">
    </form>
</div>

@endsection