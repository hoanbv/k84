@extends('master.master')

@section('title','USER')

@section('content')
<article class="content dashboard-page">

    <section class="section">
        <div class="row sameheight-container">
            <div class="col-xl-12">
                {{-- {{$bien_mang['0']['name'].'->'.$bien_mang['0']['email']}}
                {{$bien_mang['1']['name'].'->'.$bien_mang['1']['email']}}
                {!!'<pre>'!!}
                    {{ print_r($bien_mang)['0']}}
                @foreach ($bien_mang as $key => $value)
                        {{$value['id']}}-->{{$value['name']}}-->{{$value['email']}}<br>
                        
                @endforeach --}}
                     
                <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                    <form action="" method="get">
                        <div class="card-header bordered">
                            <div class="header-block">
                                <h3 class="title"> Danh sách thành viên </h3>
                                <a href="add" class="btn btn-primary btn-sm"> Thêm </a>
                            </div>
                            <div class="header-block pull-right">
                                <label class="search">
                                <input class="search-input" name="search" placeholder="search..." value="{{request()->search}}">
                                    <i class="fa fa-search search-icon"></i>
                                </label>
                                <div class="pagination">
                                    <button type="submit" class="btn btn-primary" >Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="item-list striped">
                        <li class="item item-list-header">
                            <div class="item-row">

                                <div class="item-col item-col-header ">

                                    <span>Họ Tên</span>

                                </div>
                                <div class="item-col item-col-header">

                                    <span>Số điện thoại</span>

                                </div>
                                <div class="item-col item-col-header ">

                                    <span>Địa chỉ</span>

                                </div>
                                <div class="item-col item-col-header ">

                                    <span>Số CMT</span>

                                </div>
                                <div class="item-col item-col-header">

                                    <span>Xoá</span>

                                </div>
                            </div>
                        </li>
                        
                        <li class="item">
                            @foreach ($users as $item)
                                <div class="item-row">
                                    <div class="item-col">
                                    <a href="edit/{{$item->id}}">
                                            {{$item->full}}
                                        </a>
                                    </div>
                                    <div class="item-col">
                                            {{$item->phone}}
                                    </div>
                                    <div class="item-col">
                                    <span title="Dũng Tiến-Thường tín-Hà Nội">{{$item->address}}</span>
                                    </div>
                                    <div class="item-col">
                                            {{$item->id_number}}
                                    </div>
                                    <div class="item-col ">
                                    <a href="edit/{{$item -> id}}" class="btn btn-danger-outline">Xoá</a>
                                    </div>
                                </div>
                            @endforeach
                           
                        </li>
                        
                        
                    </ul>

                </div>

            </div>

        </div>

        <div align='right'>
            <nav aria-label="Page navigation example">
                {{-- {{$users->links()}} --}}
                {{$users->appends(['search' => request()-> search])->links()}}
                {{-- <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">
                            <</a> </li> <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">></a></li>
                </ul> --}}
            </nav>
        </div>

    </section>

</article>
@endsection

@section('script')
{{-- đfgfgfdghjhkhkjhgjf --}}
@parent
@endsection
