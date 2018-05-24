<div class="modal fade" id="modal-investasi" role="dialog">
  <div class="modal-dialog">
    <div class="form-horizontal" id="form-investasi" action="{{ route('do_investasi.submit') }}" method="POST">
      <div class="modal-content" style="background-color: #a7a5a5;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>INVESTASI</strong></h4>
        </div>
        <div class="modal-body">
          <input id="no_ktp_pebisnis" name="no_ktp_pebisnis" type="hidden" value="{{}}" >
          <input id="proposal_id" name="proposal_id" type="hidden" value="{{}}" >
          <div class="form-group">
            <label class="col-sm-3 control-label">Jumlah Investasi</label>
            <div class="col-sm-9">
              <input class="form-control" name="jumlah_investasi" id="jumlah_investasi" placeholder="Masukkan jumlah uang untuk diinvestasikan">
            </div> 
          </div>
          <div class="form-group{{ $errors->has('foto usaha') ? ' has-error' : '' }}">
            <label class="col-sm-3 control-label">Bukti Transfer</label>
            <div class="col-sm-9">
              <input id="bukti_foto" type="file" class="form-control" name="bukti_foto" required>
                @if ($errors->has('bukti_foto'))
                  <span class="help-block">
                    <strong>{{ $errors->first('bukti_foto') }}</strong>
                  </span>
                @endif
            </div> 
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success pull-right" id="do_invest" data-dismiss="modal" data-toggle="modal" data-target="#investasi_sukses">Kirim</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="investasi_sukses" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong>INVESTASI SUKSES</strong></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>