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

                    <form action="{{ route('contact.create') }}" method="get">
                      <button type="submit" class="btn btn-primary">
                        新規登録
                      </button>
                    </form>

                    {{ __('index') }}
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            名前
                          </th>
                          <th>
                            性別
                          </th>
                          <th>
                            メールアドレス
                          </th>
                          <th>
                            URL
                          </th>
                          <th>
                            登録日時
                          </th>
                          <th>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tests as $test)
                        <tr>
                          <td>
                            {{$test->name}}
                          </td>
                          <td>
                            @if($test->gender === 0)
                            男性
                            @elseif($test->gender === 1)
                            女性
                            @endif
                          </td>
                          <td>
                            {{$test->email}}
                          </td>
                          <td>
                            {{$test->url}}
                          </td>
                          <td>
                            {{$test->created_at}}
                          </td>
                          <td>
                            <a href="{{ route('contact.show', ['id' => $test->id ]) }}">詳細</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
