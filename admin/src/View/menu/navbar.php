<nav class="navbar navbar-expand-lg navbar-light bg-info    ">
    <a href="index.php?page=list-product" class="text-white">Product</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Customer
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=list-customer">List Customer</a>
                    <a class="dropdown-item" href="index.php?page=add-customer">Add new Customer</a>
                </div>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=list-category">List Category</a>
                    <a class="dropdown-item" href="index.php?page=add-category">Add new Category</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bill
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=list-bill">List Bill</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
        </ul>

        <form action="index.php?page=search-product" method="post" class="form-inline my-2 my-lg-0">
            <input type="text" name="keyword" placeholder="search" class="form-control mr-sm-2">
            <input type="submit" class="btn btn-outline-warning my-2 my-sm-0" value="Search">
        </form>
        <a href="index.php?page=logout" class="btn btn-danger">Log out</a>
    </div>
</nav>