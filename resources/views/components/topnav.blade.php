<div class="d-flex justify-content-between mb-3">
    <div>
        @if (Route::current()->getName() === 'stories')
            <a href="#">
                <span class="icon icon-xs"><span class="fas fa-chevron-right me-2"></span></span>
                All Stories</a>
        @else
            <a href="{{ route('stories') }}">
                <span class="icon icon-xs"><span class="fas fa-chevron-left me-2"></span></span>
                Go to stories</a>
        @endif

    </div>

    <div>
        @if (Route::current()->getName() !== 'create')
            <a href="{{ route('create') }}" class="btn btn-warning btn-sm mx-2 px-3"><span class="fas fa-plus me-2"></span>
                Add New Story </a>
        @endif
    </div>


</div>
