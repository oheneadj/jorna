<x-app-layout>
    <div class="row pt-md-0 pt-5">
        <div class="col-12 col-lg-4 mb-lg-0 mb-3">
            <div class="card border-gray-300 p-2">
                <div
                    class="card-header d-flex flex-lg-column align-items-center justify-content-center px-lg-4 flex-row border-0 bg-white px-1 text-center">
                    <div class="profile-thumbnail dashboard-avatar mx-lg-auto me-3">
                        <img src="/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
                            alt="Bonnie Green Portrait" />
                    </div>
                    <span class="h5 my-lg-3 me-lg-0 my-0 me-3">Hi, Bonnie!</span>
                    <a href="single-message.html#" class="btn btn-gray-300 btn-xs"><span class="me-2"><span
                                class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>
                <div class="card-body d-none d-lg-block p-2">
                    <div class="list-group dashboard-menu list-group-sm">
                        <a href="account.html" class="d-flex list-group-item list-group-item-action border-0">Overview
                            <span class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                            href="settings.html"
                            class="d-flex list-group-item list-group-item-action border-0">Settings<span
                                class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                            href="my-items.html" class="d-flex list-group-item list-group-item-action border-0">My
                            Items<span class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span>
                        </a><a href="security.html"
                            class="d-flex list-group-item list-group-item-action border-0">Security<span
                                class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                            href="billing.html"
                            class="d-flex list-group-item list-group-item-action border-0">Billing<span
                                class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span> </a><a
                            href="messages.html"
                            class="d-flex list-group-item list-group-item-action active border-0 border-0">Messages<span
                                class="icon icon-xs ms-auto"><span class="fas fa-chevron-right"></span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-lg-none">
            <div class="card mb-lg-5 mb-4 border-gray-300 bg-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-10 d-flex">
                            <a href="account.html"
                                class="list-group-item list-group-item-action me-2 border-0 text-center">Overview</a>
                            <a href="settings.html"
                                class="list-group-item list-group-item-action me-2 border-0 text-center">Settings</a>
                            <a href="my-items.html"
                                class="list-group-item list-group-item-action d-none d-sm-block me-2 border-0 border-0 text-center">My
                                Items</a>
                            <a href="security.html"
                                class="list-group-item list-group-item-action d-none d-md-block border-0 border-0 text-center">Security</a>
                        </div>
                        <div class="col-2 d-flex justify-content-center">
                            <div class="btn-group dropleft">
                                <button class="btn btn-link dropdown-toggle dropdown-toggle-split m-0 me-2 p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-sm"><span
                                            class="fas fa-ellipsis-h icon-secondary fa-lg"></span>
                                    </span><span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a href="my-items.html"
                                        class="list-group-item list-group-item-action d-sm-none border-0">My
                                        Items</a>
                                    <a href="security.html"
                                        class="list-group-item list-group-item-action d-md-none border-0">Security</a>
                                    <a href="billing.html"
                                        class="list-group-item list-group-item-action border-0">Billing</a>
                                    <a href="messages.html"
                                        class="list-group-item list-group-item-action active border-0">Messages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8">
            <div class="d-flex justify-content-between mb-3">
                <a href="messages.html"><span class="icon icon-xs"><span
                            class="fas fa-chevron-right me-2"></span></span>
                    All Stories</a>

                <a href="#" class="btn btn-primary btn-sm mx-2 px-3"><span class="fas fa-plus me-2"></span>
                    Add New Story </a>
            </div>
            {{-- <form action="single-message.html#" class="my-4">
                <textarea class="form-control border-gray-300-gray mb-4 border" id="message" placeholder="Your Message" rows="6"
                    maxlength="1000" required></textarea>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="file-field">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex">
                                <span class="icon icon-md h6"><span class="fas fa-paperclip me-3"></span></span>
                                <input type="file" />
                                <div class="d-md-block d-none d-sm-block text-left">
                                    <div class="fw-normal text-dark mb-1">Add File</div>
                                    <div class="text-gray small me-md-11 me-3">
                                        Supported files are: jpg, jpeg, png, doc, pdf, gif,
                                        zip, rare, tar, txt, xls, docx, xlsx, odt
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark">Send</button>
                    </div>
                </div>
            </form> --}}
            <div class="card mb-4 border-gray-300 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span>March 26, 19:25</span>
                    <div>
                        <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                            data-placement="top" title="Sent from the phone " data-original-title="Sent from the phone">
                            😆</span>
                        </button>
                        <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                            data-placement="top" title="Sent from the phone " data-original-title="Sent from the phone">
                            😆</span>
                        </button>
                        <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                            data-placement="top" title="Sent from the phone " data-original-title="Sent from the phone">
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
                    Hi Chris! Thanks a lot for this very useful template. Saved me
                    a lot of time and searches on the internet.
                </p>
            </div>
            <div class="card mb-4 border-gray-300 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="font-small"><a href="single-message.html#"><img
                                class="avatar-sm img-fluid rounded-circle me-2"
                                src="/assets/img/team/profile-picture-1.jpg" alt="avatar" />
                            <span class="fw-bold">Neil Sims</span> </a><span class="ms-2">March 26,
                            19:25</span></span>
                    <div class="d-none d-sm-block">
                        <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                            data-placement="top" title="Sent from the phone "
                            data-original-title="Sent from the phone">
                            <span class="fas fa-mobile-alt"></span>
                        </button>
                    </div>
                </div>
                <p class="m-0">
                    Hi Chris! Thanks a lot for this very useful template. Saved me
                    a lot of time and searches on the internet.
                </p>
            </div>
            <div class="card mb-4 border-gray-300 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="font-small"><a href="single-message.html#"><img
                                class="avatar-sm img-fluid rounded-circle me-2"
                                src="/assets/img/team/profile-picture-1.jpg" alt="avatar" />
                            <span class="fw-bold">Neil Sims</span> </a><span class="ms-2">March 26,
                            19:25</span></span>
                    <div class="d-none d-sm-block">
                        <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                            data-placement="top" title="Sent from the phone "
                            data-original-title="Sent from the phone">
                            <span class="fas fa-mobile-alt"></span>
                        </button>
                    </div>
                </div>
                <p class="m-0">
                    Hi Chris! Thanks a lot for this very useful template. Saved me
                    a lot of time and searches on the internet.
                </p>
            </div>
            <div class="card mb-4 border-gray-300 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="font-small"><a href="single-message.html#"><img
                                class="avatar-sm img-fluid rounded-circle me-2"
                                src="/assets/img/team/profile-picture-1.jpg" alt="avatar" />
                            <span class="fw-bold">Neil Sims</span> </a><span class="ms-2">March 26,
                            19:25</span></span>
                    <div class="d-none d-sm-block">
                        <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                            data-placement="top" title="Sent from the phone "
                            data-original-title="Sent from the phone">
                            <span class="fas fa-mobile-alt"></span>
                        </button>
                    </div>
                </div>
                <p class="m-0">
                    Hi Chris! Thanks a lot for this very useful template. Saved me
                    a lot of time and searches on the internet.
                </p>
            </div>
            <div class="card mb-4 border-gray-300 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="font-small"><a href="single-message.html#"><img
                                class="avatar-sm img-fluid rounded-circle me-2"
                                src="/assets/img/team/profile-picture-1.jpg" alt="avatar" />
                            <span class="fw-bold">Neil Sims</span> </a><span class="ms-2">March 26,
                            19:25</span></span>
                    <div class="d-none d-sm-block">
                        <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                            data-placement="top" title="Sent from the phone "
                            data-original-title="Sent from the phone">
                            <span class="fas fa-mobile-alt"></span>
                        </button>
                    </div>
                </div>
                <p class="m-0">
                    Hi Chris! Thanks a lot for this very useful template. Saved me
                    a lot of time and searches on the internet.
                </p>
            </div>

            <div class="card mb-5 border-gray-300 bg-white p-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="font-small"><a href="single-message.html#"><img
                                class="avatar-sm img-fluid rounded-circle me-2"
                                src="/assets/img/team/profile-picture-1.jpg" alt="avatar" />
                            <span class="fw-bold">Neil Sims</span> </a><span class="ms-2">March 26,
                            19:25</span></span>
                    <div class="d-none d-sm-block">
                        <button class="btn btn-link text-dark" aria-label="phone" data-toggle="tooltip"
                            data-placement="top" title="Sent from the phone "
                            data-original-title="Sent from the phone">
                            <span class="fas fa-mobile-alt"></span>
                        </button>
                    </div>
                </div>
                <p class="m-0">
                    Hi Chris! Thanks a lot for this very useful template. Saved me
                    a lot of time and searches on the internet.
                </p>
            </div>

        </div>
    </div>
</x-app-layout>
