<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach nha cung cap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>danh sach vat tu</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma nha cung cap</th>
                    <th>ten nha cung cap</th>
                    <th>don vi tinh</th>
                    <th>phan tram</th>
                </tr>
            </thead>            
            <tbody>
                @php
                    $stt=1;
                @endphp
                @forelse ($nvkVattus as $item)
                    <tr>
                        <td>{{$loop->iteration + ($nvkVattus->currentPage() - 1) * $nvkVattus->perPage() }}</td>
                        <td>{{$item->nvkMavt}}</td>
                        <td>{{$item->nvkTenvt}}</td>
                        <td>{{$item->nvkDonvt}}</td>
                        <td>{{$item->nvkPhantram}}</td>
                        <td>
                            view / edit / delete
                        </td>
                        @empty
                        <tr>
                            <td colspan="7">chua co du lieu</td>
                        </tr>
                    </tr>
                @endforelse
                <tr>
                    <th colspan="7"colspan="7">{{$nvkVattus->links('pagination::bootstrap-5')}}</th>
                </tr>
            </tbody>
            <button class="btn btn-primary">them moi</button>
        </table>
    </section>
</body>
</html>