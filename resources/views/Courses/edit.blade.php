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
                    <input type="text" name="title" value="{{$course->title}}" class="form-control bg-transparent">
                </div>
                <div class=" mb-2">
                    <label for="">Course category</label>
                    <select name="category" id="" class="form-select">
                        <?php $cats = ['Salvation', 'Law', 'Grace', 'Health']; ?>
                        @foreach ($cats as $cat)
                        <option value="{{$cat}}" {{$course->category==$cat?'selected':''}}>{{$cat}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" mb-2">
                    <label for="">Course description</label>
                    <textarea name="description" class="form-control bg-transparent" id="editor1">{{$course->description}}</textarea>
                </div>
            </div>
            <div class="car p-4 mt-3">
                <div class="d-flex justify-content-between mt-1 border-dark border-bottom">
                    <h5>Course Media</h5>
                    <span>Step 2 of 3</span>
                </div>
                <div class="mb-3">
                    <label for="profileImage" class="col-form-label">Course Cover Image</label>
                    <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                        <img id="output" src="{{asset('storage/covers/'.$course->cover_path)}}" style="width: 100%; object-fit:contain;" />
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
            <div class="car p-4 mt-3">
                <div class="d-flex justify-content-between mt-1 border-dark border-bottom">
                    <h5>{{$course->title}} Course Curriculum</h5>
                    <span>Step 3 of 3</span>
                </div>
                <div class="mt-2">
                    <div class="btn bg-prim text-white" data-bs-toggle="modal" data-bs-target="#addSection" type='button'>Add Module</div>
                    <div class="modal fade" id="addSection" tabindex="-1" aria-labelledby="addSectionLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addSectionLabel">Add Module</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('module.store',['courseId'=>$course->id])}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="">Module title</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                        <textarea name="description" id="editor{{1}}"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- {{$course->modules}} -->
                @foreach($course->modules as $m=>$module)
                <div class="mt-2 bg-prim p-2 card">
                    <div class="text-white d-flex justify-content-between mb-3">
                        <span>Module {{$m+1}}: {{$module->title}}</span>
                        <button class="btn btn-outline-light btn-small" data-bs-toggle="modal" data-bs-target="#addLesson{{$m+1}}">Add Lesson</button>
                        <div class="modal fade prim" id="addLesson{{$m+1}}" tabindex="-1" aria-labelledby="addLesson{{$m+1}}Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="addLesson{{$m+1}}Label">Module Lesson</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <form action="{{route('lesson.store',['courseId'=>$module->id])}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="">Lesson title</label>
                                                <input type="text" class="form-control" name="title">
                                            </div>
                                            <textarea name="body" id="editor{{$m+2}}"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($module->lessons as $t=>$lesson)
                    <div class="p-3 rounded w-100 bg-light prim fw-medium mb-3">
                        <div class="d-flex justify-content-between">
                            <div class="fw-bold">
                                Lesson {{$t+1}}: {{$lesson->title}}
                            </div>
                            <div>
                                <i class="btn bi bi-trash" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete{{$lesson->id}}"></i>
                                <i class="bi bi-chevron-down" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$t}}m{{$m}}" aria-expanded="false" aria-controls="collapse{{$t}}m{{$m}}"></i>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$lesson->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$lesson->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{route('lesson.destroy',$lesson->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <div class="modal-body text-danger">
                                                    Do you want to delete the lesson <b>{{$lesson->title}}</b>?<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse text-start" id="collapse{{$t}}m{{$m}}">
                            <?php echo htmlspecialchars_decode($lesson['body']) ?>
                            <div class="btn btn-outline-dark me-3">Edit Content</div>
                            <!-- <div class="btn btn-outline-dark">Add Description</div> -->
                        </div>
                    </div>
                    @endforeach

                </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn bg-prim text-white">Update</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/super-build/ckeditor.js"></script>
<script>
    var i = 4;
    for (j = 0; j < i; j++) {
        CKEDITOR.ClassicEditor
            .create(document.getElementById("editor" + j), {

                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },

                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [{
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }]
                },
                removePlugins: [
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                ]
            }).then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle('min-height', '100px', editor.editing.view.document.getRoot());
                    writer.setStyle('background-color', 'transparent', editor.editing.view.document.getRoot());
                });
            });
    }
</script>
@endsection