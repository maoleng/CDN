<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>





<div>
    <input type="checkbox" id="i-switch"/><label id="label-switch" for="i-switch">Toggle</label>
</div>
<br>
<div class="input-group mb-3" style="height: 50px;width: 500px">
    <input id="i-short_link" style="display: none" type="text" class="form-control toggle" placeholder="Nhập link cần rút gọn">
</div>
<br>
<div id="d-upload">
    <input class="toggle drop-here" type="file" title="" >
    <div class="toggle text text-drop">Kéo thả vào đây</div>
    <div class="toggle text text-upload">Đang tải lên</div>
    <svg class="toggle progress-wrapper" width="300" height="300">
        <circle class="progress" r="115" cx="150" cy="150"></circle>
    </svg>
    <svg class="toggle check-wrapper" width="130" height="130">
        <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
    </svg>
    <div class="toggle shadow"></div>
</div>


<!--- ## DRIBBBLE + TWITTER ############# -->
<div class="socials">
    <a class="dribbble" href="https://dribbble.com/shots/8571590-Upload-Animation" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" fill="black" d="M16 0C7.16703 0 0 7.16703 0 16C0 24.833 7.16703 32 16 32C24.8156 32 32 24.833 32 16C32 7.16703 24.8156 0 16 0ZM26.5683 7.37527C28.4772 9.70065 29.6226 12.6681 29.6573 15.8785C29.2061 15.7918 24.6941 14.872 20.1475 15.4447C20.0434 15.2191 19.9566 14.9761 19.8525 14.7332C19.5748 14.0738 19.2625 13.397 18.9501 12.7549C23.9826 10.7072 26.2733 7.75705 26.5683 7.37527ZM16 2.36009C19.4707 2.36009 22.6464 3.66161 25.0586 5.7961C24.8156 6.14317 22.7505 8.90239 17.8915 10.7245C15.6529 6.61171 13.1714 3.24512 12.7896 2.72451C13.8134 2.48156 14.8894 2.36009 16 2.36009ZM10.1866 3.64425C10.551 4.13015 12.9805 7.5141 15.2538 11.5401C8.86768 13.2408 3.22777 13.2061 2.62039 13.2061C3.50542 8.9718 6.36876 5.44902 10.1866 3.64425ZM2.32538 16.0174C2.32538 15.8785 2.32538 15.7397 2.32538 15.6009C2.9154 15.6182 9.54447 15.705 16.3644 13.6573C16.7636 14.4208 17.128 15.2017 17.4751 15.9826C17.3015 16.0347 17.1106 16.0868 16.9371 16.1388C9.89154 18.4121 6.14317 24.6247 5.8308 25.1453C3.6616 22.7332 2.32538 19.5228 2.32538 16.0174ZM16 29.6746C12.8416 29.6746 9.92625 28.5987 7.61822 26.7939C7.86117 26.2907 10.6377 20.9458 18.3427 18.256C18.3774 18.2386 18.3948 18.2386 18.4295 18.2213C20.3557 23.2017 21.1367 27.3839 21.3449 28.5813C19.6963 29.2928 17.8915 29.6746 16 29.6746ZM23.6182 27.3319C23.4794 26.4989 22.7505 22.5076 20.9631 17.5965C25.2495 16.9197 28.9978 18.0304 29.4664 18.1866C28.8764 21.987 26.6898 25.2668 23.6182 27.3319Z" fill="#EA4C89"></path></svg></a>
    <a class="twitter" href="https://twitter.com/MilanRaring" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 72 72"><path fill="black" d="M67.812 16.141a26.246 26.246 0 0 1-7.519 2.06 13.134 13.134 0 0 0 5.756-7.244 26.127 26.127 0 0 1-8.313 3.176A13.075 13.075 0 0 0 48.182 10c-7.229 0-13.092 5.861-13.092 13.093 0 1.026.118 2.021.338 2.981-10.885-.548-20.528-5.757-26.987-13.679a13.048 13.048 0 0 0-1.771 6.581c0 4.542 2.312 8.551 5.824 10.898a13.048 13.048 0 0 1-5.93-1.638c-.002.055-.002.11-.002.162 0 6.345 4.513 11.638 10.504 12.84a13.177 13.177 0 0 1-3.449.457c-.846 0-1.667-.078-2.465-.231 1.667 5.2 6.499 8.986 12.23 9.09a26.276 26.276 0 0 1-16.26 5.606A26.21 26.21 0 0 1 4 55.976a37.036 37.036 0 0 0 20.067 5.882c24.083 0 37.251-19.949 37.251-37.249 0-.566-.014-1.134-.039-1.694a26.597 26.597 0 0 0 6.533-6.774z"></path></svg></a>
