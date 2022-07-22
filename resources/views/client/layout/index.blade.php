<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://vexere.com/images/vexere-ico.ico?v=0.0.3">
    <title>Dự Án Vé Xe Rẻ Nhóm 1</title>    {{-- FONT GOOGLE --}}
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet"/>
    {{-- App CSS --}}
    <link rel="stylesheet" href="{{asset("css/app.css")}}" />
</head>
<body>
    @include("client.layout.header")
    @yield("content")
    @yield("scripts")
</body>
</html>