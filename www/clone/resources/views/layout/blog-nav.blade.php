<nav class="nav blog-nav">
    <a class="nav-link active" href="/posts">Home</a>
    <a class="nav-link" href="/posts/create">Create Post</a>
    <a class="nav-link" href="#">Press</a>
    <a class="nav-link" href="#">New hires</a>
    <a class="nav-link" href="#">About</a>
    <a class="nav-link" href="/logout">Logout</a>

    @if(auth()->check())

        <a class="nav-link ml-auto" href="#"> {{ auth()->user()->name }} </a>

    @endif

</nav>