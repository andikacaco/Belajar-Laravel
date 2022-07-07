<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Mahasiswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 1500px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <h2>Data Mahasiswa</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#section1">Daftar Mahasiswa</a></li>
                </ul><br>
            </div>
            <div class="col-sm-9">
                <table class="table caption-top">
                    <h3>Daftar Mahasiswa</h3>
                    <thead>
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">IPK</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>
                                <td>{{ $list['nim'] }}</td>
                                <td>{{ $list['nama'] }}</td>
                                <td>{{ $list['tanggal_lahir'] }}</td>
                                <td>{{ $list['ipk'] }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" {{ $list['update'] }}>Edit</a>
                                    <a class="btn btn-danger btn-sm" {{ $list['delete'] }}>Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <footer class="container-fluid">

    </footer>

</body>

</html>
