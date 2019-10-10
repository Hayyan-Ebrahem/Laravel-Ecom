@extends('layouts.app')

@section('content')
<div class="container">

        <div class="col-12">
                <passport-clients></passport-clients>
        </div>

        <div>
                <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
</div>
@endsection
