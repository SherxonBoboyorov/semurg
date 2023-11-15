@extends('layouts.admin')

@section('content')


<div class="page-content-wrapper ">

    <div class="container-fluid">
    <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="type">Car Type</label>
                            <input type="text" name="type" id="type" class="form-control">
                            @if($errors->first('type'))
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif
                        </div>
                    </div>

                    <hr>

                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input_attribute">Attribute</label>
                            <input type="text" autocomplete="off" id="input_attribute" class="form-control">

                            <label for="input_value_attribute" class="mt-3">Attribute values</label>
                            <input type="text" autocomplete="off" id="input_value_attribute" class="form-control mb-4">

                            <button type="button" id="save_attribute" class="btn btn-primary btn-block">Attribute Save</button>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Attribute</th>
                                        <th>Attribute values</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="attribute_data"></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="dropdown-divider" style="margin-top: 40px"></div>

                    <input type="hidden" name="attributes" id="attributes">
                    <button class="btn btn-success btn-block">Save </button>

                </div>
            </div>
        </div>

    </div>
    </form>
</div>
</div>


@endsection

@section('custom_js')
    <script>

        // Attribute save, delete
        $(document).ready(function() {
            var allAttributes = [];

            $('#save_attribute').on('click', function() {
                var attribute = $('#input_attribute').val();
                var val_attribute = $('#input_value_attribute').val();
                allAttributes.push({'id' : Math.round((new Date()).getTime() / 1000), 'attr' : attribute, 'val_attr' : val_attribute})
                renderAttributes()
            })

            function renderAttributes() {
                $('#input_attribute').val('')
                $('#input_value_attribute').val('')
                $("#attribute_data").html('')
                for(var attr of allAttributes) {
                    $("#attribute_data").append("" +
                        "<tr>" +
                            "<td>" + attr.attr + "</td>" +
                            "<td>" + attr.val_attr + "</td>" +
                            "<td>" +
                            "<button type='button' data-id=\""+ attr.id +"\" class='btn btn_danger btn-icon remove_attribute'>" +
                                "<i class='fa fa-trash'></i>" +
                            "</button>" +
                            "</td>" +
                        "</tr>");
                }
                $('#attributes').val();
                $('#attributes').val(JSON.stringify(allAttributes));
            }

            $(document).on('click', "button.remove_attribute", function () {
                let dataId = $(this).data('id');
                allAttributes = allAttributes.filter(function (query) {
                    return query.id !== dataId
                });
                renderAttributes()
            });
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.11/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection
