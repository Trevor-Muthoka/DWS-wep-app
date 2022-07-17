@extends('layouts.cdashboard')
@push('links')
   <link rel="stylesheet" href="\css\md.css">
@endpush
@section('content')
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <!-- Section: Sidebar -->
                    <section>
                        <!-- Section: Filters -->
                        <section id="filters" data-auto-filter="true">
                            <h5>Filters</h5>

                            <!-- Section: Condition -->
                            <section class="mb-4" data-filter="condition">
                                <h6 class="font-weight-bold mb-3">Condition</h6>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="new"
                                        id="condition-checkbox"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="condition-checkbox"
                                    >
                                        New
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="used"
                                        id="condition-checkbox2"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="condition-checkbox2"
                                    >
                                        Used
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="collectible"
                                        id="condition-checkbox3"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="condition-checkbox3"
                                    >
                                        Collectible
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="renewed"
                                        id="condition-checkbox4"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="condition-checkbox4"
                                    >
                                        Renewed
                                    </label>
                                </div>
                            </section>
                            <!-- Section: Condition -->

                            <!-- Section: Avg. Customer Review -->
                            <section class="mb-4">
                                <h6 class="font-weight-bold mb-3">Avg. Customer Review</h6>

                                <ul class="rating" data-toggle="rating" id="filter-rating">
                                    <li>

                                        <i class="far fa-star fa-sm text-primary" title="1"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm text-primary" title="2"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm text-primary" title="3"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm text-primary" title="4"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm text-primary" title="5"></i>
                                    </li>
                                </ul>
                            </section>
                            <!-- Section: Avg. Customer Review -->

                            <!-- Section: Price -->
                            <section class="mb-4">
                                <h6 class="font-weight-bold mb-3">Price</h6>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="price-radio"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-radio"
                                    >
                                        Under $25
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="price-radio2"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-radio2"
                                    >
                                        $25 to $50
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="price-radio3"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-radio3"
                                    >
                                        $50 to $100
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="price-radio4"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-radio4"
                                    >
                                        $100 to $200
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="price-radio5"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-radio5"
                                    >
                                        $200 & above
                                    </label>
                                </div>
                            </section>
                            <!-- Section: Price -->

                            <!-- Section: Size -->
                            <section class="mb-4" data-filter="size">
                                <h6 class="font-weight-bold mb-3">Size</h6>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="34"
                                        id="price-checkbox"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-checkbox"
                                    >
                                        34
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="36"
                                        id="price-checkbox2"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-checkbox2"
                                    >
                                        36
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="38"
                                        id="price-checkbox3"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-checkbox3"
                                    >
                                        38
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="40"
                                        id="price-checkbox4"
                                    />
                                    <label
                                        class="form-check-label text-uppercase small text-muted"
                                        for="price-checkbox4"
                                    >
                                        40
                                    </label>
                                </div>
                            </section>
                            <!-- Section: Size -->

                            <!-- Section: Color -->
                            <section class="mb-4" data-filter="color">
                                <h6 class="font-weight-bold mb-3">Color</h6>

                                <div class="form-check form-check-inline m-0 p-0 pr-3">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="colorRadio"
                                        id="colorRadio1"
                                        value="white"
                                    />
                                    <label class="btn bg-light btn-rounded p-3" for="colorRadio1"></label>
                                </div>

                                <div class="form-check form-check-inline m-0 p-0 pr-3">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="colorRadio"
                                        id="colorRadio2"
                                        value="grey"
                                    />
                                    <label
                                        class="btn btn-rounded p-3"
                                        for="colorRadio2"
                                        style="background-color: #bdbdbd"
                                    ></label>
                                </div>

                                <div class="form-check form-check-inline m-0 p-0 pr-3">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="colorRadio"
                                        id="colorRadio3"
                                        value="black"
                                    />
                                    <label class="btn bg-dark text-white btn-rounded p-3" for="colorRadio3"></label>
                                </div>

                                <div class="form-check form-check-inline m-0 p-0 pr-3">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="colorRadio"
                                        id="colorRadio5"
                                        value="blue"
                                    />
                                    <label class="btn bg-primary btn-rounded p-3" for="colorRadio5"></label>
                                </div>

                                <div class="form-check form-check-inline mt-3 mr-0 p-0 pr-3">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="colorRadio"
                                        id="colorRadio9"
                                        value="red"
                                    />
                                    <label class="btn bg-danger btn-rounded p-3" for="colorRadio9"></label>
                                </div>

                                <div class="form-check form-check-inline mt-3 mr-0 p-0 pr-3">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="colorRadio"
                                        id="colorRadio10"
                                        value="orange"
                                    />
                                    <label class="btn bg-warning btn-rounded p-3" for="colorRadio10"></label>
                                </div>
                            </section>
                            <!-- Section: Color -->
                        </section>
                        <!-- Section: Filters -->
                    </section>
                    <!-- Section: Sidebar -->
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <div class="col-md-6 my-auto py-3">
                            <select class="select" id="sort-select">
                                <option value="1">Best rating</option>
                                <option value="2">Lowest price first</option>
                                <option value="3">Highest price first</option>
                            </select>
                            <label class="form-label select-label">Sort</label>
                        </div>
                    </div>
                    <div class="row mb-4" id="content"></div>
                    <div class="row">
                        <div class="col-md-12 mt-3 text-center">
                            <div
                                class="spinner-border text-primary mx-auto my-5"
                                id="spinner"
                                role="status"
                                style="display: none"
                            >
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@push('scriptsdash')
    <script src='https://use.fontawesome.com/a22409d31b.js' crossorigin='anonymous'></script>
    @endpush