</div>
<div class="links">
    <a class="twitter" href="{{ route('link.index') }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 72 72"><path fill="black" d="M67.812 16.141a26.246 26.246 0 0 1-7.519 2.06 13.134 13.134 0 0 0 5.756-7.244 26.127 26.127 0 0 1-8.313 3.176A13.075 13.075 0 0 0 48.182 10c-7.229 0-13.092 5.861-13.092 13.093 0 1.026.118 2.021.338 2.981-10.885-.548-20.528-5.757-26.987-13.679a13.048 13.048 0 0 0-1.771 6.581c0 4.542 2.312 8.551 5.824 10.898a13.048 13.048 0 0 1-5.93-1.638c-.002.055-.002.11-.002.162 0 6.345 4.513 11.638 10.504 12.84a13.177 13.177 0 0 1-3.449.457c-.846 0-1.667-.078-2.465-.231 1.667 5.2 6.499 8.986 12.23 9.09a26.276 26.276 0 0 1-16.26 5.606A26.21 26.21 0 0 1 4 55.976a37.036 37.036 0 0 0 20.067 5.882c24.083 0 37.251-19.949 37.251-37.249 0-.566-.014-1.134-.039-1.694a26.597 26.597 0 0 0 6.533-6.774z"></path></svg></a>
</div>

<div class="modal fade" id="modal-link_config" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tùy chỉnh liên kết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="pt-2">
                    <b>Đường dẫn gốc</b>
                    <div class="input-group mb-3">
                        <input type="text" value="https://www.google.com" class="form-control" disabled>
                    </div>
                </div>

                <div class="pt-2">
                    <b>Đường dẫn rút gọn</b>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">https://ktrx.cc/</span>
                        </div>
                        <input type="text" class="form-control" placeholder="concacloinhoi">
                    </div>
                </div>

                <div class="pt-2">
                    <b>Hết hạn sau</b>
                    <div class="custom-control custom-radio">
                        <input checked type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">1 tháng</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">6 tháng</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">1 năm</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Vĩnh viễn</label>
                    </div>
                </div>

                <div class="pt-2">
                    <b>Link điều hướng trực tiếp tới nội dung</b>
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" checked class="custom-control-input" id="redirect-link">
                        <label class="custom-control-label" for="redirect-link">Thông qua 1 trang</label>
                    </div>
                </div>

                <div class="pt-2">
                    <b class="e-password">Mật khẩu</b>
                    <div class="input-group mb-3 e-password">
                        <input  type="text" class="form-control" placeholder="Mật khẩu nếu có">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#modal-link_config').modal('show')

        $('#d-upload').css('--background', '#fff')
        $('#i-switch').on('click', function() {
            $('.toggle').toggle()
            let upload = $('#d-upload')
            let cur_color = upload.css('--background')

            cur_color === '#fff' ?
                upload.css('--background', '#e8ebf3') :
                upload.css('--background', '#fff')
        })
        $('#redirect-link').on('click', function() {
            $('.e-password').toggle()
        })
        $('#i-short_link').keypress(function (e) {
            if (e.which === 13) {
                $('#modal-link_config').modal('show')
            }
        })

        const fileUpload = document.querySelector("#d-upload");
        fileUpload.addEventListener("dragover", function() {
            this.classList.add("drag");
            this.classList.remove("drop", "done");
        });
        fileUpload.addEventListener("dragleave", function() {
            this.classList.remove("drag");
        });
        fileUpload.addEventListener("drop", start, false);
        fileUpload.addEventListener("change", start, false);
        function start() {
            this.classList.remove("drag");
            this.classList.add("drop");
            setTimeout(function () {
                fileUpload.classList.add("done")
                $('#modal-link_config').modal('show')
            }, 3000)
        }
    })


</script>
