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
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" id="checkAll" class="input-checkbox">
                        </th>
                        <th>Avatar</th>
                        <th>Thông Tin</th>
                        <th>Địa Chỉ</th>
                        <th>Tình Trạng</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name="" class="input-checkbox checkBoxItem"></td>
                        <td><img class="avatar" src="https://top10dienbien.com/wp-content/uploads/2022/10/avatar-cute-9.jpg" alt=""></img></td>
                        <td>
                            <div class="info-item firstName">Họ: Phạm Ngọc</div>
                            <div class="info-item lastName">Tên: Tuyển</div>
                            <div class="info-item phone">SDT: 0363047409</div>
                            <div class="info-item birthDay">Ngày sinh: 27-03-2002</div>
                            <div class="info-item email">Email: pnt22497@gmail.com</div>
                        </td>
                        <td>
                            <div class="address-item firstName">Địa chỉ: thôn Nước Ngọt</div>
                            <div class="address-item lastName">Xã: Cam Lập</div>
                            <div class="address-item phone">Thành phố: Cam Ranh</div>
                            <div class="address-item birthDay">Tỉnh: Khánh Hòa</div>
                        </td>
                        <td class="text-navy"> 
                            <input type="checkbox" class="js-switch" checked />
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>