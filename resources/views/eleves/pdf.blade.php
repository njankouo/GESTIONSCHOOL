<!DOCTYPE html>
<html lang="en">

<head>
    <title>LISTE DES ELEVES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <style>
        body {
            font-size: 15px
        }

        thead>tr>th {
            text-align: center;
            padding: 5px;
        }



        .container {
            border: 1px solid #000;
        }

        .logo {
            width: 18%;
            margin-right: 2%;
            height: 33%;
            margin-top: 8px;
        }

        #inventory-invoice {
            padding: 20px;
        }

        #inventory-invoice a {
            text-decoration: none ! important;
        }



        .invoice header {
            padding: 10px 0;
            margin-bottom: 8px;
            border-bottom: 1px solid #3989c6
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            text-align: center;
            color: #3989c6
        }

        .invoice main {
            padding-bottom: 30px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid #3989c6
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 90%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 10px
        }

        .invoice table td,
        .invoice table th {
            padding: 10px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 300;
            font-size: 10px;
            border: 1px solid #fff;
        }

        .invoice table td {
            border: 1px solid #fff;
        }



        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: #3989c6;
            font-size: 1.2em;
            border-top: 1px solid #3989c6
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 90%;
            text-align: center;
            color: #777;
            font-size: 6px;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row text-center">
            <div>

                <img src="data:images/jpg;base64,<?php echo base64_encode(file_get_contents('images/logo/national.png')); ?>" class="logo"
                    style="float: right;width:200px;height:100px;margin:25px">

            </div>


            <img src="data:images/jpg;base64,<?php echo base64_encode(file_get_contents('images/logo/img10.jpg')); ?>" class="logo"
                style="float: right;width:200px;height:150px;margin:15px">

            <h6>EMAIL: dairounjankouo2019@gmail.com</h6>
            <h6>TEL: (+ 237) 699 072 561</h6>
            <h6>ANNEE SCOLAIRE: 2021-2022</h6>

        </div>
        <h6 style="font-size: 25px;font-style:italic;font-weight: bold;margin:55px;">
            LISTE DES ELEVES
        </h6>
        <div id="inventory-invoice">

            <div class="invoice overflow-auto">
                <div>
                    <main>

                        <table class="table  text-center" style="margin-left:48px ">
                            <thead class="text-dark">
                                <tr>
                                    <th>NOM && PRENOM</th>
                                    <th>DATE NAISSANCE</th>
                                    <th>SEXE</th>
                                    <th>TELEPHONE</th>
                                    <th>CLASSE</th>

                                </tr>
                            </thead>
                            <tbody style="font-size: 15px">
                                @foreach ($eleve as $eleves)
                                    {{-- @if (!$eleves->annee_id) --}}
                                    <tr>
                                        <td>{{ $eleves->nom }} {{ $eleves->prenom }}</td>
                                        <td>{{ $eleves->date_naissance }}</td>
                                        <td>{{ $eleves->sexe }}</td>
                                        <td>{{ $eleves->telephone1 }}</td>
                                        <td>{{ $eleves->salle->libelle ?? '' }}</td>
                                    </tr>
                                    {{-- @endif --}}
                                @endforeach
                            </tbody>

                        </table>
                    </main>
                    <hr>
                    <footer style="font-size: 15px">
                        <h6 style="font-style: italic;font-weight:bold;margin-left:25px">
                            NOMBRE DE FILLE(S):
                            {{ $elevef }} &nbsp;
                            NOMBRE DE GARCON(S) :
                            {{ $elevem }}</h6>
                        APPLICATION DE GESTION ETABLISSEMENT SCOLAIRE.
                        TEL: (+ 237) 699072561.
                        SITE WEB: .....


                    </footer>
                </div>
            </div>
        </div>




</body>

</html>
