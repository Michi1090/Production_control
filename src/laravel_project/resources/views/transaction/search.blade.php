@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">入出庫明細 / 登録</div>
                    <div class="card-body">
                        <!-- 検索画面 -->
                        <form method="get" action="{{ route('transaction') }}">
                            <div>
                                <p class="text-center">データを登録・照会したい製品を選択してください</p>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" for="product">製品名</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="product" name="product_id">
                                            @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary px-4 mr-2" type="submit">検索</button>
                                <a class="btn btn-secondary px-4" href="{{ route('home') }}">戻る</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
