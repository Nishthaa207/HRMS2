@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Vacancy Announcement</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <div class="live-preview">
                    <form method="POST" action="{{ route('vacancy.store') }}">
                    @csrf
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="titlefloatingInput" placeholder="Enter title" name="title">
                                    <label for="titlefloatingInput">Title</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="experiencefloatingInput" placeholder="Enter Minimum experience" name="min_exp">
                                    <label for="experiencefloatingInput">Minimum experience</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="experiencefloatingInput" placeholder="Enter your maximum experience" name="max_exp">
                                    <label for="experiencefloatingInput">Maximum experience</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="descriptionfloatingInput" placeholder="Enter your description" name="description">
                                    <label for="descriptionfloatingInput">Description</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="skillsfloatingInput1" placeholder="Enter your skills" name="skills">
                                    <label for="skillsfloatingInput1">Skills</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="salaryfloatingInput1" placeholder="Enter Salary" name="salary">
                                    <label for="salaryfloatingInput1">Salary</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="datefloatingInput1" placeholder="Display from" name="display_from">
                                    <label for="datefloatingInput1">Display from</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="datefloatingInput1" placeholder="Display till" name="display_till">
                                    <label for="datefloatingInput1">Display till</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="status">
                                        <option selected>Choose...</option>
                                        <option value="1">0</option>
                                        <option value="2">1</option>
                                    </select>
                                    <label for="floatingSelect">Status</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="zipfloatingInput" placeholder="Sequence" name="sequence">
                                    <label for="zipfloatingInput">Sequence</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-md-12 mt-3">
                                    <input type="submit" class="btn btn-primary" value="Register">
                                </div> 
                                <!-- <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                
            <!-- <div class="form-area">
                    <form method="POST" action="{{ route('vacancy.store') }}">
                        @csrf
                        <div class="row"> -->
                            <!-- <div class="col-md-6">
                                <label>Title:</label>
                                <input type="text" class="form-control" name="title">
                            </div> -->
                            <!-- <div class="col-md-6">
                                <label>Min Experience:</label>
                                <input type="text" class="form-control" name="min_exp">
                            </div>
                            <div class="col-md-6">
                                <label>Max Experience:</label>
                                <input type="text" class="form-control" name="max_exp">
                            </div>
                            <div class="col-md-6">
                                <label>Description:</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="col-md-12">
                                <label>Skills:</label>
                                <input type="text" class="form-control" name="skills">
                            </div>
                            <div class="col-md-12">
                                <label>Salary:</label>
                                <input type="text" class="form-control" name="salary">
                            </div> -->
                            <!-- <div class="col-md-12">
                                <label>Display from:</label>
                                <input type="date" class="form-control" name="display from">
                            </div>
                            <div class="col-md-12">
                                <label>Display till:</label>
                                <input type="date" class="form-control" name="display till"> -->
                            <!-- </div>
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div> -->

                        <!-- </div>
                    </form>
                </div>

            </div> -->
        </div>
    </div>


@endsection


@push('css')
    <style>
        .form-area{
            padding: 30px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush