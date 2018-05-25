@extends('template.master')
@section('content')

            <section class="content-header">
            <h1>Tambah Progress Bisnis</h1>
            </section>
                <div class="panel panel-default" style="margin-bottom:290px;margin-top:75px;">
                    <div class="panel-body">
                        <form method="POST" action="{{ url('/progress/store')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('aktivitas') ? ' has-error' : '' }}">
                                <label for="aktivitas" class="col-md-4 control-label">Tanggal</label>
                                <div class="col-md-6">
                                    <input id="tanggal" type="date" class="form-control" name="tanggal" required>
                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                                <label for="keterangan" class="col-md-4 control-label">Keterangan</label>
                                <div class="col-md-6">
                                    <input id="keterangan" type="text" class="form-control" name="keterangan" required>
                                    @if ($errors->has('keterangan'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('keterangan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                                <label for="foto" class="col-md-4 control-label">Foto</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control" name="foto" required>
                                    @if ($errors->has('foto'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('foto') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="col-md-offset-4 col-md-4">
                                <input class="btn btn-primary" type="submit" value="{{'Simpan'}}">
                                <input class="btn btn-danger" type="reset" value="{{'Reset'}}">
                            </div>
                        </form>
                    </div>
               </div>
@endsection
