<!-- Remove the container if you want to extend the Footer to full width. -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container my-5">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #3f51b5">
      <!-- Grid container -->
      <div class="container">
        <!-- Section: Links -->
        <section class="mt-5">
          <!-- Grid row-->
          <div class="row text-center d-flex justify-content-center pt-5">
            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="\addtask" class="text-white">Add task</a>
              </h6>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="\viewtask" class="text-white">View Task</a>
              </h6>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="\viewtask" class="text-white">Edit Task</a>
              </h6>
            </div>
            <!-- Grid column -->
  
      
  
            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="\members" class="text-white"> Members</a>
              </h6>
            </div>
            <!-- Grid column -->

            <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                  

                  <a href="{{ url('/logout') }}" class="btn btn-secondary  ">Logout</a>
                </h6>
              </div>


          </div>
          <!-- Grid row-->
        </section>
        <!-- Section: Links -->
  
        <hr class="my-5" />
  
        <!-- Section: Text -->
        @yield('main') 
        <!-- Section: Text -->
        <hr class="my-5" />
      
        <!-- Section: Social -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        © 2023 Copyright: All copyright Resvered
        
          
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>