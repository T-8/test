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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
