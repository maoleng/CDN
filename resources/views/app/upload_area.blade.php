<div>
    <input type="checkbox" id="i-switch"/><label id="label-switch" for="i-switch">Toggle</label>
</div>
<br>
<div class="input-group mb-3" style="height: 50px;width: 500px">
    <input id="i-link_to_compact" style="display: none" type="text" class="form-control toggle" placeholder="Nhập link cần rút gọn">
</div>
<br>
<div id="d-upload">
    <input id="i-file" name="file" class="toggle drop-here" type="file" title="" >
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

@if (authed() !== null)
    <div class="links">
        <a class="twitter" href="{{ route('link.index') }}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 72 72"><path fill="black" d="M67.812 16.141a26.246 26.246 0 0 1-7.519 2.06 13.134 13.134 0 0 0 5.756-7.244 26.127 26.127 0 0 1-8.313 3.176A13.075 13.075 0 0 0 48.182 10c-7.229 0-13.092 5.861-13.092 13.093 0 1.026.118 2.021.338 2.981-10.885-.548-20.528-5.757-26.987-13.679a13.048 13.048 0 0 0-1.771 6.581c0 4.542 2.312 8.551 5.824 10.898a13.048 13.048 0 0 1-5.93-1.638c-.002.055-.002.11-.002.162 0 6.345 4.513 11.638 10.504 12.84a13.177 13.177 0 0 1-3.449.457c-.846 0-1.667-.078-2.465-.231 1.667 5.2 6.499 8.986 12.23 9.09a26.276 26.276 0 0 1-16.26 5.606A26.21 26.21 0 0 1 4 55.976a37.036 37.036 0 0 0 20.067 5.882c24.083 0 37.251-19.949 37.251-37.249 0-.566-.014-1.134-.039-1.694a26.597 26.597 0 0 0 6.533-6.774z"></path></svg></a>
    </div>
@endif
