@extends('layouts.auth')
@section('content')

<div class="container">
<section class="content-header">
    <h1>
        Quản lý danh mục sản phẩm
    </h1>
</section>

<section class="content">
    <a href="/home">Home</a> > Quản lý danh mục sản phẩm<span></span>
	<div class="box box-primary">
        <div class="box-header"> 
            <div class="col-sm-12">
                 <a class="btn btn-success" href="{{ $addUrl }}">
                        <i class="fa fa-plus"></i> Thêm mới
                 </a>
            </div>
        </div>

         <div class="box-body">
             <form method="GET" action="{{ $listUrl }}">

                 <div class="col-md-12">
                     <div class="form-group col-md-4 ">
                         <label>Tên:</label>
                         {!! Form::text('name', \Request::query('name')) !!}
                     </div>
                     <div class="form-group  col-md-4 ">
                         <label>Nhóm:</label>
                         <?php echo Form::select('type_group', $isGroupOptions, \Request::query('type_group')); ?>
                     </div>
                     <div class="form-group  col-md-4 ">
                         <label>Trạng thái:</label>
                         <?php echo Form::select('status', $statusOptions, \Request::query('status')); ?>
                     </div>
                 </div>

             </form>
         </div>
        @if (!empty($products) && $products->total() > 0)
        <div class="box-body table-responsive-custom">
            <table id="table">
                <tr>
                    <td align="center" style="width: 5%"><strong>STT</strong></td>
                    <td align="center" style="width: 15%"><strong>Tên</strong></td>
                    <td align="center" style="width: 10%"><strong>Ảnh</strong></td>
                    <td align="center" style="width: 15%"><strong>Nhóm</strong></td>
                    <td align="center" style="width: 15%"><strong>Nhà cung cấp</strong></td>
                    <td align="center" style="width: 15%"><strong>Mã</strong></td>
                    <td align="center" style="width: 10%"><strong>Số tiền</strong></td>
                    <td align="center" style="width: 10%"><strong>Trạng thái</strong></td>
                    <td align="left" style="width: 5%"></td>
                </tr>

                @foreach ($products as $product)
                    <tr id="todo_{{$product->id}}">
                        <td align="center" style="width: 5%">{{$product->id}}</td>
                        <td align="center" style="width: 15%">{{$product->str_ten}}</td>
                        <td align="center" style="width: 10%">
                            <img src='{{ asset('/static/img/'.$product->image) }}' style="width:70px; height:70px ">
                        </td>
                        <td align="center" style="width: 15%">{{$isGroupOptions[$product->type_group]}}
                        <td align="center" style="width: 15%">{{$customerOptions[$product->type_customer]}}
                        <td align="center" style="width: 15%">{{$product->type_code}}</td>
                        <td align="center" style="width: 10%">{{$product->type_amount}}</td>
                        <td align="center" style="width: 10%">{{$statusOptions[$product->status]}}</td>
                        <td align="left" style="width: 5%">
                            <div class="btn-group" style="width:100%">
                                <div>
                                    {{--<div>--}}
                                        {{--{!! Form::open([--}}
                                            {{--'route' => ['get-edit', $product->id],--}}
                                            {{--'method' => 'GET'--}}
                                        {{--]) !!}--}}
                                        {{--{!! Form::submit('View', ['class' => 'btn btn-primary']) !!}--}}
                                        {{--{!! Form::close() !!}--}}
                                    {{--</div>--}}
                                    {!! Form::open([
                                        'route' => ['get-edit', $product->id],
                                        'method' => 'GET'
                                    ]) !!}
                                    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                </div>
                                <div>
                                    {!! Form::open([
                                        'route' => ['product-delete', $product->id],
                                        'method' => 'DELETE'
                                    ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>

        <div class="box-footer clearfix" style="text-align: center">
            {!! $products->links() !!}
        </div>
        @else
            <div class="alert">Chưa có product</div>
        @endif

    </div>
</section>
</div>
@endsection

@section('script')


<script type="text/javascript">
</script>
