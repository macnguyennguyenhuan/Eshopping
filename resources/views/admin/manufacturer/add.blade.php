<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Add Manufacturer</title>
</head>

<body>
    @include('admin_layout')
    <section id="main-content">
        <section class="wrapper mt-4">
            <div class="card">
                <div class="card-header">
                    <h2>Thêm Hãng Sản Xuất</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/manufacturer') }}" method="post">
                        {!!csrf_field()!!}
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên hãng sản xuất">
                        <button type="submit" class="btn btn-success mt-3">Thêm</button>
                    </form>
                </div>
            </div>




            @yield('admin_content')
        </section>
    </section>
</body>

</html>