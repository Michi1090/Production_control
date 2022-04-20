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
                                    @php
                                    // 在庫数の計算
                                    $inventory += $transaction->quantity
                                    @endphp
                                <tr>
                                    <td>{{ sprintf('%04d', $transaction->id) }}</td>
                                    <td>{{ $transaction->product->name }}</td>
                                    <td>{{ $transaction->date }}</td>

                                    @if ($transaction->quantity > 0)
                                    <td>入庫</td>
                                    <td>{{ $transaction->quantity }}</td>
                                    @else
                                    <td class="text-danger">出庫</td>
                                    <td class="text-danger">{{ $transaction->quantity }}</td>
                                    @endif

                                    @if ($inventory >= 0)
                                    <td>{{ $inventory }}</td>
                                    @else
                                    <td class="text-danger">{{ $inventory }}</td>
                                    @endif

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
