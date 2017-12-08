@extends('backend.layouts.master')

@section('page-header')
	<h1>
		{{ app_name() }}
		<small>{{ trans('strings.backend.reward.title') }}</small>
	</h1>
@endsection

@section('content')
	{{ Form::open(['route' => 'admin.reward.addcreat', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">新增奖项配置</h3>

                <div class="box-tools pull-right">
                    
                </div><!--box-tools pull-right-->
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group">
                    {{ Form::label('start_time', '开始时间', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                     	{!! Form::input('date', 'start_time', date('Y-m-d H:i:s'), ['class' => 'form-control']) !!}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('stop_time', '结束时间', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {!! Form::input('date', 'stop_time', date('Y-m-d H:i:s'), ['class' => 'form-control']) !!}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('iphone', 'Iphone7', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('iphone', null, ['class' => 'form-control', 'placeholder' =>'例如：1个就填1，0个填0']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                   {{ Form::label('iphonep', 'Iphone7 Plus', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('iphonep', null, ['class' => 'form-control', 'placeholder' =>'例如：1个就填1，0个填0']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                   {{ Form::label('chemo', '车模', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('chemo', null, ['class' => 'form-control', 'placeholder' =>'例如：1个就填1，0个填0']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('ipadmini', 'Ipad Mini', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('ipadmini', null, ['class' => 'form-control', 'placeholder' =>'例如：1个就填1，0个填0']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                    {{ Form::label('redbag', '红包', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('redbag', null, ['class' => 'form-control', 'placeholder' =>'例如：1个就填1，0个填0']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                <div class="form-group">
                   {{ Form::label('gouche', '购车券', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10">
                        {{ Form::text('gouche', null, ['class' => 'form-control', 'placeholder' =>'例如：1个就填1，0个填0']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
            </div><!-- /.box-body -->
        </div><!--box-->

        <div class="box box-info">
            <div class="box-body">
                <div class="pull-left">
                    {{ link_to_route('admin.reward', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
                </div><!--pull-left-->

                <div class="pull-right">
                    {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-xs']) }}
                </div><!--pull-right-->

                <div class="clearfix"></div>
            </div><!-- /.box-body -->
        </div><!--box-->

    {{ Form::close() }}
@endsection