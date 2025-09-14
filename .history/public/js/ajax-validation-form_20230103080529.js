$(function () {
    var $form = $("#form");
    if ($form.length) {
        $form.validate({
            rules: {
                fullname: {
                    required: true,
                    min: 5,
                }
            },
            messages: {
                fullname: {
                    required: 'Không được để trống fullname',
                    min: "Độ dài nhỏ nhất 5",
                },
            }
        })
    }
})