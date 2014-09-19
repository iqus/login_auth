    <!--file: app/views/index.blade.php-->
     
    @section('content')
    <div class="row">
    <div class="large-12 column">
    <div class="panel callout radius">
    <h1> Laravel 4 Authentication Tutorial </h1>
    </div>
    <p> Please {{ HTML::linkAction('Admin\AdminController@getLogin','Login') }} to access dashboard</p>
    </div>
    </div>
    @stop