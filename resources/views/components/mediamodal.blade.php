@php
$user = auth()->user();
$galleries = $user->getMedia();

@endphp

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style="padding: 0">
          <h5 id="exampleModalLabel" style="font-size: 1.2rem; font-weight:500; display:block; width:100%; padding:.5rem 0 0 .5rem">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-align: right;" >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul class="nav nav-tabs" style="font-size: 16px;">
                <li class="nav-item">
                    <a href="#multipleUpload" data-bs-toggle="tab" aria-expanded="false" class="nav-link uploadmediaclass">
                        <span class="d-inline-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                        <span class="d-none d-sm-inline-block">Upload Media</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#multipleMediaGallery" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                        <span class="d-inline-block d-sm-none"><i class="mdi mdi-account"></i></span>
                        <span class="d-none d-sm-inline-block">Media Gallery</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="multipleMediaGallery">
                    this is photo
                </div>
                <div class="tab-pane" id="uploadmediapane">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-body">
                                <form method="POST" id="mediaForm" enctype="multipart/form-data">
                                    @csrf
                                    <div >
                                        <div class="form-group">
                                            <input type="file" name="media" class="form-control-sm" style="font-size: 14px;" >
                                        </div>
                                        <div class="form-group" style="text-align: right">
                                            <button id="uploadmediabutton" type="submit" style="width: auto;font-size:14px;font-weight:bold;max-height:40px;padding:0 15px">Upload Image</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer" style="display: flex; flex-direction:row justify-content:flex-end">
          <button type="button" data-dismiss="modal" style="width: auto;font-size:14px;font-weight:bold;max-height:40px;padding:0 15px">Close</button>
          <button type="button" id="selectImageButton" style="width: auto;font-size:14px;font-weight:bold;max-height:40px;padding:0 15px">Select Image</button>
        </div>
      </div>
    </div>
  </div>
