<div class="col-12 col-lg-4 mb-lg-0 mb-3">
    <div class="card border-gray-300 p-2">
        <div
            class="card-header d-flex flex-lg-column align-items-center justify-content-center px-lg-4 flex-row border-0 bg-white px-1 text-center">
            <div class="profile-thumbnail dashboard-avatar mx-lg-auto me-3"><img
                    src="../../assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
                    alt="Bonnie Green Portrait"></div><span class="h5 my-lg-3 me-lg-0 my-0 me-3">Hi, Ohene!</span> <a
                href="edit-item.html#" class="btn btn-gray-300 btn-xs"><span class="me-2"><span
                        class="fas fa-sign-out-alt"></span></span>Sign Out</a>
        </div>
        <div class="card-body d-none d-lg-block p-2">
            <div class="list-group dashboard-menu list-group-sm">
                <a href="{{ route('dashboard') }}"
                    class="d-flex list-group-item list-group-item-action @if (Route::current()->getName() === 'dashboard') {{ 'active' }} @endif border-0">My
                    Overview <span class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span>
                </a>
                <a href="{{ route('stories') }}"
                    class="d-flex list-group-item list-group-item-action @if (Route::current()->getName() === 'stories') {{ 'active' }} @endif border-0">My
                    Stories <span class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span>
                </a>
                <a href="security.html" class="d-flex list-group-item list-group-item-action border-0">Security<span
                        class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span>
                </a>
                <a href="billing.html" class="d-flex list-group-item list-group-item-action border-0">Billing<span
                        class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span>
                </a>
                <a href="settings.html" class="d-flex list-group-item list-group-item-action border-0">Settings<span
                        class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span>
                </a>
            </div>
        </div>
    </div>
</div>
