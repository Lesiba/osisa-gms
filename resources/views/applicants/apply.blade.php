@extends('adminlte::page')

@section('content')
<div class="container">

   <a href="/home" class="btn btn-primary">back</a> 
   <br/><br/>

   {!! Form::open(array('action' => 'ApplicationsController@store', 'method' => 'post')) !!}

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                          40% Complete (success)
                        </div>
                      </div>
                    <div class="box box-default">
                            <div class="box-header with-border">
                              <h3 class="box-title">Project Information:</h3>
                              <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                              </div><!-- /.box-tools -->
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                
                                <div class="form-group">
                                    <label for="firstname" class="col-sm-2 control-label">Project title:</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" id="project_title" name="project_title"
                                          placeholder="Enter project title">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="firstname" class="col-sm-2 control-label">OSIWA Thematic Issues:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="themic_issue">
                                            <option>Access to justice</option>
                                            <option>Anti-corruption</option>
                                            <option>Citizen,identity and document</option>
                                            <option>Civic engagement and inclusive participation </option>
                                            <option>Criminal systems and sanctions reform</option>
                                            <option>Drugs reform</option>
                                            <option>Elections</option>
                                            <option>Food security</option>
                                            <option>Free, quality and independent media</option>
                                            <option>Government delivery of inclusive services</option>
                                            <option>Human rights complaint counter terrorism</option>
                                            <option>Natural resources and energy Governance</option>
                                            <option>Taxation</option>
                                            <option>Transition justice</option>
                                            <option>Transparency and accountability public</option>
                                        </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="firstname" class="col-sm-2 control-label">Project focus:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="project_focus">
                                            <option>Woman</option>
                                            <option>Youth</option>
                                            <option>Citizen,identity and document</option>
                                            <option>People with disablities </option>
                                        </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="firstname" class="col-sm-2 control-label">Amount requested:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="amount_req" name="amount_req"
                                          placeholder="Enter amount requested">
                                    </div>
                                 </div>
                                 
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->

                        <div class="box box-default">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Project Information:</h3>
                                  <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                  </div><!-- /.box-tools -->
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                
                                     
                                     <div class="form-group">
                                            <label for="firstname" class="col-sm-2 control-label">In which country(ries) will the project 
                                                be implemented:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="country">
                                                    <option>Benin</option>
                                                    <option>Cote d'lvoire</option>
                                                    <option>Ghana</option>
                                                    <option>Guinea</option>
                                                    <option>Liberia</option>
                                                    <option>Mali</option>
                                                    <option>Niger</option>
                                                    <option>Nigeria</option>
                                                    <option>Sierra Leone</option>
                                                    <option>Regional</option>
                                                </select>
                                            </div>
                                    </div>
                      
                                    <div class="form-group">
                                            <label for="firstname" class="col-sm-2 control-label">Brief narrative of the project:</label>
                                            <div class="col-sm-10">
                                                <textarea rowspan="20" placeholder="brief narrative of the project" name="brief" class="form-control"></textarea>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="firstname" class="col-sm-2 control-label">How does the project align with OSIWA's area of work:</label>
                                            <div class="col-sm-10">
                                                <textarea rowspan="20" placeholder="how does the project align with OSIWA's area of work." name="alignment" class="form-control"></textarea>
                                            </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div class="box box-default">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Organization Information:</h3>
                                      <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                      </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                    
                                         
                                         <div class="form-group">
                                                <label for="firstname" class="col-sm-2 control-label">Name of organization:</label>
                                                <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="org_name" name="org_nam"
                                                        placeholder="Enter name of organization">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="firstname" class="col-sm-2 control-label">Address:</label>
                                                <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="address" name="address"
                                                        placeholder="Enter address">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="firstname" class="col-sm-2 control-label">Country:</label>
                                                <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="your_country" name="your_country"
                                                        placeholder="Enter country">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="firstname" class="col-sm-2 control-label">Phone number:</label>
                                                <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                                        placeholder="Enter phone number">
                                                </div>
                                        </div>
                                    
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                                <div class="box box-default">
                                        <div class="box-header with-border">
                                          <h3 class="box-title">Project/Program Lead:</h3>
                                          <div class="box-tools pull-right">
                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                          </div><!-- /.box-tools -->
                                        </div><!-- /.box-header -->
                                        <div class="box-body">
                                        
                                             
                                             <div class="form-group">
                                                    <label for="firstname" class="col-sm-2 control-label">Title:</label>
                                                    <div class="col-sm-10">
                                                           <select class="form-control" name="title">
                                                               <option>Mr.</option>
                                                               <option>Ms.</option>
                                                               <option>Dr.</option>
                                                           </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="firstname" class="col-sm-2 control-label">Firstname:</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="firstname" name="firstname"
                                                            placeholder="Enter first name">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="firstname" class="col-sm-2 control-label">Last name:</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="lastname" name="lastname"
                                                            placeholder="Enter last name">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="firstname" class="col-sm-2 control-label">Position in the organization:</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="position" name="position"
                                                            placeholder="Enter position in the organization">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="firstname" class="col-sm-2 control-label">Email:</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="email" name="email"
                                                            placeholder="Enter email">
                                                    </div>
                                                    
                                            </div>
                                            <div class="form-group">
                                                    <label for="firstname" class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="officeNumber" name="officeNumber"
                                                            placeholder="enter office number">
                                                    </div>
                                                    <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="officeNumber" name="cellNumber"
                                                            placeholder="enter cell-phone number">
                                                    </div>
                                            </div>
                                        </div><!-- /.box-body -->
                                    </div><!-- /.box -->
                                    <div class="box box-default">
                                            <div class="box-header with-border">
                                              <h3 class="box-title">Project/Program Lead:</h3>
                                              <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                              </div><!-- /.box-tools -->
                                            </div><!-- /.box-header -->
                                            <div class="box-body">

                                                  <div class="col-sm-10">
                                                        <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">apply</button>
                                                                <button type="submit" class="btn btn-primary">save & exit</button>
                                                                <button type="reset" class="btn btn-primary">clear</button>
                                                        </div>  

                                                  </div>
                                                    
                                                 
                                            
                                            </div><!-- /.box-body -->
                                        </div><!-- /.box -->
                    </div>   
                </div>
            </div>
    </div>
  <br/>

  {{ Form::close() }}
<script>
alert('test test.');
</script>
</div>

@endsection
