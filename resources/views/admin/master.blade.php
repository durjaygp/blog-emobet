
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('backEnd')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('backEnd')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="{{asset('backEnd')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('backEnd')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('backEnd')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('backEnd')}}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{asset('backEnd')}}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('backEnd')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('backEnd')}}/assets/css/app.css" rel="stylesheet">
    <link href="{{asset('backEnd')}}/assets/css/icons.css" rel="stylesheet">
    <link href="{{asset('backEnd')}}/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <link href="{{asset('backEnd')}}/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('backEnd')}}/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backEnd') }}/drop/css/dropify.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link href="{{asset('backEnd')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js" integrity="sha512-XNYSOn0laKYg55QGFv1r3sIlQWCAyNKjCa+XXF5uliZH+8ohn327Ewr2bpEnssV9Zw3pB3pmVvPQNrnCTRZtCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{asset('frontEnd')}}/iziToast/dist/css/iziToast.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backEnd')}}/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{asset('backEnd')}}/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="{{asset('backEnd')}}/assets/css/header-colors.css" />
    <script src="{{asset('frontEnd')}}/iziToast/dist/js/iziToast.min.js"></script>

    <title>@yield('title')</title>
</head>

<body>
<!--wrapper-->
<div class="wrapper">
    <!--start header -->
    @include('admin.include.header')
    <!--end header -->
    <!--navigation-->
    <!--sidebar wrapper -->
    @include('admin.include.sidebar')
    <!--end sidebar wrapper -->
    <!--end navigation-->
    <!--start page wrapper -->
    <div class="page-wrapper">
        @yield('content')
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    @include('admin.include.footer')
</div>
<!--end wrapper-->
<!--start switcher-->
<!--end switcher-->
<!-- Bootstrap JS -->
<script src="{{asset('backEnd')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('backEnd')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--app JS-->
<script src="{{asset('backEnd')}}/assets/js/app.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{asset('backEnd')}}/assets/js/index.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/select2/js/select2.min.js"></script>
<script src="{{asset('backEnd')}}/drop/js/dropify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="{{asset('backEnd')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('backEnd')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>






@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position:'topRight',
                message: '{{$error}}',
            });
        </script>
    @endforeach

@endif

@if(session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            position:'topRight',
            message: '{{session()->get('success')}}',
        });

    </script>

@endif


<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>

<script>
    $('.dropify').dropify();
</script>

<script>
    $(document).ready(function () {
    tinymce.init({
        selector: '#post_content',
        plugins: 'advlist autolink lists link image media charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        height: '500',

        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code | rtl ltr',
        toolbar_mode: 'floating',

        image_title: true,
        automatic_uploads: true,

        images_upload_handler: function(blobinfo, success, failure)
        {
            let formData = new FormData();
            let _token = $("input[name='_token']").val();

            let xhr = new XMLHttpRequest();
            xhr.open('post', "{{ route('admin.upload_tinymce_image') }}");
            xhr.onload = () => {
                if( xhr.status !== 200 )
                {
                    failure("Http Error: " + xhr.status);
                    return
                }
                let json = JSON.parse(xhr.responseText)
                if(! json || typeof json.location != 'string')
                {
                    failure("Invalid Json: " + xhr.responseText);
                    return
                }
                success( json.location )
            }
            formData.append('_token', _token);
            formData.append('file', blobinfo.blob(), blobinfo.filename());
            xhr.send( formData );
        }

    });

    setTimeout(() => {
        $(".general-message").fadeOut();
    }, 5000);

    });

</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
</body>
</html>
