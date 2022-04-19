@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">入出庫明細</div>
                    <div class="card-body">
                        <!-- 製品マスタ画面 -->
                        <table class="table mb-4">
                        {{-- <h4 class="text-center my-4">{{ $transactions->product->name }}</h4> --}}
                            <thead>
                                <tr>
                                    <th scope="col">ロットID</th>
                                    <th scope="col">車種</th>
                                    <th scope="col">日付</th>
                                    <th scope="col">入出庫</th>
                                    <th scope="col">数量</th>
                                    <th scope="col">在庫</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ sprintf('%04d', $transaction->id) }}</td>
                                    <td>{{ $transaction->product->name }}</td>
                                    <td>{{ $transaction->date }}</td>
                                    <td>{{ $transaction->quantity > 0 ? '入庫' : '出庫' }}</td>
                                    <td>{{ $transaction->quantity }} pcs</td>
                                    <td>### pcs</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
