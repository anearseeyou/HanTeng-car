@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.access.users.management'))

@section('after-styles-end')
    {{ Html::style("css/backend/plugin/datatables/dataTables.bootstrap.min.css") }}
@stop

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.users.management') }}
        <small>{{ trans('labels.backend.access.users.active') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.users.active') }}</h3>

            {{--<div class="box-tools pull-right">
                @include('backend.access.includes.partials.header-buttons')
            </div><!--box-tools pull-right-->--}}
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive">
                <table id="users-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>真实姓名</th>
                            <th>电话</th>
                            <th>微信号</th>
                            <th>地址</th>
                            <th>是否分享</th>
                            <th>回答次数</th>
                            <th>奖品（1）</th>
                            <th>奖品（2）</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{ $user->truename }}
                                </td>

                                <td>
                                    {{ $user->tel }}
                                </td>
                                <td>
                                    {{ $user->wechat }}
                                </td>
                                <td>
                                    {{ $user->addr }}
                                </td>
                                <td>
                                    @if($user->is_share == 0)
                                        未分享
                                    @else
                                        已分享
                                    @endif
                                </td>
                                <td>
                                    {{ $user->answernum }}
                                </td>

                                <td>
                                    @if($user->reward_id_one == 3)
                                        红包
                                    @elseif($user->reward_id_one == 6)
                                        Iphone7
                                    @elseif($user->reward_id_one == 0)
                                        Ipad pro
                                    @elseif($user->reward_id_one == 2)
                                        购车券
                                    @elseif($user->reward_id_one == 4)
                                        ipadmini
                                    @else
                                        未中奖
                                    @endif
                                </td>
                                <td>
                                    @if($user->reward_id_two == 3)
                                        红包
                                    @elseif($user->reward_id_two == 6)
                                        Iphone7
                                    @elseif($user->reward_id_two == 0)
                                        Ipad pro
                                    @elseif($user->reward_id_two == 2)
                                        购车券
                                    @elseif($user->reward_id_two == 4)
                                        ipadmini
                                    @else
                                        未中奖
                                    @endif
                                </td>

                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! history()->renderType('User') !!}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@stop