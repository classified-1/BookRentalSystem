<!DOCTYPE html>
<html lang="en">
  <head>
    
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
                <form action="" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Book Name
                    </label>
                    <input
                      id="name"
                      name="name"
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
                      id="authname"
                      name="authername"
                      type="text"
                      class="form-control validate"
                      required
                    />
                    
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                    >
                      <option selected>Select category</option>
                      <option value="1">New Arrival</option>
                      <option value="2">Most Popular</option>
                      <option value="3">Trending</option>
                    </select>
                  </div>
                  <div class="row">
                    
                      <div class="form-group mb-3 col-xs-12 col-sm-12">
                          <label
                            for="expire_date"
                            >Book PDF
                          </label>
                          <input
                            id="pdf"
                            name="pdf"
                            type="file"
                            type="file" 
                            class="btn btn-secondary btn-block mx-auto"
                            data-large-mode="true"
                          />
                        </div>

                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('imageInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="imageInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('imageInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Book Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('admindash/includes/footer')

