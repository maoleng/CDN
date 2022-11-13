<script>
    $(document).ready(function() {
        pageStart()

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
                @if (authed() !== null)
                $('#modal-link_config').modal('show')
                @else
                $('#btn-save').click()
                @endif
            }, 3000)
        }

        $('#btn-save').on('click',function() {
            let file = document.getElementById('i-file').files[0]
            let link_to_compact = $('#i-link_to_compact').val()
            if ($('#i-switch').prop('checked') === true) {
                file = null
            } else {
                link_to_compact = null
            }

            let compacted_link = $('#i-compacted_link').val()
            let is_redirect_directly = $('#i-is_redirect_directly').prop('checked')
            let password = $('#i-password').val()
            let expired_at = $('#i-expired_at').val()
            let device_uuid = new DeviceUUID().get()

            const formData = new FormData()
            formData.append('_token', '{{ csrf_token() }}')
            formData.append('file', file)
            formData.append('link_to_compact', link_to_compact)
            formData.append('compacted_link', compacted_link)
            formData.append('expired_at', expired_at)
            formData.append('is_redirect_directly', is_redirect_directly)
            formData.append('password', password)
            formData.append('device_uuid', device_uuid)

            $.ajax({
                type: 'POST',
                url: '{{ route('link.store') }}',
                processData: false,
                contentType: false,
                data: formData,
                success:function(data) {
                    $('#modal-link_config').modal('hide')
                    let title = data.status === true ? 'Thành công' : 'Thất bại'
                    $('#modal-notification-title').text(title)
                    $('#modal-notification-body').text(data.message)
                    $('#modal-notification').modal('toggle')
                },
                error:function (data) {
                    alert(data)
                }
            })
        })

        $('#modal-notification-btn_copy').on('click', function () {
            let message = $('#modal-notification-body').text()
            navigator.clipboard.writeText(message)
        })

    })

    function pageStart()
    {
        $('#d-upload').css('--background', '#fff')
        $('#i-switch').on('click', function() {
            $('.toggle').toggle()
            let upload = $('#d-upload')
            let cur_color = upload.css('--background')

            cur_color === '#fff' ?
                upload.css('--background', '#e8ebf3') :
                upload.css('--background', '#fff')
        })
        $('#i-is_redirect_directly').on('click', function() {
            $('.e-password').toggle()
        })
        $('#i-link_to_compact').keypress(function (e) {
            if (e.which === 13) {
                @if (authed() !== null)
                $('#modal-link_config').modal('show')
                @else
                $('#btn-save').click()
                @endif
            }
        })
    }
</script>
