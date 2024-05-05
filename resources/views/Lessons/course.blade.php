@extends('layouts.admin')
@section('dash')
<div class="container bg-white p-3 h-100">
    <div class="">
        <div class="bg-prim rounded p-2 w-100 mt-3">
            <h5 class="text-white ps-3">Add course</h5>
        </div>
        <form action="{{route('courses.store')}}" method="post">
            @csrf
            <div class="car p-4 mt-3">
                <div class="d-flex justify-content-between mt-1 border-dark border-bottom">
                    <h5>Course details</h5>
                    <span>Step 1 of 3</span>
                </div>
                <div class="mt-2 mb-2">
                    <label for="">Course title</label>
                    <input type="text" name="title" class="form-control bg-transparent">
                </div>
                <div class=" mb-2">
                    <label for="">Course category</label>
                    <input type="text" name="category" class="form-control bg-transparent">
                </div>
                <div class=" mb-2">
                    <label for="">Course description</label>
                    <textarea name="description" class="form-control bg-transparent" id="editor1"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn bg-prim text-white">Continue</button>
            </div>
        </form>
    </div>
</div>
@endsection