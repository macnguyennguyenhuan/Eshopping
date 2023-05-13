<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Edit Manufacturer</title>
</head>
<body>
    @include('admin_layout')
    <section id="main-content">
        <section class="wrapper mt-4">
           <div class="card">
                <div class="card-header">
                    <h2>Chỉnh Sửa Hãng Sản Xuất</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/manufacturer/' . $manu->id) }}" method="post">
                        {!!csrf_field()!!}
                        @method('PATCH')
                        <select name="manufacturer" id="manufacturer" class="form-select">
                            @foreach ( $allManu as $item)
                            @if( $item->name == $manu->name )
                            <option value="{{ $manu->name }}" selected>{{
                                $manu->name }}</option>
                            @else
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endif
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-warning mt-3">Sửa</button>
                    </form>
                </div>
            </div>
            @yield('admin_content')
        </section>
    </section>
</body>
</html>