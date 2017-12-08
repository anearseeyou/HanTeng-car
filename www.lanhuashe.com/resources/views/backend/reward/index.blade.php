@extends('backend.layouts.master')

@section('page-header')
	<h1>
		{{ app_name() }}
		<small>{{ trans('strings.backend.reward.title') }}</small>
	</h1>
@endsection

@section('content')
	<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title">大转盘设定</h3>
			<h6 class="pull-right"><a href="{{ route('admin.reward.creat') }}">增加</a></h6>
		</div><!-- /.box-header -->
		<div class="box-body">
            <div class="table-responsive">
    			<table id="users-table" class="table table-condensed table-hover">
    				<thead>
                        <tr>
                            <th style="width: 10px" class="text-center">ID</th>
    						<th class="text-center">开始日期</th>
    						<th class="text-center">结束日期</th>
    						<th class="text-center">Ipone7</th>
    						<th class="text-center">Ipone7 Plus</th>
                            <th class="text-center">车模</th>
    						<th class="text-center">ipad mini</th>
    						<th class="text-center">红包</th>
    						<th class="text-center">购车券</th>
    						<th style="width: 80px" class="text-center">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rewards as $reward)
                            <tr class="text-center">
                            	<td>
                            		{{ $reward->id }}
                            	</td>
                                <td>
                                    {{ $reward->start_time }}
                                </td>
                                
                                <td>
                                    {{ $reward->stop_time }}
                                </td>

                                <td>
                                    {{ $reward->iphone }}
                                </td>
                                <td>
                                    {{ $reward->iphonep }}
                                </td>
                                <td>
                                    {{ $reward->chemo }}
                                </td>
                                <td>
                                   {{ $reward->ipadmini }}
                                </td>

                                <td>
                                    {{ $reward->redbag }}
                                </td>
                                <td>
                                    {{ $reward->gouche }}
                                </td>
                                <td>
    	                        	<a href='{{ url("admin/reward/edit/$reward->id") }}'>修改</a>
    	                        	<a href='{{ url("admin/reward/dele/$reward->id") }}'>删除</a>
    	                        </td>

                            </tr>
                            
                        @endforeach
                    </tbody>
    			</table>
            </div>
		</div><!-- /.box-body -->
		<div class="box-footer clearfix">
			<ul class="pagination pagination-sm no-margin pull-right">
				<li><a href="#">&laquo;</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		</div>
	</div><!-- /.box -->
@endsection