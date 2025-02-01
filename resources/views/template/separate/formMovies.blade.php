<!-- Main content -->
<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Movies</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="#" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="movieTitle">Movie Title</label>
                      <input type="text" class="form-control" id="movieTitle" placeholder="Enter Movie Name...">
                    </div>
                    <div class="form-group">
                      <label for="movieYearPublished">Year Published</label>
                      <input type="number" min="1920" max="2100" class="form-control" id="movieYearPublished" placeholder="Enter Year...">
                    </div>
                    <div class="form-group">
                      <label for="movieSynopsis">Movie Synopsis</label><br>
                      <textarea class="form-control" name="synopsis" id="movieSynopsis" style="resize: none"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="moviePoster">Movie Poster</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="moviePoster" accept="image/*">
                          <label class="custom-file-label" for="moviePoster">Choose Film Poster</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                  </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->