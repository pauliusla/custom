@extends('main')
@section('title', '| Homepage')
@section('content')
<div class="col-md-5">
                <div class="well">
                    <h3 class="text-center">User Data</h3>
                     <hr />
                    <dl class="dl-horizontal">
                    <dt>Name:</dt>
                    <dd>{{ Auth::user()->vardas }}</dd>
                    </dl>
                     <hr />
                    <dl class="dl-horizontal">
                    <dt>Surname:</dt>
                    <dd>{{ Auth::user()->pavarde }}</dd>
                    </dl>
                     <hr />
                    <dl class="dl-horizontal">
                    <dt>Country:</dt>
                    <dd>{{ Auth::user()->salis }}</dd>
                    </dl>
                     <hr />
                    <dl class="dl-horizontal">
                    <dt>City:</dt>
                    <dd>{{ Auth::user()->miestas }}</dd>
                    </dl>
                     <hr />
                    <dl class="dl-horizontal">
                    <dt>Email:</dt>
                    <dd>{{ Auth::user()->email }}</dd>
                    </dl>
                </div>
</div>
<div class="col-md-4">
<div class="well">
                    <h3 class="text-center">Last Login and Log out</h3>
                     <hr />
                    <dl class="dl-horizontal">
                    <dt>Last Login:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime(Auth::user()->last_login)) }}</dd>
                    </dl>
                     <hr />
                    <dl class="dl-horizontal">
                    <dt>Last Logout:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime(Auth::user()->last_logout)) }}</dd>
                    </dl>
                    
                </div>
</div>
@endsection