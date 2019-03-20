@extends('adminlte::page')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="box box-default">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Applicants</h3>
                                      <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                      </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                            <a href="/apply" class="btn btn-primary">apply now</a>   

                                    </div><!-- /.box-body -->
                                  </div><!-- /.box -->
                            </div>   
                        </div>
                    </div>
        </div>
    <br/><br/>
    <!-- create space between cards-->
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Application progress
    
    
                    </div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                                <div class="info-box-content">
                                  <!-- The progress section is optional -->
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                  </div>
                                  <span class="progress-description">
                                    70% Complete
                                  </span>
                                </div><!-- /.info-box-content -->
                          </div><!-- /.info-box -->
                    </div>
                    <div class="card-footer">
                           <a href="/apply" class="btn btn-primary pull-left">resume application</a> 
                    </div>   
                </div>
            </div>
        </div>
    <br/><br/>
    <!-- create space between cards-->
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Application status
    
    
                    </div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                                <div class="info-box-content">
                                  <!-- The progress section is optional -->
                                  <div class="progress">
                                    <div class="progress-bar" style="width: 0%"></div>
                                  </div>
                                  <span class="progress-description">
                                    0% base on system 
                                  </span>
                                </div><!-- /.info-box-content -->
                              </div><!-- /.info-box -->
                    </div> 
                </div>
            </div>
        </div>    
    <br/><br/>
    <!-- create space between cards-->
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="box box-default">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Application guidelines</h3>
                                  <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                  </div><!-- /.box-tools -->
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  The body of the box
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>   
                    </div>
                </div>
        </div>
        <br/><br/>
        <!-- create space between cards-->
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="box box-default">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Information needed to apply</h3>
                                      <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                      </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                      The body of the box
                                    </div><!-- /.box-body -->
                                  </div><!-- /.box -->
                            </div>   
                        </div>
                    </div>
        </div>
        <br/><br/>
        <!-- create space between cards-->
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="box box-default">
                                    <div class="box-header with-border">
                                      <h3 class="box-title">Application templates</h3>
                                      <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                      </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                      The body of the box
                                    </div><!-- /.box-body -->
                                  </div><!-- /.box -->
                            </div>   
                        </div>
                    </div>
        </div>
    </div>  
      
@endsection
