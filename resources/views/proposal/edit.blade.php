@extends('template.master')
@section('content')

            <section class="content-header">
            <h1>Tambah Peluang Bisnis</h1>
            <p> * Jelaskan sedetail mungkin pada kolom Diskripsi  agar banyak Pemodal yang akan membantu dana kepada Anda <br /></p>
            </section>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form method="POST" action="{{ url('/update')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id_post" value="{{$posts->id}}">
                            
                            <div class="form-group{{ $errors->has('namausaha') ? ' has-error' : '' }}">
                                <label for="namausaha" class="col-md-4 control-label">Nama Usaha</label>
                                <div class="col-md-6">
                                    <input id="namausaha" type="text" class="form-control" value="{{ $posts->namausaha}}"name="namausaha" required>
                                    @if ($errors->has('namausaha'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('namausaha') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                                {!! Form::label('id_kategori', 'Kategori',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-4">
                                {{ Form::select('id_kategori', ['1' => 'Perdagangan', '2' => 'Peternakan'], 2, ['class' =>'form-control']) }}
                                    @if ($errors->has('kategori'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kateori') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('Kebutuhan Dana') ? ' has-error' : '' }}">
                                <label for="biaya" class="col-md-4 control-label">Dana Yang Dibutuhkan</label>
                                <div class="col-md-6">
                                    <input id="biaya" type="integer" class="form-control" value="{{$posts->kebutuhan_dana}}"name="kebutuhan_dana" required>
                                    @if ($errors->has('kebutuhan_dana'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kebutuhan_dana') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                                <label for="lokasi" class="col-md-4 control-label">Lokasi</label>
                                <div class="col-md-6">
                                    <input id="lokasi" type="text" class="form-control" value="{{$posts->lokasi}}" name="lokasi" required>
                                    @if ($errors->has('lokasi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lokasi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('Diskripsi') ? ' has-error' : '' }}">
                                <label for="diskripsi" class="col-md-4 control-label">Diskripsi</label>
                                <div class="col-md-6">
                                    <!-- <input id="diskripsi" type="text" class="form-control" name="diskripsi" required> -->
                                    <textarea class="form-control" rows="5" id="comment" name="diskripsi">{{$posts->diskripsi}}</textarea>
                                    @if ($errors->has('diskripsi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('diskripsi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('foto usaha') ? ' has-error' : '' }}">
                                <label for="foto" class="col-md-4 control-label">Foto Usaha</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control" value="{{$posts->namafoto}}" name="foto" required>
                                    @if ($errors->has('foto'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('foto') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('proposal') ? ' has-error' : '' }}">
                                <label for="proposal" class="col-md-4 control-label">Upload Proposal</label>
                                <div class="col-md-6">
                                    <input id="proposal" type="file" class="form-control" name="proposal" required>
                                    @if ($errors->has('proposal'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('proposal') }}</strong>
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
