@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">部品マスタ照会</div>
                    <div class="card-body">
                        <!-- 検索フォーム -->
                        <form method="get" action="{{ route('material.master') }}">
                            <div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right" for="material">部品名</label>
                                    <div class="col-md-5">
                                        <select class="form-control" id="material" name="id">
                                            @foreach ($materials as $material)
                                            <option {{ $material->id === $id ? 'selected' : '' }} value="{{ $material->id }}">{{ $material->name }}</option>
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
                                    <th scope="col">種別</th>
                                    <th scope="col">サプライヤー</th>
                                    <th scope="col">価格</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td>{{ $master->type->name }}</td>
                                    <td>{{ $master->supplier->name }}</td>
                                    <td>&#165; {{ number_format($master->price) }}</td>
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
