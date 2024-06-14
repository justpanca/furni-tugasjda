<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">
<div
  class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
  <div class="d-flex align-items-center justify-content-center w-100">
    <div class="row justify-content-center w-100">
      <div class="col-md-8 col-lg-6 col-xxl-3">
        <div class="card mb-0">
          <div class="card-body">
            <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
            </a>
            <form action="{{ route('login') }}" method="POST">
              @csrf
              @method("PATCH")
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                  <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label text-dark" for="flexCheckChecked">
                    Remember this Device
                  </label>
                </div>
                <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
              </div>
              <a href="/" button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign In</a>
              <div class="d-flex align-items-center justify-content-center">
                <p class="fs-6 mb-0 fw-bold">New to Furni?</p>
                <a class="text-primary fw-bold ms-2" href="/register">Create an account</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
