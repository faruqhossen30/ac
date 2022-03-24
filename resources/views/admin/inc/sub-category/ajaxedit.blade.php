<form action="{{route('sub-category.update', $subcategory->id)}}" method="POST" enctype="multipart/form-data" id="editForm">
    @csrf
    @method('PUT')
    <div class="mb-2">
        <label for="recipient-name" class="col-form-label"> Category
            Name</label>
        <select class="form-control @error('name') is-invalid @enderror" name="category_id">
            <option value="">Select your category </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if ($category->id == $subcategory->category_id) selected @endif >
                    {{ $category->name }}
                </option>
            @endforeach

        </select>
    </div>
    <div class="mb-2">
        <label for="recipient-name" class="col-form-label">Sub Category
            Name</label>
        <input name="name" type="text" class="form-control" id="name" spellcheck="false" data-ms-editor="true"
            value="{{$subcategory->name}}">
    </div>
    <div class="mb-3">
        <label for="description" class="col-form-label">Description</label>
        <textarea name="description" class="form-control"  id="description" spellcheck="false" data-ms-editor="true"
            rows="4">{{$subcategory->description}}</textarea>
    </div>
    <div class="form-group">

        <div id="edtimodalimage">
            <div class="col-md-12">
                <label class="col-md-4 col-form-label" for="example-fileinput">Default file input</label>
                <input type="file" name="photo" class="form-control" id="example-fileinput">
                <img class="img-thumbnail" style="width: 150px; height:100px; padding:5px" src="{{asset('/storage/subcategory/'.$subcategory->photo)}}" alt="sdfsdf">
            </div>
        </div>
    </div>

    <div class=" modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="updateButton" type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
