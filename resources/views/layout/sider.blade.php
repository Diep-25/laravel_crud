<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Demo</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="{{ route('news.create') }}">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Add New</span>
            </a>
        </li>
        <li>
            <a href="{{ route('news.list') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">List New</span>
            </a>
        </li>


    </ul>
    <ul class="side-menu">

        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
