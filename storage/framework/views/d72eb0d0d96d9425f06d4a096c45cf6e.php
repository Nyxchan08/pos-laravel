<style>
    .navbar {
        background-color: #ffffff;
        position: sticky;
    }

    .navbar-brand img {
        max-height: 31px;
    }

    .headers {
        display: flex;
        align-items: center;
    }

    .headers a {
        text-decoration: none;
        color: rgb(66, 59, 59);
        padding: 5px 20px;
        transition: background-color 0.3s;
        border-radius: 5px;
    }

    .headers a:hover {
        background-color: #12cbd854;
    }

    .dropdown-menu {
        margin-top: 0;
    }

    .dropdown-menu a {
        color: rgb(66, 59, 59);
        text-decoration: none;
        display: block;
        padding: 5px 20px;
    }
</style>

<nav class="navbar">
    <div class="container-fluid">
        <div class="headers">
            <a class="navbar-brand" href="/genders">
                <img src="https://s3.amazonaws.com/access-resources/evantaconnect/production/sponsor_logos/20763.png?6352" alt="Logo" class="d-inline-block align-text-top img-fluid">
            </a>
            <a href="/genders" class="home">Gender List</a>
            <a href="/users" class="home">User List</a>
            <div class="dropdown">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Create
                </button>
                <ul class="dropdown-menu">
                    <li><a href="/gender/create" class="create">Add Gender</a></li>
                    <li><a href="/user/create" class="create">Add User</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/include/nav.blade.php ENDPATH**/ ?>