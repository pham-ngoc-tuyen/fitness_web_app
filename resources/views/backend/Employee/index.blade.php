@include('backend.dashboard.component.breadcumb', ['title' => $config['seo']['index']['title']])
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{$config['seo']['index']['table'];}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="filter uk-flex uk-flex-space-between">
                    <div class="uk-flex uk-flex-middle">
                        <div class="perpage">
                            <div class="uk-flex uk-flex-middle">
                                <select name="perpage" class="form-control input sm perpage filter mr10">
                                    @for($i = 20; $i <= 200; $i+=20)
                                    <option value="{{$i}}">{{$i}} bảng ghi</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="action">
                        <div  class="uk-search uk-flex uk-flex-middle mr10">
                            <div  class="input-group">
                                <input 
                                        type="text"
                                        name="keyword"
                                        value=""
                                        placeholder="Nhập từ khóa để tìm kiếm"
                                        class="form-control">
                                <span  class="input-group-btn">
                                    <button style="margin-right: 10px"
                                            type="submit"
                                            name="search"
                                            value="search"
                                            class="btn btn-primary mb0 btn-sm"> <i class="fa fa-search"></i> Tìm kiếm
                                    </button>  
                                </span>      
                            </div>
                            <a href="{{route('employee.create')}}" class="btn btn-danger"><i class="fa fa-plus"></i> Thêm mới</a>
                        </div>
                    </div>
                </div>
                <div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" name="" id="checkAll" class="input-checkbox">
                                </th>
                                <th style="width: 90px">Avatar</th>
                                <th>Họ</th>
                                <th>Tên</th>
                                <th>SDT</th>
                                <th>Ngày Sinh</th>
                                <th>Giới tính</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th class="text-center">Tình trạng</th>
                                <th class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($employees) && is_object($employees))
                                @foreach ($employees as $employee)
                                <tr>
                                    <td><input type="checkbox" name="" class="input-checkbox checkBoxItem"></td>
                                    <td><img class="avatar avatar-cover" src="https://top10dienbien.com/wp-content/uploads/2022/10/avatar-cute-9.jpg" alt=""></td>
                                    <td>
                                        {{$employee->first_name}}
                                    </td>
                                    <td>
                                        {{$employee->last_name}}
                                    </td>
                                    <td>
                                        {{$employee->phone_number}}
                                    </td>
                                    <td>
                                        {{$employee->day_of_birth}}
                                    </td>
                                    <td>
                                        @if($employee->gender == 0)
                                            Nam
                                        @elseif($employee->gender == 1)
                                            Nữ
                                        @else
                                            Khác
                                        @endif
                                    </td>
                                    <td> 
                                        {{$employee->email}}
                                    </td>
                                    <td>
                                        {{$employee->address}}
                                    </td>
                                    <td class="text-center"><input type="checkbox" class="js-switch" checked></td>
                                    <td class="text-center" style="width: 100px">
                                        <a href="{{route('employee.edit', $employee->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                        {{ $employees->links('pagination::bootstrap-4') }}
                </div>
            </div>
            
        </div>
    </div>
</div>