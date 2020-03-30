@if($message = session('success'))
<div class="row bg-success text-light text-center">
    <div class="col-12">
        {{ $message }}
    </div>
</div>
@endif