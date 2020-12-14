@extends('layouts.master')

@section('title', 'Page Title')

@section('index_link', $pages->index)
@section('experience_link', $pages->experience)
@section('skills_link', $pages->skills)
@section('projects_link', $pages->projects)

@section('content')
    <div class="container">
        <div class="text-right">
            <h1 class="text-army-green mb-5">{{$title}}</h1>
        </div>
        
        @foreach($items as $job)
        <div class="job mb-5">
            <h4 class="text-army-green">{{$job->office_name}} [{{$job->job_type}}] </h4>
            <h6 class="text-secondary">{{$job->duration}}</h6>
            <small><a target="_blank" class="text-secondary text-decoration-none" href="{{$job->office_website}}">Visit Website</a></small> 
            <ul>
                @foreach($job->tasks as $task)
                <li class="text-secondary">{{$task->name}}</li>
                @endforeach
            </ul>
        </div>
        @endforeach
        

    </div>
@endsection