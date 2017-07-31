@extends ('layouts.master')

@section ('content')
<div class="content">
    <div class="container file-upload">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h2>Upload File</h2>
                @include ('partials.errors')
                <div class="upload-form-container">
                    <form action="{{ URL::to('/p/ucphotos/create') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=image>Select image to upload:</label>
                            <input type="file" name="image" id="image" class="form-control-file" onchange="readURL(this);" >
                        </div>
                        <div class="form-group">
                            <img id="blah" class="pull-right img-fluid" src="/placeholder.png" alt="your image" />
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="sel1" name="category">
                                @foreach( $categories as $category )
                                    <option>{{ $category['name'] }}</option>
                                @endforeach
                            </select>
                        </div>  
                        <input type="submit" value="Upload" name="submit" class="btn btn-primary">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop