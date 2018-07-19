<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/posts">Home</a>
          @if(auth()->check())
          <a class="nav-link active ml-auto" href="/logout">{{auth()->user()->name}}</a>
          <a class="nav-link active ml-auto" href="/logout">Logout</a>
          @else
          <a class="nav-link active ml-auto" href="/login">Login</a>
          <a class="nav-link active ml-auto" href="/register">Register</a>
          @endif
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
</div>