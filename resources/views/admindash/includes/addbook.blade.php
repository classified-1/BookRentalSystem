<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Product</title>
    @include('admindash/includes/adminLinks')
  </head>

  <body >
   
    {{-- ////////////Navbar Start////// --}}
   @include('admindash/includes/navbar')

   {{-- ////////////Navbar Ends////// --}}

    {{-- ////////////Add Book Starts////// --}}
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Book</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="store"  enctype="multipart/form-data" class="tm-edit-product-form" method="post">
                  @csrf
                  
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Book Name
                    </label>
                    <input
                      id="name"
                      name="BookName"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Author Name</label>
                      <input
                      id="AuthorName"
                      name="AuthorName"
                      type="text"
                      class="form-control validate"
                      required
                    />
                    
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category
                      <a href="{{url('createCategory')}}"><small  style="color:#F5A623;margin-left:10em">Want to add new Category?</small></a>
                      </label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category" name="category_id"
                    >
                      <option selected>Select category</option>
                      @foreach($category_id as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        
                    </select>
                  </div>
                  <div class="row">
                    
                      <div class="form-group mb-3 col-xs-12 col-sm-12">
                          <label
                            for="expire_date"
                            >Book Link
                          </label>
                          <input
                            id="pdf"
                            name="BookLink"
                            type="text"
                            placeholder="Paste Downloading Link here"  
                          class=" form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                  </div>
              </div>

              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class=" mx-auto">
 
                  <img id="uploaded" style="background-color: #4E657A" class="tm-product-img-dummy" />
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input  accept="image/*" id="imgInp" name="Bookimg" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('imgInp').click();"
                  />
                </div>
              </div>



              <div class="col-12">
                <input type="submit" class="btn btn-primary btn-block text-uppercase" value="Add Book Now">
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('admindash/includes/footer')

<script>
  imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    uploaded.src = URL.createObjectURL(file)
  }
}
</script>