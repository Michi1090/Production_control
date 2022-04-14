@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">部品マスタ照会</div>
                    <div class="card-body">
                        <!-- 製品マスタ画面 -->
                        <h4 class="text-center my-4">{{ $material->name }}</h4>
                        <table class="table mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">種別</th>
                                    <th scope="col">サプライヤー</th>
                                    <th scope="col">価格</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td>{{ $material->type->name }}</td>
                                    <td>{{ $material->supplier->name }}</td>
                                    <td>&#165; {{ number_format($material->price) }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <a class="btn btn-secondary px-4 text-center" href="{{ route('material_search') }}">戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
