@extends('layouts.master')

@section('title', 'Mahir/Skill')

@section('index_link', $pages->index)
@section('experience_link', $pages->experience)
@section('skills_link', $pages->skills)
@section('projects_link', $pages->projects)

@section('content')
    <div class="container">

      <div class="text-right">
        <h1 class="text-army-green mb-5">{{$title}}</h1>
      </div>

      <div class="skill">
        @foreach($skills as $skill)
        
          <div class="text-secondary mb-1 row">
            <h5 class="text-army-green col-sm-2">[{{$skill->name}}] &nbsp;&nbsp;&nbsp;&nbsp; </h5> 
            <h5 class="col-sm-10 text-left"> {{$skill->skill}}</h5>
          </div>
        
        @endforeach      
      </div>

    </div>
@endsection