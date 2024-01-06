<div>
    <div class="row pt-md-0 pt-5">
        <x-sidebar />
        <div class="col-12 col-lg-8">
            <x-topnav />
                <div class="card mb-4 border-gray-300 bg-white p-4">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span>{{$story->created_at->toFormattedDateString()}}</span>

                        <div>
                            <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                                    data-placement="top" title="Sent from the phone "
                                    data-original-title="Sent from the phone">
                                😆</span>
                            </button>
                            <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                                    data-placement="top" title="Sent from the phone "
                                    data-original-title="Sent from the phone">
                                😆</span>
                            </button>
                            <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                                    data-placement="top" title="Sent from the phone "
                                    data-original-title="Sent from the phone">
                                😆</span>
                            </button>
                            <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                                    data-placement="top" title="Sent from the phone "
                                    data-original-title="Sent from the phone">
                                😆</span>
                            </button>
                        </div>
                    </div>
                    <p class="m-0">
                        {{$story->description}}
                    </p>
                </div>
        </div>
    </div>
</div>
