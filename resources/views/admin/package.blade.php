@extends('/admin/layout-without-menu')

@section('title')
    <title>Exord Online Limited - Admin</title>
@stop



@section('header')
    <link rel="stylesheet" href="/../dashboard/css/nanoscroller.css">
    <link href="/../dashboard/summernote.css" rel="stylesheet">
    <link href="/../dashboard/css/summernote-bs3.css" rel="stylesheet">
@stop

@section('wrapper')
    <div id="wrapper">
        <div class="content-wrapper container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <!-- <h1>Mail Compose <small></small></h1> -->
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="active">Package</li>
                        </ol>
                    </div>                </div>
            </div><!-- end .page title-->


            <div class="row">
                <div class="col-md-10 col-md-offset-1 compose_form">
                    @if(session('message'))
                        <p class="success"> {{ session('message') }} </p>
                    @endif
                    <form role="form" method="post" action="{{ url('/admin/package') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Package Name" class="form-control" name="heading" value="{{ old('heading')}}" required="required">
                                    <span class="validation_error">{{ $errors->first('heading') }}</span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Package Price" class="form-control" name="price" value="{{ old('price')}}" required="required">
                                    <span class="validation_error">{{ $errors->first('price') }}</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <textarea name="content" placeholder="Package Description" class="form-control" id="content" cols="30" rows="10"></textarea>
                                <span class="validation_error">{{ $errors->first('content') }}</span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="file" placeholder="" class="form-control" name="path" value="{{ old('path')}}" required="required">
                                    <span class="validation_error">{{ $errors->first('path') }}</span>
                            </div>
                            <div class="col-md-4">
                                <select name='visibility' id="" class="form-control" required="required">
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                                {{ $errors->first('visibility') }}
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-5">
                                 <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
        
@stop

@section('script')
        <script src="/../dashboard/js/wysihtml5-0.3.0.min.js"></script>
        <script src="/../dashboard/js/bootstrap3-wysihtml5.js"></script>
        <script>
            var token = '{{ Session::token() }}';
            var url = '{{ url("find-user-data") }}';

            $('input[name=user_id],input[name=contact_no]').on('change', function() {
                var data = $(this).val();
                var date = '{{ \Carbon\Carbon::now() }}';
                $.ajax({
                    method:'POST',
                    url:url,
                    data:{data:data,_token:token}
                }).done(function(e){
                    console.log(date);
                    $('input[name=user_id]').val(e[0].user_id);
                    $('input[name=username]').val(e[0].username);
                    $('input[name=contact_no]').val(e[0].contact_no);
                    $('input[name=connected_from]').val(e[0].connected_from);
                    $('input[name=created_at]').val(date);
                })
            })
        </script>
@stop