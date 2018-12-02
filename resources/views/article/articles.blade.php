@extends('layouts.admin')

@section('template_title')
    Admin Article
@endsection
@section('section_nav_menu')
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="/admin">Laravel</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="display: none;">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0" style="display: none;">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>
    </nav>
@endsection

@section('section_left_menu')
 <ul class="sidebar navbar-nav">
    <!-- <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Other Pages:</h6>
        <a class="dropdown-item" href="404.html">404 Page</a>
        <a class="dropdown-item" href="blank.html">Blank Page</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li> -->
    <li class="nav-item active">
      <a class="nav-link" href="{{url('admin/article')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Article Management</span></a>
    </li>
  </ul>
@endsection

@section('content')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="/admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Articles</li>
  </ol>    
  <!-- DataTables Example -->
  <div class="card mb-3">    
    <div class="card-header">
      <i class="fas fa-table"></i>
      Article List      
    </div>
    <div class="card-body">
      <div class="row">
        <div class="offset-md-9 col-md-3">
             <button class="btn btn-primary btn_add" type="submit">
                <a href="{{route('article.create')}}">Add</a>
             </button> 
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Article name</th>
              <th>Author</th>
              <th>Article English Content</th>
              <th>Article Japanses Content</th>
              <th>Article Russian Content</th>
              <th>Created_at</th>
              <th>Update_at</th>
              <th>Other</th>
            </tr>
          </thead>
          <tbody>
            @foreach($articles as $article)
              <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->article_name}}</td>
                <td>{{$article->author}}</td>
                <td>{{$article->english_text}}</td>
                <td>{{$article->japanese_text}}</td>
                <td>{{$article->russian_text}}</td>
                <td>{{$article->created_at}}</td>
                <td>{{$article->update_at}}</td>
                <th>
                    <div class="row" >
                        <div class="col-md-12 ct_button_group">                           
                            <button class="btn btn-warning" type="submit">
                                <a href="{{route('article.edit', [$article->id])}}">Edit</a>   
                             </button> 
                            <form action="{{ route('article.destroy', $article->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </th>
              </tr>
            @endforeach
          </tbody>
        </table>        
      </div>      
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>     
  </div>

  <p class="small text-center text-muted my-5">
    <em>More table examples coming soon...</em>
  </p>

</div>
@endsection

@section('page_footer')
<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Your Website 2018</span>
    </div>
  </div>
</footer>
@endsection