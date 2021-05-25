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
        <th class="text-center">Name</th>
        <th class="text-center">Borrow Date</th>
        <th class="text-center">Return Date</th>
        <th class="text-center" width="230">Status</th>
        <th class="text-center" width="230">Fine</th>
     </tr>
     <tr>
        <td><img src="https://source.unsplash.com/600x900/?tech,street" alt="" /></td>
        <td class="text-center">John Doe</td>
        <td class="text-center">01-07-2020</td>
        <td class="text-center">01-08-2020</td>
        <td class="text-center">Returned</td>
        <td class="text-center">0</td>
     </tr>
</table>
</div>
@include('userdash/includes/userdashboardfooter')

</x-app-layout>
