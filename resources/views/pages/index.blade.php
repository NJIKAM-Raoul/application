@extends('layouts.default')

@section('content')
<div class="content-wrapper">
    <div class="container">
      {{--  <!-- Content Header (Page header) -->  --}}
      <section class="content-header">
        <h1 class="text-center" style="border: 0px crimson  groove;  
        background-color:  royalblue;  
        margin-top: 20px;
        margin-bottom: 50px;
        margin-left: 15px;">

          Page D Accueil Ici
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          {{--  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>  --}}
          {{--  <li><button class="bnt btn btn-primary"><a href="#" 
            style="color: black; border-radius: 25px;">Deconnexion</a></button></li>  --}}
        </ol>
      </section>

      <li class="text-center">
        <img src="dist/img/enf.jpg" class="img-fluid" alt="User Image" style="width: 1100px; hight: 1000px;">
      </li>

      {{--  <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <h4>Tip!</h4>

          <p>Add the layout-top-nav  to the body tag to get this layout. This feature can also be used with a
            sidebar! So  this   you want to remove the custom dropdown menus from the navbar and  regular
            links instead.</p>
        </div>
        <div class="callout callout-danger">
          <h4>Warning!</h4>

          <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
            and the content will slightly differ than that of the normal layout.</p>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Blank Box</h3>
          </div>
          <div class="box-body">
            The great content goes here
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->  --}}
    </div>
    <!-- /.container -->
  </div>
</div>
<!-- ./wrapper -->
@stop