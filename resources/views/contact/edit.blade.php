@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('edit') }}
                    <form action="" method="post">
                      @csrf
                      氏名
                      <input type="text" name="name" value="{{ $test->name }}">
                      <br>
                      メールアドレス
                      <input type="text" name="email" value="{{ $test->email }}">
                      <br>
                      ホームページ
                      <input type="url" name="url" value="{{ $test->url }}">
                      <br>
                      性別
                      <input type="radio" name="gender" value="0" @if($test->gender === 0) checked @endif>男性
                      <input type="radio" name="gender" value="1" @if($test->gender === 1) checked @endif>女性
                      <br>
                      <input type="submit" class="btn btn-info" value="更新">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
