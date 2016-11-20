@extends('/admin/layout-without-menu')

@section('title')
    <title>Exord Online Limited - Admin</title>
@stop



@section('header')
    <link rel="stylesheet" href="css/nanoscroller.css">
    <link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" href="css/wysiwyg-color.css" />
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
                            <li class="active">Menu</li>
                        </ol>
                    </div>                </div>
            </div><!-- end .page title-->


            <div class="row">
                <div class="col-md-10 col-md-offset-1 compose_form">
                    @if(session('message'))
                        <p class="success"> {{ session('message') }} </p>
                    @endif
                    <form role="form" method="post" action="{{ url('/admin/logo') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-5">
                                <input type="file" placeholder="Write menu name..." class="form-control" name="logo" value="{{ old('logo')}}" required="required">
                                <span class="validation_error">{{ $errors->first('logo') }}</span>
                            </div>
                            <div class="col-md-2">
                                <select name='active' id="" class="form-control" required="required">
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                                {{ $errors->first('active') }}
                            </div>
                            <div class="col-md-3">
                                 <button type="submit" class="btn btn-primary btn-lg">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 panel">
                    <div class="panel-body" style="font-size: 24px;line-height: 38px;">
                        <ul class="stylish-lists">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </div>
        
@stop

@section('script')
        <script src="js/wysihtml5-0.3.0.min.js"></script>
        <script src="js/bootstrap3-wysihtml5.js"></script>
        <script>
            jQuery(document).ready(function () {


                // HTML5 WYSIWYG Editor
                jQuery('#wysiwyg').wysihtml5({color: true, html: true});
            });</script>
        <!-- Google Analytics:  -->
        <script>
            (function (i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function ()
                {
                    (i[r].q = i[r].q || []).push(arguments);
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-3560057-28', 'auto');
            ga('send', 'pageview');
        </script>

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