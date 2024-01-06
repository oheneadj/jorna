<div>
    <div class="row pt-md-0 pt-5">
        <x-sidebar />
        <div class="col-12 col-lg-8">
            <x-topnav />

            @foreach($stories as $story)
                <x-story-item :story="$story"/>
            @endforeach

        </div>
    </div>
</div>
