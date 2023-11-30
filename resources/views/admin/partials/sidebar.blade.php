<aside class="bg-dark">
    <nav>
        <ul>
            <li class="mb-3">
              <a target="_blank" href="{{ route('home') }}"><i class="fa-solid fa-chart-line"></i> Dashboard home</a>
            </li>
            <li class="mb-3">
                <a href="{{ route('admin.home') }}"><i class="fa-solid fa-chart-line"></i> Dashboard admin</a>
              </li>
            <li class="mb-3">
              <a href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-list"></i> Elenco post</a>
            </li>
            <li class="mb-3">
              <a href="{{ route('admin.categories.index') }}"><i class="fa-solid fa-layer-group"></i> Elenco Categorie</a>
            </li>
        </ul>
    </nav>
</aside>
