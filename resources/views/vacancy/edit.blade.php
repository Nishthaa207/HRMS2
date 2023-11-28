@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Vacancy Announcement</h3>
        <div class="row">
            <!-- <div class="col-md-2">
            </div> -->        
            <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('vacancy.update', $vacancy->id) }}">
                @csrf
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                            <div class="col-md-6">
                            <label>Title:</label>
                                <input type="text" class="form-control" name="title" value="{{ $vacancy->title}}">
                            </div>
                            <div class="col-md-6">
                            <label>Minimum Experience:</label>
                                <input type="text" class="form-control" name="min exp" value="{{ $vacancy->min_exp}}">
                            </div>
                            <div class="col-md-6">
                                <label>Max Experience:</label>
                                <input type="text" class="form-control" name="max exp" value="{{ $vacancy->max_exp}}">
                            </div>
                            <div class="col-md-6">
                                <label>Description:</label>
                                <input type="text" class="form-control" name="description" value="{{ $vacancy->description}}">
                            </div>
                            <div class="col-md-12">
                                <label>Skills:</label>
                                <input type="text" class="form-control" name="skills" value="{{ $vacancy->skills}}">
                            </div>
                            <div class="col-md-12">
                                <label>Salary:</label>
                                <input type="text" class="form-control" name="salary" value="{{ $vacancy->salary}}">
                            </div>
                            <div class="col-md-12">
                                <label>Display from:</label>
                                <input type="date" class="form-control" name="display from" value="{{ $vacancy->display_from}}">
                            </div>
                            <div class="col-md-12">
                                <label>Display till:</label>
                                <input type="date" class="form-control" name="display till" value="{{ $vacancy->display_till}}">
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .form-area{
            padding: 20px;
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