@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-start row" id="profile">
    <div class="col-2">
        <ul style="list-style: none; margin-left:0px;" class="h-75 mt-3 fw-bold">
            <li class="mb-3 btn bg-transparent">
                <a href="/profile" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-person-square"></i> Profile
                </a>
            </li>
            <li class="mb-3 btn bg-transparent">
                <a href="/courses" style="text-decoration: none; overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-journal-bookmark-fill"></i> Courses
                </a>
            </li>
            <li class="mb-3 btn bg-transparent">
                <a href="/guest" style="text-decoration: none; overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-journal-bookmark-fill"></i> Guest Content
                </a>
            </li>
            <li class="mb-3 btn bg-transparent">
                <a href="/logged" style="text-decoration: none; overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-journal-bookmark-fill"></i> User Content
                </a>
            </li>
            <li class="mb-3 btn bg-transparent">
                <a href="" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-people-fill"></i> Community
                </a>
            </li>
            <li class="mb-3 btn bg-transparent">
                <a href="" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-bell"></i> Notifications
                </a>
            </li>
            <li class="mb-3 btn bg-transparent">
                <a href="" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" class='prim'>
                    <i class="bi bi-gear"></i> Settings
                </a>
            </li>
            <li class="mb-3 btn bg-transparent">
                <a class="text-danger" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" aria-expanded="false">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-10">
        @yield('dash')
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/super-build/ckeditor.js"></script>
<script>
    var i = 4;
    for (j = 0; j < i; j++) {

        CKEDITOR.ClassicEditor
            .create(document.getElementById("editor" + j), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|', 'MathType', 'ChemType', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo', 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },

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
                });
            });
    }
</script>
@endsection