@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">部品マスタ検索</div>
                    <div class="card-body">
                        <!-- 検索画面 -->
                        <form method="get" action="{{ route('material_master') }}">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="material">部品名</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="material" name="id">
                                        @foreach ($materials as $material)
                                        <option value="{{ $material->id }}">{{ $material->name }}</option>
                                        @endforeach
                                    </select>
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
