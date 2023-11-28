@extends('layouts.header')
                
                @section('content')
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Records</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                        <li class="breadcrumb-item active">Records</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    {{--
                    <div class="alert alert-danger" role="alert">
                        This is <strong>Datatable</strong> page in wihch we have used <b>jQuery</b> with cnd link!
                    </div>
                    --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Records</h5>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th data-ordering="false">SNo.</th>
                                                <th data-ordering="false">Name</th>
                                                <th data-ordering="false">Category</th>
                                                <th data-ordering="false">City</th>
                                                <th data-ordering="false">State</th>
                                                <th data-ordering="false">Registered On</th>
                                                <th>Approved By</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <td colspan="8" align="center">NO DATA EXISTS</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                   

                </div>
                @endsection