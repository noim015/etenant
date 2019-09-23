@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="profile">
                     


                    <table class="table table-hover table-bordered">
                   <thead style="background:gray">
                   <h3>Tenants List</h3>
                      <tr>
                        
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Current Address</th>                        
                        <th>Permanent Address</th>
                        <th>Occupation</th>
                        <th>Floor No</th>
                        <th>NID</th>
                       
                      </tr>
                   </thead>
                   <tbody>
                    
                   


                   

                       @foreach($users as $key=>$value)
                         <tr>                         
                           
                            <td>{{ $value->name}}</td>
                            <td>{{ $value->email}}</td> 
                            <td>{{ $value->mobile}}</td>
                            <td>{{ $value->current}}</td> 
                            <td>{{ $value->permanent}}</td>
                            <td>{{ $value->occupation}}</td> 
                            <td>{{ $value->floor_no}}</td> 
                            <td><img src="{{ $value->nid}}" alt="" width="250px"></td>
                            
            
           
           
                 
                  



                   
                         </tr>
                       @endforeach
                   </tbody>
                </table>















                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
