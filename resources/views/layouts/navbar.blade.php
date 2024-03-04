<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light static-top">
    <div class="container">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#!"
            style="color: #FFF; font-weight: bold; font-size: 28px; text-decoration: underline;">
            PESONA JATIM
        </a>

        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Logout button -->
        @can('admin')
            <form action="/logout" method="POST">
                @csrf
                <input class="btn btn-outline-primary" type="submit" value="Logout"></input>
            </form>
        @endcan
    </div>
</nav>
