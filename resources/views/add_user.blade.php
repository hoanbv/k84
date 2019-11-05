@extends('master.master')

@section('title','Thêm thành viên')

@section('content')
<article class="content dashboard-page">
    <div class="col-md-12">
        <div class="card card-block sameheight-item" style="height: 720px;">
            <div class="title-block">
                <h3 class="title"> THÊM THÀNH VIÊN </h3>
                <hr>
            </div>
            
            
            <form method="POST">@csrf
                <div class="form-group">
                    <label class="control-label">Họ Và Tên</label>
                    <input name="full" value="{{old('full')}}"type="text" class="form-control underlined"> 
                    {{showError($errors,'full')}}
                </div>
                <div class="form-group">
                    <label class="control-label">Số điện thoại</label>
                    <input name="phone" value="{{old('phone')}}"type="text" class="form-control underlined"> 
                    {{showError($errors,'phone')}}
                </div>
                <div class="form-group">
                    <label class="control-label">Địa chỉ</label>
                    <input name="address" value="{{old('address')}}"type="text" class="form-control underlined">
                    {{showError($errors,'address')}}
                </div>
                <div class="form-group">
                    <label class="control-label">Số CMT</label>
                    <input name="id_number" value="{{old('id_number')}}"type="text" class="form-control underlined">
                    {{showError($errors,'id_number')}}
                </div>
                <div align='right'>
                    <button type="submit" class="btn btn-success">Thêm</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                </div>
            </form>
        </div>
    </div>

</article>
@endsection
