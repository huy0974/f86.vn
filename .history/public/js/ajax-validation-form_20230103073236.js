$("#form").validate({
    rules: {
        fullname: 'required',
    },
    messages: {
        fullname: "Không được để trống họ và tên",
    }
}) 