@if ($messages = $errors->get('image'))
<p class="text-danger">
    @foreach ($messages as $message)
        {{ $message }}
    @endforeach
</p>
@endif