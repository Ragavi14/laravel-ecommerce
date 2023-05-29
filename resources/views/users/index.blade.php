@extends('layouts.app')


@section('content')







<div  style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User List') }}</div>

                <div class="card-body">
                      <table style="width:100%">
                     
                        <tr>
                            <th  style="">Id</th> 
                            <th style="">Name</th>
                            <th style="">E-Mail</th>
                            <th style="">User Type</th>
                            <!-- <th style="border: 2px solid black;">Edit</th>
                            <th style="border: 2px solid black;">Detele</th>  -->
                        </tr>
                        
                        @if($users)
                            @foreach($users as $key => $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->usertype}}</td>
                                
                              
                               
                            </tr>
                        
                            @endforeach
                        @endif    

                           
                       
                        </table> 
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection