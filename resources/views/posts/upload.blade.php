@extends ('layouts.master')

@section ('content')
<div class="content">
    <div class="title m-b-md">
        File Upload
    </div>
    <div class="container file-upload">
        <h2>Upload File</h2>
        <div class="list-group">
            <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data" class="list-group-item">
                <div class="form-group text-center">
                    <label>Select image to upload:</label>
                    <input type="file" name="file" id="file" class="form-control-file">
                </div>
                <input type="submit" value="Upload" name="submit" class="btn btn-primary">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </form>
        </div>
    </div>
</div>
@stop