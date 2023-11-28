@extends('layouts.app')

@section('content')

    <div class="container">
        <h3 align="center" class="mt-5">Vacancy Announcement</h3>
        <div class="row">
        
            <div class="col-md-8">        
            <a href="{{url('vacancy/create')}}"> Create new entry </a>
                <table class="table mt-5" id="mytable">
                    <thead>
                      <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Min exp</th>
                        <th scope="col">Max exp</th>
                        <th scope="col">Description</th>
                        <th scope="col">Skills</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Display from</th>
                        <th scope="col">Display till</th>
                        <th scope="col">Status</th>
                        <th scope="col">sequence</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">updated_by</th>
                        <th scope="col">created_at</th>
                        <th scope="col">created_by</th>
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $vacancy as $key => $vacancy )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $vacancy->title}}</td>
                            <td scope="col">{{ $vacancy->min_exp}}</td>
                            <td scope="col">{{ $vacancy->max_exp}}</td>
                            <td scope="col">{{ $vacancy->description}}</td>
                            <td scope="col">{{ $vacancy->skills}}</td>
                            <td scope="col">{{ $vacancy->salary }}</td>
                            <td scope="col">{{ $vacancy->display_from}}</td>
                            <td scope="col">{{ $vacancy->display_till}}</td>
                            <td scope="col">{{ $vacancy->status}}</td>
                            <td scope="col">{{ $vacancy->sequence}}</td>
                            <td scope="col">{{ $vacancy->updated_at}}</td>
                            <td scope="col">{{ $vacancy->updated_by}}</td>
                            <td scope="col">{{ $vacancy->created_at}}</td>
                            <td scope="col">{{ $vacancy->created_by}}</td>
                            <td>
                            <a href="{{'vacancy/'.$vacancy->id.'/edit'}}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            </td><td>
                            <form action="{{ route('vacancy.destroy', $vacancy->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
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