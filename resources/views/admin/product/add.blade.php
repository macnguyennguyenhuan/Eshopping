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
                    <h2>Thêm Sản Phẩm</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
                        <input type="text" class="form-control mt-3" name="price" placeholder="Nhập giá sản phẩm">
                        <textarea class="form-control mt-3" rows="5" id="description" name="description"
                            placeholder="Nhập mô tả sản phẩm"></textarea>
                        <select name="manufacturer" id="manufacturer" class="form-select mt-3">
                            <option value="" disabled selected>Chọn hãng sản xuất</option>
                            @foreach ( $allManu as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        <input type="file" name="image" id="image" class="form-control mt-3">
                        <button type="submit" class="btn btn-success mt-3">Thêm</button>
                    </form>
                </div>
            </div>




            @yield('admin_content')
        </section>
    </section>
</body>

</html>