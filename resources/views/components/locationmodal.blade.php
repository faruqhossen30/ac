@php
    $divisions = App\Models\Admin\Location\Division::with('districts')
        ->orderBy('name', 'asc')
        ->get();

@endphp
<div class="modal fade" id="locatioModal" tabindex="-1" aria-labelledby="locatioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="padding: 0">
                <h5 id="locatioModalLabel"
                    style="font-size: 1rem; font-weight:500; display:block; width:100%; padding:.5rem 0 0 .5rem">
                    Search Your Location
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="text-align: right;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="font-size: 14px;" id="locationModalBody">



            </div>
            {{-- <div class="modal-footer"
                style="display: flex; flex-direction:row justify-content:flex-end; padding:0px 0px">
                <button type="button" data-dismiss="modal"
                    style="width: auto;font-size:14px;font-weight:bold;max-height:40px;padding:0 15px">Close</button>
                <button type="button" id="selectImageButton"
                    style="width: auto;font-size:14px;font-weight:bold;max-height:40px;padding:0 15px">Select
                    Image</button>
            </div> --}}
        </div>
    </div>
</div>
