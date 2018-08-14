@extends('layout')

@section('body')
    <div class="wrapper narrow spacing-top-large spacing-bottom-large">
        @if (session('status'))
            <div style="
                padding: 10px;
                margin-bottom: 20px;
                text-align: center;
                color: #FFF;
                background: #FE7C4D;
                border-radius: 5px;
            ">{{ session('status') }}</div>
        @endif
        <div class="box">
            <div class="section">
                <div class="row">
                    <div class="column ">
                        <span class="color-dark">Log in</span>
                    </div>
                    <div class="column align-middle text-align-right">
                        <a href="/register">Register</a>
                    </div>
                </div>
            </div>
            <div class="section">
                <form method="POST">
                    {{ csrf_field() }}
                    <div class="input">
                        <label>E-mail</label>
                        <input type="email" name="email" />
                    </div>
                    <div class="input">
                        <label>Password</label>
                        <input type="password" name="password" />
                    </div>
                    <button>Log in</button>
                </form>
            </div>
        </div>
    </div>
@endsection
