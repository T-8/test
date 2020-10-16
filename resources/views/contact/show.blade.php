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

                    {{ __('show') }}
                    <table class="table table-bordered">
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
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            {{ $test->name }}
                          </td>
                          <td>
                            {{ $gender }}
                          </td>
                          <td>
                            {{ $test->email }}
                          </td>
                          <td>
                            {{ $test->url }}
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <form action="{{ route('contact.edit', [ 'id' => $test->id ]) }}" method="get">
                      @csrf
                      <input type="submit" class="btn btn-info" value="変更">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
