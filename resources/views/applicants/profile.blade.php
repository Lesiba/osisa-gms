@extends('layouts.app')

@section('content')
<div class="container">
   <form class="form-horizontal" role="form">
    
    <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">        
                        <div class="card-body">
                                <h2>Profile <small>summary</small></h2>
                                
                        </div>
                    </div>
        
                    
                </div>
    </div>
    <br/>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Personal Information:</div>

                <div class="card-body">
                    
                            <div class="form-group">
                               <label for="firstname" class="col-sm-2 control-label">First Name</label>
                               <div class="col-sm-10">
                                  <input type="text" class="form-control" id="firstname"
                                     placeholder="Enter First Name" disabled>
                               </div>
                            </div>
                            <div class="form-group">
                               <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                               <div class="col-sm-10">
                                  <input type="text" class="form-control" id="lastname"
                                     placeholder="Enter Last Name" disabled>
                               </div>
                            </div>
                        
                </div>
            </div>

            
        </div>
    </div>
    <br/>
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Residential address:</div>
    
                    <div class="card-body">
                     
    
                                <div class="form-group">
                                   <label for="firstname" class="col-sm-2 control-label">First Name</label>
                                   <div class="col-sm-10">
                                      <input type="text" class="form-control" id="firstname"
                                         placeholder="Enter First Name" disabled>
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                                   <div class="col-sm-10">
                                      <input type="text" class="form-control" id="lastname"
                                         placeholder="Enter Last Name" disabled>
                                   </div>
                                </div>
                            
                    </div>
                </div>
    
                
            </div>
        </div>
        <br/>
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Documents:</div>
        
                        <div class="card-body">
                         
                            <div class="form-group">
                                    <label for="lastname" class="col-sm-2 control-label"></label>
                                    <input type="file" class="form-control" id="inputfile" disabled>
                            </div>                                
                        </div>
                    </div>
        
                    
                </div>
         </div>
         <br/>
         <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">        
                        <div class="card-body">
                         
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" disabled>update profile</button>
                                <button type="button" class="btn btn-primary">edit profile</button>
                            </div>  
                                                          
                        </div>
                    </div>
        
                    
                </div>
        </div>

    </form>  

</div>
@endsection
