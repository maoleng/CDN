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
                    <b>Đường dẫn rút gọn</b>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">https://ktrx.cc/</span>
                        </div>
                        <input id="i-compacted_link" name="compacted_link" type="text" class="form-control" placeholder="Để trống để tạo ngẫu nhiên">
                    </div>
                </div>

                <div class="pt-2">
                    <b>Hết hạn sau</b>
                    <div class="input-group mb-3">
                        <input id="i-expired_at" name="expired_at" type="number" value="0" class="form-control" placeholder="Nhập vào ngày tồn tại, để 0 nếu muốn tồn tại vĩnh viễn">
                        <div class="input-group-append">
                            <span class="input-group-text">ngày</span>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <b>Link điều hướng trực tiếp tới nội dung</b>
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" name="is_redirect_directly" class="custom-control-input" id="i-is_redirect_directly">
                        <label class="custom-control-label" for="i-is_redirect_directly">Thông qua 1 trang</label>
                    </div>
                </div>

                <div class="pt-2">
                    <b class="e-password" style="display: none">Mật khẩu</b>
                    <div class="input-group mb-3 e-password" style="display: none">
                        <input id="i-password" name="password" type="text" class="form-control" placeholder="Mật khẩu nếu có">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button id="btn-save" type="button" class="btn btn-primary">Lưu</button>
            </div>
        </div>
    </div>
</div>
