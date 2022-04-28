<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>P.P UKDW | Login</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset ('style/plugins/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset ('style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset ('style/dist/css/adminlte.min.css?v=3.2.0') }}">
<script nonce="e994ccfe-6075-494a-bc3d-b84677ff0712">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">

        <div class="card card-outline card-primary">
        <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Login</b>P.P UKDW</a>
        <img src="style/dist/img/ukdw.png" align="center" width="100" height="120">
</div>
        

    <div class="card-body">
        <p class="login-box-msg">Silahkan Masukan Username dan Password </p>
        <form action="/dosen/dashboard" method="post">
        <div class="input-group mb-3">
        <input type="string" class="form-control" placeholder="Username">
        <div class="input-group-append">
        <div class="input-group-text">
        <span class="fas fa-envelope"></span>
</div>
</div>
</div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password">
        <div class="input-group-append">
        <div class="input-group-text">
        <span class="fas fa-lock"></span>
</div>
</div>
</div>
    <div class="col-4">
    <a href="/dosen/dashboard"><button>Masuk</button></a>
</div>
    </form>
</div>
</div>
</div>
<script src="{{ asset ('style/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset ('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset ('style/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>
</html>
