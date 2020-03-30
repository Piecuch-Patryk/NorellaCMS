@if($message = session('error'))
<div class="row bg-danger text-light text-center">
    <div class="col-12">
        {{ $message }}
    </div>
</div>
@endif