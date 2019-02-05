@extends('dashboard.layouts.app')
@extends('dashboard.layouts.navigationbar')
@extends('dashboard.layouts.sidenavigationbar')
@extends('dashboard.layouts.pagedetails')
@section('pagetitle', 'Projects')

@section('content')

        
        <div class="card border-secondary bg-light mt-3">
          <div class="card-header">
            Projects - Showing {{ $projects->count() }} out of {{ $projects->total() }} results
          </div>
          <div class="card-body">
            <div>
              <div class="col-xl-3 col-lg-3 col-md-12 col-12 float-left mb-3">
                <form>
                  <select class="custom-select">
                    <option selected>Show items per page</option>
                    <option type="submit" value="1">15</option>
                    <option value="2">30</option>
                    <option value="3">50</option>
                  </select>
                </form>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-12 col-12 float-right">
                <form method="GET" action="{{ route('projectsView') }}">
                  <div class="input-group mb-3">
                    <input name="search" type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="searchSubmitButton">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit" id="searchSubmitButton">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-12 col-12 float-right mb-3">
                <form>
                  <select class="custom-select">
                    <option selected>Sort by</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </form>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Project ID</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Project Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $project)
                  <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <th scope="row">{{ $project->project_name }}</th>
                    <th scope="row">{{ $project->project_description }}</th>
                    <th scope="col">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                      </div>
                    </th>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th scope="col">Project ID</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Project Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            
          </div>
          <div class="card-footer text-muted">
            {{ $projects->onEachSide(1)->links() }}
          </div>
        </div>

@endsection