@extends('layouts.admin')
@section('dash')
<div class="container bg-white p-3 h-100">
    <div class="bg-prim rounded p-2 w-100 mt-3">
        <h5 class="text-white ps-3">Add course</h5>
    </div>
    <form action="{{route('lesson.store',['id'=>$id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="car p-4 mt-3">
            <div class="d-flex justify-content-between mt-1 border-dark border-bottom">
                <h5>Course Media</h5>
                <span>Step 2 of 3</span>
            </div>
            <div class="mb-3">
                <label for="profileImage" class="col-form-label">Course Cover Image</label>
                <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                    <img id="output" src="" style="width: 100%; object-fit:contain;"/>
                    <input type="file" accept="image/jpeg, image/png, image/webp" name="cover" id="file" style="display: none;" class="form-control" onchange="loadFile(event)">
                    <div class="pt-2" id="desc">
                        <div class="text-center" style="font-size: xxx-large; font-weight:bolder;">
                            <i class="bi bi-upload"></i>
                        </div>
                        <div class="text-center">
                            <label for="file" class="btn button text-white" title="Upload new profile image">Browse</label>
                        </div>
                        <div class="text-center text-muted">Drop a file here</div>
                        <div class="text-center prim">*File supported .png .jpg .webp</div>
                    </div>
                    <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('output');
                            image.src = URL.createObjectURL(event.target.files[0]);
                            document.getElementById('output').value == image.src;
                            document.getElementById('desc').style.display == 'none'
                        };
                    </script>
                </div>
            </div>
            <div class="mb-3">
                <label for="">Video URL [Optional]</label>
                <input type="text" class="form-control" name="url">
            </div>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <a href="{{url()->previous()}}"><button type="button" class="btn bg-secondary text-white">Previous</button></a>
            <button type="submit" class="btn bg-prim text-white">Continue</button>
        </div>
    </form>
</div>
@endsection
