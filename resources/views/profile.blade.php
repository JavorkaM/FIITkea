@extends('app')

@section('title', 'Profil')

@section('content')
<!--    TOP -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <hr>
            <!--    Under Construction    -->
            <div class="row">
                <div class="col-md-4">
                    <img  class="center2" width="50%"  src="user.png"/>
                </div>
                <div class="col" style="text-align:left"  >
                    <div class="vertcenter">
                        <h1>{{ $user->name }}  {{ $user->surname }}</h1>
                    </div>
                </div>
                <div class="col" style="text-align:right">
                    <a href="underconstruction.blade.php" class="btn btn-dark">Zmeniť údaje používateľa</a>
                </div>
            </div>
            <br>
            <div class="row">
                <ul class="list-group list-group-horizontal-md" style="padding-left: 12px" >
                    <div class="col">
                        <li class="list-group-item">
                            <p>Osobné údaje používateľa</p>
                            <p>{{ $user->email }}</p>
                            <p>+421{{ $user->phone }}</p>
                        </li>
                    </div>
                    <div class="col">
                        <li class="list-group-item">
                            <p>Adresa používateľa</p>
                            <p>{{ $user->city }}, {{ $user->zip }}</p>
                            <p>{{ $user->street }}</p>
                        </li>
                    </div>
                </ul>
            </div>
            <br>
            <div class="row">
                <div class="col" style="text-align:left">
                    <a class="btn btn-dark btn-lg" href="{{ route('index') }}">Späť</a>
                </div>
                <div class="col" style="text-align:right">
                    <a class="btn btn-dark btn-lg" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        {{ __('Odhlásiť') }}
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                @if ($user->admin)
                    <div style="text-align:center" >
                        <a class="btn btn-dark btn-lg" href="{{ route('admin') }}">Administrátorská časť</a>
                    </div>
                @endif
            </div>
            <br>
        </div>
        <div class="col-lg-3"></div>

    </div>
</div>
@endsection
