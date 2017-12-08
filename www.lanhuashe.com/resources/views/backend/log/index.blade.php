@extends('backend.layouts.master')

@section('page-header')
	<h1>
		{{ app_name() }}
		<small>{{ trans('strings.backend.dashboard.title') }}</small>
	</h1>
@endsection

@section('content')
	{{--<div class="box box-success">
		<div class="box-header with-border">
			<h3 class="box-title">{{ trans('strings.backend.dashboard.welcome') }} {{ access()->user()->name }}!</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div><!-- /.box tools -->
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="chart" id="line-chart" style="height: 250px;"></div>
		</div><!-- /.box-body -->
	</div><!--box box-success-->--}}

	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">网站图标</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body" id="log_chart" style="height:600px;">
		</div><!-- /.box-body -->
	</div><!-- /.box -->
@endsection
@section('after-scripts-end')
	<script src="{{ asset('js/echarts.js') }}"></script>
	<script>
		// 基于准备好的dom，初始化echarts实例
		var myChart = echarts.init(document.getElementById('log_chart'));

		// 指定图表的配置项和数据
		var option = {
			title: {
				text: '参与及中奖图'
			},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['参与人数','中奖人数']
			},
			toolbox: {
				feature: {
					saveAsImage: {}
				}
			},
			grid: {
				left: '3%',
				right: '4%',
				bottom: '3%',
				containLabel: true
			},
			xAxis : [
				{
					type : 'category',
					boundaryGap : false,
					data : ['11.22','11.24','11.25','11.26','11.27','11.28','11.29']
				}
			],
			yAxis : [
				{
					type : 'value'
				}
			],
			series : [
				{
					name:'参与人数',
					type:'line',
					stack: '总量',
					areaStyle: {normal: {}},
					data:[120, 132, 101, 134, 90, 230, 210]
				},
				{
					name:'中奖人数',
					type:'line',
					stack: '总量',
					areaStyle: {normal: {}},
					data:[220, 182, 191, 234, 290, 330, 310]
				}
			]
		};

		// 使用刚指定的配置项和数据显示图表。
		myChart.setOption(option);
    </script>
@endsection