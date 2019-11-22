@extends('layout.template') 
@section('content')
<div class="title-m-b-md">

  <style>
    table, th, td {     
        border: 1px solid black; 
        border-collapse: collapse;  
          }   
    th { background-color: #308281;
               color: white;
                            } 
    tr:nth-child(even) {background-color: #C7CBAE ;}    
  </style>          
  <table>   
      <tr> 
        <th>Login</th> 
        <th>Password</th>
        
      </tr>
          
          
      @foreach ($Administrateurs as $adminstrateur)
          
      <tr>
  
         <td>{{ $adminstrateur->login }}</td>
         <td>{{ $adminstrateur->password }}</td>
         
  
      </tr>
      @endforeach
          
          </table>
            
             </div>
    
@endsection