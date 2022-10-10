<div class="table_section padding_infor_info">
    <div class="table-responsive-sm">


        <table class="table table-striped display" id="example">
            <thead>
                <tr>

                    <th>NOM && PRENOM</th>

                    <th>TELEPHONE 1</th>
                    <th>TELEPHONE 2</th>
                    <th>STATUS</th>
                    <th>SEXE</th>
                    <th>REGIME</th>
                    <th>E-MAIL</th>

                    <th>Opération</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enseignant as $ens)
                    <tr>
                        <td>{{ $ens->nom }} {{ $ens->prenom }}</td>
                        <td>{{ $ens->telephone1 }}</td>
                        <td>{{ $ens->telephone2 }}</td>
                        <td>{{ $ens->status }}</td>
                        <td>{{ $ens->sexe }}</td>
                        <td>{{ $ens->regime }}</td>
                        <td>{{ $ens->email }}</td>
                        <td>
                            <a href="" class="btn btn-danger">
                                <i class="fa fa-minus-circle fa-2x"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>
