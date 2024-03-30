<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{config('apps.employee.title')}}</h2>
        <ol class="breadcrumb" style="margin-bottom:10px;">
            <li>
                <a href="{{route('dashboard.index') }}">dashboard</a>
            </li>
            <li class="active"><strong>{{config('apps.employee.title')}}</strong></li>
        </ol>
    </div>
</div>
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{config('apps.employee.tableHeading')}}</h5>
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
                <div class="filter">
                    <div class="perpage">
                        <div class="uk-flex uk-flex-middle uk-flex-space-between  ">
                            <select name="perpage" class="form-control input sm perpage filter mr10">
                                @for($i = 20; $i <= 200; $i++)
                                <option value="{{$i}}">{{$i}} bảng ghi</option>
                                @endfor
                            </select>
                            <div class="action">
                                    <div class="uk-search uk-flex uk-flex-middle mr10 ">
                                        <div class="input-group">
                                            <input type="text"
                                                    name="keyword"
                                                    value=""
                                                    placeholder="Nhập từ khóa để tìm tiếm"
                                                    class="form-control">
                                            <span class="input-group-btn">
                                                <button type="submit"
                                                        name="search"
                                                        value="search"
                                                        class="btn btn-primary mb0 btn-sm"> Tìm kiếm
                                                </button>  
                                            </span>      
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th class="text-center">Tình trạng</th>
                        <th class="text-center">Thao tác</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="" class="input-checkbox checkBoxItem"></td>
                        <td><img class="avatar avatar-cover" src="https://top10dienbien.com/wp-content/uploads/2022/10/avatar-cute-9.jpg" alt=""></img></td>

                        <td>
                            Phạm Ngọc
                        </td>
                        <td>
                            Tuyển
                        </td>
                        <td>
                            0363047409
                        </td>
                        <td>
                            27-03-2002
                        </td>
                        <td>
                            pnt22497@gmail.com
                        </td>
                        <td>
                            thôn Nước Ngọt, xã Cam Lập, Cam Ranh, Khánh Hòa
                        </td>
                        <td class="text-center"> 
                            <input type="checkbox" class="js-switch" checked />
                        </td>
                        <td class="text-center"> 
                            <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function(){
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    })

</script>