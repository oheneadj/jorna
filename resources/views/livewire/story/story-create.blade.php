<div>
    <div class="row pt-md-0 pt-5">
        <x-sidebar />


        <div class="col-12 col-lg-8">
            <x-topnav />
            <form action="edit-item.html#" method="post" class="card mb-4 border-gray-300 p-4">
                <h1 class="h5 mb-4">What Happened Today?</h1>
                <div class="mb-4"><label for="description">My Story</label>
                    <textarea rows="10" class="form-control text-gray"
                              placeholder="Describe your day in once sentence. Take the time to think about what has made your day."
                              id="description" required=""></textarea>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-4"><label for="currency">How did you feel?</label> <select class="form-select"
                                                                                                  id="currency" aria-label="Currency select example">
                                <option value="USD">😁 Awesome</option>
                                <option value="EUR">😊 Pretty good</option>
                                <option value="GBP">😐 Quite OK</option>
                                <option value="AUD">😔 Kind of bad</option>
                                <option value="CNY">😢 Horrible</option>
                            </select></div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="mb-3"><span class="h6 fw-bold">What was the reason?</span></div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck1"> <label class="form-check-label" for="defaultCheck1">🎓
                                Education</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck2"> <label class="form-check-label" for="defaultCheck2">👨‍👩‍👦
                                Family</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck3"> <label class="form-check-label" for="defaultCheck3">💰
                                Finances</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck1"> <label class="form-check-label" for="defaultCheck1">🌭 Food</label>
                        </div>


                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck2"> <label class="form-check-label" for="defaultCheck2">🤗
                                Friends</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck3"> <label class="form-check-label" for="defaultCheck3">🏥
                                Health</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck1"> <label class="form-check-label" for="defaultCheck1">🏋️‍♂️
                                Hobbies</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck2"> <label class="form-check-label" for="defaultCheck2">👩‍❤️‍👨
                                Relationship</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck3"> <label class="form-check-label" for="defaultCheck3">😇
                                Spirituality</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck3"> <label class="form-check-label" for="defaultCheck3">⚽ Sport</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck3"> <label class="form-check-label" for="defaultCheck3">☔
                                Weather</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                       id="defaultCheck3"> <label class="form-check-label" for="defaultCheck3">💼
                                Work</label>
                        </div>
                    </div>
                </div>

                <div class="mb-4"><label for="location">Location</label> <input type="text"
                                                                                placeholder="26, Vancouver, BC, Canada - 324578" class="form-control" id="location"
                                                                                required="">
                </div>
                <div class="row">
                    <div class="col"><button class="btn btn-primary btn-dark animate-up-2 mt-2"
                                             type="submit">Save</button></div>
                </div>
            </form>

            <form action="edit-item.html#" method="post" class="card text-gray mb-4 border-gray-300 p-4">
                <h2 class="h6">Gallery</h2>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="mb-3"><label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div><small class="text-gray fw-light font-xs d-block mt-2">Images should be at least 500 pixels wide
                    and only *.jpg, *.png and *.jpeg formats are accepted.</small>
                <div class="d-flex mt-4 flex-wrap">
                    <div class="profile-image-small fmxw-100 mb-3 me-3"><img class="rounded"
                                                                             src="/assets/img/account/office-1.jpg" alt="Office Conference"></div>
                    <div class="profile-image-small fmxw-100 mb-3 me-3"><img class="rounded"
                                                                             src="/assets/img/account/office-2.jpg" alt="Office Cowork"></div>
                    <div class="profile-image-small fmxw-100 mb-3 me-3"><img class="rounded"
                                                                             src="/assets/img/account/office-3.jpg" alt="Office Lifestyle"></div>
                    <div class="profile-image-small fmxw-100 mb-3 me-3"><img class="rounded"
                                                                             src="/assets/img/account/office-1.jpg" alt="Themesberg Office"></div>
                    <div class="profile-image-small fmxw-100 mb-3 me-3"><img class="rounded"
                                                                             src="/assets/img/account/office-2.jpg" alt="Office Meeting"></div>
                    <div class="profile-image-small fmxw-100 mb-3 me-3"><img class="rounded"
                                                                             src="/assets/img/account/office-3.jpg" alt="Office Private"></div>
                </div>
            </form>

            <form action="edit-item.html#" method="post" class="card text-gray mb-4 border-gray-300 p-4">
                <div class="mb-4"><label for="video">Video url</label> <input type="text"
                                                                              value="https://vimeo.com/40842620" class="form-control text-gray" id="video"
                                                                              required=""></div>
                <div class="row">
                    <div class="col"><button class="btn btn-primary btn-dark animate-up-2 mt-2 text-right"
                                             type="submit">Update</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
