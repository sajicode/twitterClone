<nav class="nav blog-nav">
    <a class="nav-link active" href="/viewblog">Home</a>
    <a class="nav-link" href="#">New features</a>
    <a class="nav-link" href="#">Press</a>
    <a class="nav-link" href="#">New hires</a>
    <a class="nav-link" href="#">About</a>

    @if(auth()->check())

        <a class="nav-link ml-auto" href="#"> {{ auth()->user()->name }} </a>

    @endif
    
</nav>