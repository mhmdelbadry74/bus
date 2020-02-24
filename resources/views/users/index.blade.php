@extends('layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>المستخدمين</h1>

           
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                   <h3 class="box-title" style="margin-bottom: 15px">@lang('المستخدمين') <small>{{ $users->total() }}</small></h3>

                    <form action="{{ route('users.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('البحث')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('البحث')</button>
                                @if (auth()->user()->hasPermission('create_users'))
                                    <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('اضافة مستخدم جديد')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('اضافة مستخدم جديد')</a>
                                @endif
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($users->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('الاسم الاول ')</th>
                                <th>@lang('الاسم الاخير')</th>
                                <th>@lang('البريد الالكترونى ')</th>
                                <th>@lang('اكشن')</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($users as $index=>$user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if (auth()->user()->hasPermission('update_users'))
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('تعديل')</a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> تعديل</a>
                                        @endif
                                        @if (auth()->user()->hasPermission('delete_users'))
                                            <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('حذف')</button>
                                            </form><!-- end of form -->
                                        @else
                                            <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('حذف')</button>
                                        @endif
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        {{ $users->appends(request()->query())->links() }}
                        
                    @else
                        
                        <h2>@lang('no_data_found')</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
