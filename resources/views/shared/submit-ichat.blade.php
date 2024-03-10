<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('ichat.create')}}" method="post">
        @csrf
        <div class="mb-3">
            <textarea name="context" class="form-control" id="idea" rows="3"></textarea>
        </div>
        @error('context')
            <span class=" d-block fs-6 text-danger mt-1"> {{ $message }}</span>
        @enderror
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
