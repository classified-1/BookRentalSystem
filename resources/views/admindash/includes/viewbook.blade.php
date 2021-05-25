<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admindash/includes/adminLinks')
  </head>
<script src="{{asset('assets/userdashboard/user.js')}}"></script>

{{-- ////////////Navbar Start////// --}}

@include('admindash/includes/navbar')
<div class="container mt-1">
  <div class="row tm-content-row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
      <div class="tm-bg-primary-dark tm-block tm-block-products">
        <div class="tm-product-table-container ">
          <table  class="table table-hover tm-table-small tm-product-table pr-4">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">BOOK NAME</th>
                <th scope="col">AUTHOR</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">ADDED ON</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td class="tm-product-name">Lorem Ipsum Product 1</td>
                <td>1,450</td>
                <td>FICTION</td>
                <td>28 March 2019</td>
                <td>
                  <a href="#" class="tm-product-delete-link">
                    <i class="far fa-trash-alt tm-product-delete-icon"></i>
                  </a>
                  <a href="#" class="tm-product-delete-link">
                    <i class="fas fa-edit tm-product-delete-icon"></i>
                  </a>
                </td>
              </tr>
             
            
            </tbody>
          </table>
        </div>
        <!-- table container -->
        <a
          href="{{url('addbook')}}"
          class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>

      </div>
    </div>
    
  </div>
</div>

{{-- //////////Foooter////// --}}
@include('admindash/includes/footer')

