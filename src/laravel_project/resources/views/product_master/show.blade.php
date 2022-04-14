@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">製品マスタ照会</div>
                    <div class="card-body">
                        <!-- 製品マスタ画面 -->
                        <h4 class="text-center my-4">{{ $product->name }}</h4>
                        <table class="table mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">部品名称</th>
                                    <th scope="col">員数</th>
                                    <th scope="col">種別</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $product->engine->name }}</td>
                                    <td>{{ $product->engine_per }} pcs</td>
                                    <td>エンジン</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>{{ $product->airbag->name }}</td>
                                    <td>{{ $product->airbag_per }} pcs</td>
                                    <td>エアバッグ</td>
                                </tr>
                                <tr class="border-bottom">
                                    <th scope="row">3</th>
                                    <td>{{ $product->tire->name }}</td>
                                    <td>{{ $product->tire_per }} pcs</td>
                                    <td>タイヤ</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <a class="btn btn-secondary px-4 text-center" href="{{ route('product_search') }}">戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
