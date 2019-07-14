console.log('custom.js!');

$(document).ready(function () {

    var loc_arr = window.location.pathname.split('/');
    var category = $('select[name="category_id"]');
    var sub_category = $('select[name="sub_category_id"]');

    var city = $('select[name="city_id"]');
    var area = $('select[name="area_id"]');

    category.on('change', function category_change() {

        console.log('category_change');
        $.ajax({
            type: "GET",
            url: url + '/admin/ads/create/getSubCategory/' + $(this).val(),
            data: '',
            success: function (data, status) {

                $(sub_category).prop("disabled", false);

                $(sub_category).html('');

                $(sub_category).append('<option value="0">Select</option>')

                for (var key in data) {
                    var newOption = new Option(data[key]['name'], data[key]['id'], false, false);
                    $(sub_category).append(newOption);
                }

            },
            error: function () {
                alert('Failed to get Categories');
            }
        });

    })

    sub_category.on('change', function () {

        $.ajax({
            type: "GET",
            url: url + '/admin/ads/create/getAttr/' + $(this).val(),
            data: '',
            success: function (data, status) {

                $('.custom-parameters > div').remove('');
                console.log(data);

                for (var key in data) {

                    $('.custom-parameters').append('<div class="form-group row" row-id="' + key + '"> <div class="col-xs-3" style="margin-bottom:0;"> <input readonly type="text" class="form-control" name="attrs[' + key + '][key]" value="' + data[key].name + '" id="key"/> </div><div class="col-xs-3" style="margin-bottom:0;"> <input type="text" class="form-control" name="attrs[' + key + '][value]" value="" id="value"/> </div></div>')
                }

            },
            error: function () {
                alert('Failed to get Attributes');
            }
        });

    })

    city.on('change', function () {

        $.ajax({
            type: "GET",
            url: url + '/admin/ads/create/getArea/' + $(this).val(),
            data: '',
            success: function (data, status) {

                $(area).prop("disabled", false);

                $(area).html('');

                for (var key in data) {
                    var newOption = new Option(data[key]['name'], data[key]['id'], false, false);
                    $(area).append(newOption);
                }

            },
            error: function () {
                alert('Failed to get Areas');
            }
        });

    })


    if (loc_arr[loc_arr.length - 1] == 'create') {

        $(sub_category).prop("disabled", true);
        $(area).prop("disabled", true);

    } else if (loc_arr[loc_arr.length - 1] == 'edit') {

        $.ajax({
            type: "GET",
            url: url + '/admin/ads/create/getSubCategory/' + category.val(),
            data: '',
            success: function (data, status) {

                $(sub_category).append('<option value="0">Select</option>')

                for (var key in data) {
                    var selected = data[key]['id'] == $('#sub_category_id_value').val() ? true : false;
                    var newOption = new Option(data[key]['name'], data[key]['id'], selected, selected);
                    $(sub_category).append(newOption);
                }

                // $(sub_category).val($('#sub_category_id_value').val());
                // $(sub_category).trigger('change');

            },
            error: function () {
                alert('Failed to get Categories');
            }
        });

        $.ajax({
            type: "GET",
            url: url + '/admin/ads/create/getArea/' + city.val(),
            data: '',
            success: function (data, status) {

                $(area).append('<option value="0">Select</option>')

                for (var key in data) {
                    var selected = data[key]['id'] == $('#area_id_value').val() ? true : false;
                    var newOption = new Option(data[key]['name'], data[key]['id'], selected, selected);
                    $(area).append(newOption);
                }

                // $(sub_category).val($('#sub_category_id_value').val());
                // $(sub_category).trigger('change');

            },
            error: function () {
                alert('Failed to get Areas');
            }
        });
    }

});
