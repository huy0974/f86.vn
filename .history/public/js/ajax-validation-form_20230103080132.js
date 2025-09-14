$(function () {
    var $form = $("#form");
    if ($form.length) {
        $form.validate({
            rules: {
                fullname: {
                    required: true,
                }
            },
            messages: {
                fullname: {
                    required: 'Không được để trống fullname',
                },
            }
        })
    }
})