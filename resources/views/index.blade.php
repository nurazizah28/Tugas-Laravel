@extends('template.master')
@section('web-title','Add Movies')

@section('content-title', 'Add Your Favourite Movies Here!')

@section('content')
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                {{-- <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Featured</h5>
                  </div>
                  <div class="card-body">
                    <h6 class="card-title">Special title treatment</h6>
    
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div> --}}
    
                <div class="card card-warning card-outline">
                  <div class="card-header">
                    <h5 class="m-0"><strong>Genre</strong></h5>
                  </div>
                  <div class="card-body">
                    <h6 class="card-title mb-2"><strong>Add Your Movie Genre Here!</strong></h6>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima nam adipisci vel officia asperiores perferendis dolore et blanditiis nostrum. Modi, omnis? Maxime assumenda laboriosam nostrum sit! Ad blanditiis dicta provident.</p>
                    <a href="{{route('genre.create')}}" class="btn btn-primary">Add Genre</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-success card-outline">
                  <div class="card-header">
                    <h5 class="m-0"><strong>Cast</strong></h5>
                  </div>
                  <div class="card-body">
                    <h6 class="card-title mb-2"><strong>Add Your Movie Casts Here!</strong></h6>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta facilis quaerat porro totam, modi perspiciatis delectus quas. Nesciunt labore cumque ratione ipsum, consequatur, ut rerum, facere modi eligendi itaque doloremque.</p>
                    <a href="{{route('cast.create')}}" class="btn btn-primary">Add Casts</a>
                  </div>
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    @endsection
    <!-- /.container-fluid -->
<!-- /.content -->