"use strict";

var KTUploadVehicle = function () {
    var deletes;
    const initUploadVehicle = function(){
        deletes.forEach(element => element.addEventListener("click", handleDelete));
    }
    const initDropzone = () => {
        new Dropzone("#uploadImages", {
            url: `http://localhost:8000/api/vehicle/${$("#id").val()}/picture`, // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: (success) => {
                toastr.success(JSON.parse(success.xhr.response).message, "Thành công", {
                    timeOut: 1000,
                });
            },
            accept: (file, done)=>{
                const mimeAccept = ["image/png", "image/jpeg", "image/gif"];
                if(mimeAccept.indexOf(file.type) === -1){
                    done("Hình ảnh không đúng định dạng");
                }else{
                    done();
                }
            },
           
        });
    }
    const handleDelete = function (e){
        const id = e.target.dataset.id;
        Swal.fire({
            text: "Bạn có chắc chắn thực hiện hành động này?",
            icon: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Yes, cancel it!",
            cancelButtonText: "No, return",
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light"
            }
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    method: "DELETE",
                    url: `/vehicle/picture/${id}`,
                    success: (success) => {
                        toastr.success(success.message, "Thành công", {
                            timeOut: 1000,
                            onHidden: function () {
                                location.reload();
                            }
                        });
                    },
                    error: (error) => {
                        toastr.error(error.responseJSON.message, "Thất bại");
                    }
                })	
            } else if (result.dismiss === 'cancel') {
                Swal.fire({
                    text: "Hình ảnh của bạn vẫn chưa bị xoá",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    }
                });
            }
        });
    }

    return {
        init: function () {
            deletes = document.querySelectorAll(".vehicle__image--icon");
            initUploadVehicle();
            initDropzone();
        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTUploadVehicle.init();
});