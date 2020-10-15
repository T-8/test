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

                    {{ __('create') }}
                    <form action="{{route('contact.store')}}" method="post">
                      @csrf
                      氏名
                      <input type="text" name="name">
                      <br>
                      メールアドレス
                      <input type="text" name="email">
                      <br>
                      ホームページ
                      <input type="url" name="url">
                      <br>
                      性別
                      <input type="radio" name="gender" value="0">男性</input>
                      <input type="radio" name="gender" value="1">女性</input>
                      <br>
                      <input type="submit" class="btn btn-info" value="登録">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
