@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <!-- カードヘッダー -->
                <div class="card-header text-center">入出庫明細</div>
                    <div class="card-body">
                        <!-- 製品マスタ画面 -->
                        <table class="table mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">日付</th>
                                    <th scope="col">ロットID</th>
                                    <th scope="col">車種</th>
                                    <th scope="col">入出庫</th>
                                    <th scope="col">数量</th>
                                    <th scope="col">在庫</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- 現在庫の表示 --}}
                                <tr class="font-weight-bold">
                                    <td>{{ date('Y-m-d')}}</td>
                                    <td>現在庫</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $inventory->quantity }}</td>
                                </tr>

                                {{-- 本日以降の入出庫明細表示 --}}
                                @foreach ($transactions as $transaction)

                                @php
                                // 在庫数の計算
                                $inventory->quantity += $transaction->quantity
                                @endphp

                                <tr>
                                    <td>{{ $transaction->date }}</td>
                                    <td>{{ sprintf('%04d', $transaction->id) }}</td>
                                    <td>{{ $transaction->product->name }}</td>

                                    @if ($transaction->quantity > 0)
                                    <td>入庫</td>
                                    <td>{{ $transaction->quantity }}</td>
                                    @else
                                    <td class="text-danger">出庫</td>
                                    <td class="text-danger">{{ $transaction->quantity }}</td>
                                    @endif

                                    @if ($inventory->quantity >= 0)
                                    <td>{{ $inventory->quantity }}</td>
                                    @else
                                    <td class="text-danger">{{ $inventory->quantity }}</td>
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
