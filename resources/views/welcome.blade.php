<!DOCTYPE html>
<html lang="vi">
<head>
    @include('app.head_tag')
</head>
<body>
    @include('app.upload_area')
    @include('app.ads')
    @include('app.modal_config_link')
    @include('app.modal_notification')

    <script src="{{asset('script/jquery.min.js')}}"></script>
    <script src="{{asset('script/bootstrap.min.js')}}"></script>
    <script src="{{asset('script/device-uuid.js')}}"></script>
    @include('app.script')
</body>








</html>
