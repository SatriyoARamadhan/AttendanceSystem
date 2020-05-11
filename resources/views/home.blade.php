@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="div-id-name">
                <div class="panel-heading" >{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button class="btn btn-primary btn-xs btn-round" href="#" id="print" onclick="javascript:printlayer('div-id-name')">Cetak Kehadiran</button></div>

                <script type="text/javascript">
                    function printlayer(layer)
                    {
                        var generator=window.open(",'name,");
                        var layertext = document.getElementById(layer);
                        generator.document.write(layertext.innerHTML.replace("Print Me"));

                        generator.document.close();
                        generator.print();
                        generator.close();
                    }
                </script>

                <div class="panel-body">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Auth::user()->attendance as $User)
                            <tr>
                                <td>{{ Carbon\Carbon::parse($User->date)->format('d-m-Y') }}</td>
                                <td>{{ $User->attendance ? "Present" : "Absent" }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <thead>
                            <tr>
                                <th>Persentasi</th>
                                <th>{{ Auth::user()->present->count() / Auth::user()->attendance->count() * 100 }}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
