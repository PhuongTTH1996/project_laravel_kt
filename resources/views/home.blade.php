@extends('layouts.auth')
@section('content')
    <section class="content">
        <div class="box box-primary">
            @if (!empty($sub_users) && $sub_users->total() > 0)
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
                    @foreach ($sub_users as $sub_user)
                        <tr id="todo_{{$sub_user->id}}">
                            <td align="center" style="width: 5%">{{$sub_user->id}}</td>
                            <td align="center" style="width: 15%">{{$sub_user->str_ten}}</td>
                            <td align="center" style="width: 10%">
                            </td>
                            <td align="center" style="width: 15%"></td>
                            <td align="center" style="width: 15%"></td>
                            <td align="center" style="width: 15%">{{$sub_user->type_code}}</td>
                            <td align="center" style="width: 10%">{{$sub_user->type_amount}}</td>
                            <td align="center" style="width: 10%"></td>
                            <td align="left" style="width: 5%">
                                <div class="btn-group" style="width:100%">
                                    <div>
                                        <div>
                                        {!! Form::open([
                                        'route' => ['get-edit', $product->id],
                                        'method' => 'GET'
                                        ]) !!}
                                        {!! Form::submit('View', ['class' => 'btn btn-primary']) !!}
                                        {!! Form::close() !!}
                                        </div>
                                        {!! Form::open([
                                            'route' => ['get-edit', $sub_user->id],
                                            'method' => 'GET'
                                        ]) !!}
                                        {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div>
                                        {!! Form::open([
                                            'route' => ['product-delete', $sub_user->id],
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
                <div class="alert">Chưa có user đăng ký</div>
            @endif
        </div>
    </section>
@endsection
