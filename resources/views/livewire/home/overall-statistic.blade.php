<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $total_users }}</h3>
                <p>Users</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-users"></i>
            </div>
            <a href="{{ route('user.index') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $total_categories }}</h3>

                <p>Categories</p>
            </div>
            <div class="icon">
                <i class="nav-icon fa fa-cube"></i>
            </div>
            <a href="{{ route('category.index') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $total_sub_categories }}</h3>

                <p>Sub Categories</p>
            </div>
            <div class="icon">
                <i class="nav-icon fa fa-cubes"></i>
            </div>
            <a href="{{ route('sub-category.index') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $total_wallets }}</h3>

                <p>Wallets</p>
            </div>
            <div class="icon">
                <i class="nav-icon fa fa-wallet"></i>
            </div>
            <a href="{{ route('home') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
