@if ($messages = $errors->get($name))
<p class="text-danger">
    @foreach ($messages as $message)
        {{ $message }}
    @endforeach
</p>
@endif