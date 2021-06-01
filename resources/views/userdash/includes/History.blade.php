<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="{{asset('assets/userdashboard/BooksBorrowed/history.css')}}">
</head>

<x-app-layout>
   <x-slot name="header">
 
   </x-slot>
 
 @include('userdash/includes/userdashboardheader')

<div class="table-users"  class="mb-2">
   <table cellspacing="0">
     <tr>
        <th>Picture</th>
        <th class="text-center">Book Name</th>
        <th class="text-center" width="230">Status</th>
        <th class="text-center" width="230">Fine</th>
     </tr>
     @forelse ($histroy as $key=>$data)
     <tr>
        <td><img src="{{Storage::url($data->Book->BookImg)}}" /></td>
        <td class="text-center">{{$data->Book->BookName}}</td>
       
           @if($data->status==1)
           <td class="text-center text-success">Approved</td>
           @elseif($data->status==-1)
           <td class="text-center text-primary">Returned</td>
           @else
           <td class="text-center text-danger">Pending</td>
           @endif
        
        <td class="text-center">0</td>
     </tr>
     @empty
     <tr class="text-center" ><th colSpan="6" class="pt-5 pb-5">No Book Requested</th></tr>
 @endforelse
</table>
</div>
@include('userdash/includes/userdashboardfooter')

</x-app-layout>
