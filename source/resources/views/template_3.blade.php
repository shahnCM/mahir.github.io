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

      <div class="project row">
        @foreach($projects as $pjt)
        
          <div class="pjt p-1 col-sm-6">
            <div class="border rounded" style="border-color: #F8F8F8; min-height:180px;">
              <div class="p-2">
                <div class="row">
                  <h4 class="col-6 text-army-green">{{$pjt->name}}</h4>
                  <h6 class="col-6 text-secondary text-right">[{{$pjt->languages}}]</h6>
                </div>
                <div class="p-2">
                  <p class="text-wrap text-justified text-secondary">{{$pjt->description}}</p>
                </div>

                <div class="position-relative bottom-0">
                  <div class="row">
                    <a class="text-decoration-none text-left col-6 text-danger" href="{{$pjt->live->link}}">@if($pjt->live->available) Live @endif</a>
                    <a class="text-decoration-none text-right col-6 text-success" href="{{$pjt->github->link}}">@if($pjt->github->available) Github @endif</a>
                  </div>
                </div>            
              </div>
            </div>
          </div>
        
        @endforeach      
      </div>

    </div>
@endsection