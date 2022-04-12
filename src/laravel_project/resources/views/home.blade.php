@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">ホームメニュー</div>
                    <div class="card-body">
                        <!-- メニュー一覧 -->
                        <div class="list-group">
                            @foreach ($menus as $menu)
                                <a class="list-group-item list-group-item-action text-primary" href="{{ route($menu['url']) }}">{{ $menu['title'] }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
