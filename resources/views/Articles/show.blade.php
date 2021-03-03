
<style type = "text/css"> 
 
</style>

@extends('layouts.layout')
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="{{ url('/index') }}">Skaxis</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="{{ url('/index') }}">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="pages/gallery.html">Gallery</a></li>
              <li><a href="pages/full-width.html">Full Width</a></li>
              <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
              <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
              <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
            <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="#">{{ Auth::user()->name }}</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p>Condimentum</p>
            <h3 class="heading">Ligula at fermentum</h3>
            <p>Sodales sapien donec porttitor dolor nec elit</p>
            <footer><a class="btn" href="#">Luctus suscipit in</a></footer>
          </article>
        </li>


<div class="container">
    <div class="col-md-12">
   

    <a href="post.html">
        <h2 class="post-title">
          {{ $article->id }})    {{ $article->titre  }}
        </h2></a>
        <h5 class="post-subtitle">
          {{ $article->text }}
        </h5>
      
        
        <div class="clearfix">
            @if ($article->user_id === $userID)
            <a class="btn btn-success float-right"  href="{{route('index.edit',$article->id)  }}">Modifier</a>
            <form action="{{ route('index.destroy', $article->id)}}" method="post" >
                @csrf
                @method('DELETE')
                <button class="btn btn-danger float-right" type="submit">Delete</button>
              </form>
                {{-- <a class="btn btn-danger float-right"  href="{{route('blogs.destroy',$article->id)  }}">Supprimer</a> --}}
                
            @endif
            
            
          </div>
    </div>
    <hr>



    </div>
    </div>
