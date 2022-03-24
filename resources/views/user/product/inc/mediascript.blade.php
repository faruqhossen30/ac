<script>
    var productSliderImage = $('#productSliderImage');
    var multipleMediaGallery = $('#multipleMediaGallery');

    $exampleModal = $('#exampleModal');

    $(document).on('click', '#productSliderImage', function() {
        $exampleModal.modal('show');
        getMultipleGallery(multipleMediaGallery)
    });

    // Get Media
    function getMultipleGallery(multipleMediaGallery) {
        multipleMediaGallery.empty();
        $.ajax({
            url: '{{ route('getallmedia') }}',
            method: 'GET',
            // dataType: "JSON",
            success(data) {
                if (data) {
                    multipleMediaGallery.append(data);
                    // console.log(data)
                }
            },
            error(err) {
                console.log(err);
            }
        });
    };
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var uploadmediaclass = $('.uploadmediaclass');
        var uploadmediapane = $('#uploadmediapane');
        var uploadmediabutton = $('#uploadmediabutton');


        $(document).on('click', '.uploadmediaclass', function() {
            uploadmediaclass.toggleClass('active');
            uploadmediapane.toggleClass('active');
            multipleMediaGallery.toggleClass('active');
        });

        $(document).on('submit', '#mediaForm', function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            // console.log(formData)
            $.ajax({
                url: '{{ route('storemedia') }}',
                method: 'POST',
                // dataType: "json",
                data: formData,
                processData: false,
                contentType: false,
                success(data) {
                    $('input[name="media"]').val('')
                    uploadmediaclass.toggleClass('active');
                    uploadmediapane.toggleClass('active');
                    multipleMediaGallery.toggleClass('active');
                    getMultipleGallery(multipleMediaGallery)
                },
                error(err) {
                    console.log(err);
                }
            });
        });
    });
</script>
<script>
    var selectImageButton = $('#selectImageButton');
    var productImageArea = $('#productImageArea');

    $(document).on('click', '#selectImageButton', function() {

        var selectimage = $('input[name="selectimage"]:checked');
        var url = [];
        $.each(selectimage, function() {
            url.push($(this).data('urlfull'));
        });

        $.each(url, function(key, value) {
            console.log(value);
            productImageArea.append(`<div class="selectedProductImageMedia p-1" style="text-align:center">
                                    <img src="${value}" alt="" class="img-responsive p-2 img-thumbnail" style="width:150px;height:150px" > <br>
                                    <button  type="button" class="selectedProductImageMediaCloseButton btn btn-danger btn-sm mt-1"> Close</button>
                                    <input type="hidden" name="photos[]" value="${value}">
                                </div>`);
            $exampleModal.modal('hide');
        });



    }); // Click event end

    $(document).on('click', '.selectedProductImageMediaCloseButton', function() {
        $(this).parent().remove()
    });
</script>
