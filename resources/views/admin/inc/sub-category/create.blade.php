<div class=" mb-3">

    <div class="modal fade" id="exampleModal-lg" tabindex="-1" aria-labelledby="exampleModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add sub Category information
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sub-category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label class="text">Category Name<span class="text-danger">*</span></label>
                            <div class="form-group ">
                                <select class="form-control @error('category_id') is-invalid @enderror"
                                    name="category_id">
                                    <option value="">Select Category </option>
                                    @foreach ($categories as $item)
                                        <option value="{{$item->id}}"
                                            @if (old('category_id') == $item->id) selected @endif>{{ $item->name }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-2">
                            <label for="recipient-name" class="col-form-label">Sub Category
                                Name</label>
                            <input name="name" type="text" class="form-control" id="recipient-name" spellcheck="false"
                                data-ms-editor="true">
                            <editor-squiggler>
                                <style>
                                    @media print {
                                        .ms-editor-squiggles-container {
                                            display: none !important;
                                        }
                                    }

                                    .ms-editor-squiggles-container {
                                        all: initial;
                                    }

                                </style>
                                <div class="ms-editor-squiggles-container"></div>
                            </editor-squiggler>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Description</label>
                            <textarea name="description" class="form-control" id="message-text" spellcheck="false"
                                data-ms-editor="true" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label> Image <span class="text-danger">*</span></label>
                            <input type="file" name="photo" class="form-control  @error('photo') is-invalid @enderror"
                                value="{{ old('photo') }}">
                            @error('photo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
