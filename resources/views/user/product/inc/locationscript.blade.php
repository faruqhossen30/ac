<script>
    $(document).ready(function() {
        var division_id = $('select[name="division_id"]');
        var district_id = $('select[name="district_id"]');
        var upazila_id = $('select[name="upazila_id"]');

        $(document).on('change', 'select[name="division_id"]', function() {
            let divisionID = $(this).val();
            if (divisionID) {
                $.ajax({
                    url: `/district-from-division/${divisionID}`,
                    method: 'GET',
                    // dataType: "JSON",
                    success(data) {
                        // console.log(data)
                        district_id.empty();
                        upazila_id.empty();
                        data.map(function(district) {
                            district_id.append(
                                `<option value="${district.id}">${district.name}</option>`
                                );
                        });
                    },
                    error(err) {
                        console.log(err);
                    }
                });
            }
        });
        // Upazila
        $(document).on('change', 'select[name="district_id"]', function() {
            let districtID = $(this).val();
            if (districtID) {
                $.ajax({
                    url: `/upazila-from-district/${districtID}`,
                    method: 'GET',
                    // dataType: "JSON",
                    success(data) {
                        if (data) {
                            upazila_id.empty();
                            data.map(function(upazila) {
                                upazila_id.append(
                                    `<option value="${upazila.id}">${upazila.name}</option>`
                                    );
                            });
                        }
                    },
                    error(err) {
                        console.log(err);
                    }
                });
            }
        });

    });
</script>
