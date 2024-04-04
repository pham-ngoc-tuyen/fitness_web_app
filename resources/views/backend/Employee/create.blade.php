@include('backend.dashboard.component.breadcumb', ['title' => $config['seo']['create']['title']])

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('employee.store')}}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">
                        <p> - Nhập thông tin chung của người sử dụng</p>
                        <p> - Lưu ý: Những trường có đánh dấu <span class="text-danger">(*)</span> là không được để trống. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Họ
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        name="first_name" 
                                        class="form-control" 
                                        value="{{old('first_name')}}" 
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Tên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        name="last_name" 
                                        class="form-control" 
                                        value="{{old('last_name')}}" 
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Mật Khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="password" 
                                        name="password" 
                                        class="form-control" 
                                        value="" 
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Nhập lại mật khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input 
                                        type="password" 
                                        name="re_password" 
                                        class="form-control" 
                                        value="" 
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                                <div class="col-lg-5">
                                    <div class="form-row">
                                        <label for="" class="control-label text-Left">Email
                                            <span class="text-danger">(*)</span>
                                        </label>
                                        <input 
                                            type="email" 
                                            name="email" 
                                            class="form-control" 
                                            value="{{old('email')}}" 
                                            placeholder=""
                                            autocomplete="off"
                                        >
                                    </div>
                                </div>
                            <div class="col-lg-5">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Ngày sinh
                                    </label>
                                    <input 
                                        type="date" 
                                        name="day_of_birth" 
                                        class="form-control" 
                                        value="" 
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-row">
                                    <label class="control-label text-Left">Giới tính</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">Nam</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Nữ</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="unknown" value="unknown">
                                        <label class="form-check-label" for="unknown">Khác</label>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Ảnh đại điện
                                    </label>
                                    <input 
                                        type="text" 
                                        name="avatar" 
                                        class="form-control" 
                                        value="{{old('avatar')}}" 
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin liên hệ</div>
                    <div class="panel-description">Nhập thông tin liên hệ của người sử dụng</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Thành phố
                                    </label>
                                   <Select name="provide_id" class="form-control setupSelect2 province location" data-target="districts">
                                        <option value="0">[Chọn thành phố]</option>
                                        @if (@isset($provinces))
                                            @foreach ($provinces as $province)
                                            <option value="{{$province->code}}">
                                                {{$province->name}}</option>
                                            @endforeach
                                        @endif
                                   </Select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Quận/Huyện
                                    </label>
                                    <Select name="district_id" class="form-control districts setupSelect2 location" data-target="wards">
                                        <option value="0">[Chọn Quận/Huyện]</option>
                                   </Select>
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Phường/Xã
                                    </label>
                                    <Select name="ward_id" class="form-control setupSelect2 wards">
                                        <option value="0">[Chọn Phường/Xã]</option>
                                   </Select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-Left">Địa chỉ
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input type="text" 
                                            name="address"
                                            value="{{old('address')}}"
                                            class="form-control"
                                            placeholder=""
                                            autocomplete="off" 
                                            >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="form-row d-inline-block">
                                    <div style="display: flex; justify-content: center; align-items: flex-start;">
                                        <label for="" class="control-label text-Left" style="margin-bottom: 5px;">Số điện thoại
                                            <span class="text-danger">(*)</span>
                                        </label>
                                    </div>
                                    <input type="text" 
                                            name="phone_number"
                                            value="{{old('phone_number')}}"
                                            class="form-control"
                                            placeholder=""
                                            autocomplete="off" 
                                            style="width: 50%; display: inline-block;"
                                            >
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send"> <i class="fa fa-save mr1"> Lưu </i> </button>
        </div>
    </div>
</form>
