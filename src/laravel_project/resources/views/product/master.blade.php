@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">製品マスタ照会</div>
                    <div class="card-body">
                        <!-- 検索フォーム -->
                        <form method="get" action="{{ route('product.master') }}">
                            <div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right" for="product">製品名</label>
                                    <div class="col-md-5">
                                        <select class="form-control" id="product" name="id">
                                            @foreach ($products as $product)
                                            <option {{ $product->id === $id ? 'selected' : '' }} value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary px-4 mr-2" type="submit">検索</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- 製品マスタ画面 -->
                        <h4 class="text-center mt-5 mb-4">{{ $master->name }}</h4>
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
                                <!-- エンジン -->
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <a href="{{ route('material.master', ['id' => $master->engine_id]) }}" target="_blank">
                                            {{ $master->engine->name }}
                                        </a>
                                    </td>
                                    <td>{{ $master->engine_per }} pcs</td>
                                    <td>エンジン</td>
                                </tr>

                                <!-- エアバッグ -->
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <a href="{{ route('material.master', ['id' => $master->airbag_id]) }}" target="_blank">
                                            {{ $master->airbag->name }}
                                        </a>
                                    </td>
                                    <td>{{ $master->airbag_per }} pcs</td>
                                    <td>エアバッグ</td>
                                </tr>

                                <!-- タイヤ -->
                                <tr class="border-bottom">
                                    <th scope="row">3</th>
                                    <td>
                                        <a href="{{ route('material.master', ['id' => $master->tire_id]) }}" target="_blank">
                                            {{ $master->tire->name }}
                                        </a>
                                    </td>
                                    <td>{{ $master->tire_per }} pcs</td>
                                    <td>タイヤ</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- ホームへ戻るボタン -->
                        <div class="text-center">
                            <a class="btn btn-secondary px-4 text-center" href="{{ route('home') }}">ホームメニュー</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
