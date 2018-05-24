<button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.user') }}'">
    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>  Kelola Pengguna
</button>
<button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.message') }}'">
    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  Kelola Pesan
</button>
<button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href={{ URL::to('/admin')}}">
    <span class="glyphicon glyphicon-file" aria-hidden="true"></span>  Kelola Proposal
</button>
<button type="button" class="btn btn-default" aria-label="Left Align" onclick="window.location.href='{{ route('admin.investasi') }}'">
    <span class="glyphicon glyphicon-file" aria-hidden="true"></span>  Kelola Investasi
</button>