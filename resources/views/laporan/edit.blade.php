@extends('template.master')
@section('content')

            <section class="content-header">
            <h1>Edit Laporan Usaha</h1>
            </section>
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                    <form method="POST" action="{{ url('/laporan/update')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                      <input type="hidden" name="id_laporan" value="{{$laporan->id}}">
                       <div class="form-group">
                            <label for="aktivitas" class="col-md-4 control-label">Aktivitas</label>
                            <div class="col-md-6">
                            {!! Form::text('aktivitas',$laporan->aktivitas, array('class' => 'form-control','placeholder'=>'Aktivitas')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="biaya" class="col-md-4 control-label">Biaya yang dikeluarkan</label>
                            <div class="col-md-6">
                            {!! Form::text('biaya',$laporan->Biaya, array('class' => 'form-control','placeholder'=>'Biaya yang dibutuhkan')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan" class="col-md-4 control-label">Keterangan</label>
                            <div class="col-md-6">
                            {!! Form::text('keterangan',$laporan->keterangan, array('class' => 'form-control','placeholder'=>'Keterangan')) !!}
                            </div>
                        </div>
                        
                        {!! Form::button(' Simpan', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}

                        </form>
                    </div>
               </div>
@endsection