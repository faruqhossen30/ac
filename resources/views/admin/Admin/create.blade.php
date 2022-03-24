@extends('admin.layout.app')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <p class="header-title fs-4 text-uppercase">Add New Admin</p>
                            </div>
                            <div class="col-md-2">
                                <a href="{{route('admin.adminlist')}}" class="btn btn-success float-end" title="All Admin List">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="#" method="POST" class="needs-validation" novalidate="">
                            <input type="hidden" name="_token" value="8dGw7DGUjKkMXamDTLBg7FKr0VnDmECtvQrnTbMS">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="TYPE FULL NAME" required="" spellcheck="false" data-ms-editor="true">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="TYPE EMAIL" required="" spellcheck="false" data-ms-editor="true">
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control select2-multiple select2-hidden-accessible" name="roles[]"
                                        data-toggle="select2" multiple="" data-placeholder="Choose ..." data-select2-id="1"
                                        tabindex="-1" aria-hidden="true">
                                        <option value="superadmin">superadmin</option>
                                        <option value="Marketer">Marketer</option>
                                        <option value="Admin">Admin</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                        data-select2-id="2" style="width: 1037.09px;"><span class="selection"><span
                                                class="select2-selection select2-selection--multiple" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="-1"
                                                aria-disabled="false">
                                                <ul class="select2-selection__rendered">
                                                    <li class="select2-search select2-search--inline"><input
                                                            class="select2-search__field" type="search" tabindex="0"
                                                            autocomplete="off" autocorrect="off" autocapitalize="none"
                                                            spellcheck="false" role="searchbox" aria-autocomplete="list"
                                                            placeholder="Choose ..." style="width: 1015.09px;"></li>
                                                </ul>
                                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="TYPE PASSWORD" required="">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" placeholder="RETYPE PASSWORD" required="">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>
                                        SAVE</button>
                                </div>
                            </div>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>

    </div>
@endsection
@push('script')
    <script src="https://heshelghor.com/backend/assets/libs/selectize/js/standalone/selectize.min.js"></script>
    <script src="https://heshelghor.com/backend/assets/libs/mohithg-switchery/switchery.min.js"></script>
    <script src="https://heshelghor.com/backend/assets/libs/multiselect/js/jquery.multi-select.js"></script>
    <script src="https://heshelghor.com/backend/assets/libs/jquery.quicksearch/jquery.quicksearch.min.js"></script>
    <script src="https://heshelghor.com/backend/assets/libs/select2/js/select2.min.js"></script>
@endpush
@push('style')
    <!-- Stack css Start -->
    <link href="https://heshelghor.com/backend/assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://heshelghor.com/backend/assets/libs/multiselect/css/multi-select.css" rel="stylesheet"
        type="text/css" />
    <link href="https://heshelghor.com/backend/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Stack css End -->
@endpush
