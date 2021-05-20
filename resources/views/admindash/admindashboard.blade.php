<head>
  
<link rel="stylesheet" href="{{asset('assets/userdashboard/user.css')}}">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>


<div style="background-color:#4E657A">
  @if(Route::currentRouteName()=="dashboard" && $data="dashboard")
    
  @elseif($data=="addproduct")
  @include('admindash/includes/addbook')
  @endif

<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{asset('assets/userdashboard/user.js')}}"></script>