@include('layouts.main')

        <main class="col-md-12 ms-sm-auto col-lg-8 px-md-4">
          <body>

            <div class="container-fluid">
                <div class="container text-center">
                    <div class="row pt-3 mt-3">
                      <div class="card text-bg-info" style="width:25rem;">
                        <div class="card-body">
                            <div class="card-title text-center">
                              <form >

                            <h2 class="text-center mt-3 mb-4 text-light"><b>DAFTAR AKUN</b></h2>


                            <div class="mb-3">
                              <input placeholder="Nama" type="text" class="form-control" autofocus required> 
                            </div>

                            <div class="mb-3">
                            <input placeholder="Umur" type="number" class="form-control">
                            </div>
                            
                            
                            <div class="mb-3">
                                <select id="disabledSelect" class="form-select">
                                
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                  </select>
                            </div>

                              
                            <div class="mb-3">                              
                            <input placeholder="Alamat" type="text" class="form-control">
                            </div>

                            <div class="mb-3">                              
                            <input placeholder="No Telfon" type="number" class="form-control">
                            </div>

                            <div class="mb-3">                              
                             <input placeholder="Username" type="text" class="form-control">
                            </div>

                             <div class="mb-3">                              
                            <input placeholder="Password" type="password" class="form-control">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>

                            <div class="mt-3 text-center">
                                Sudah Daftar Akun? <a href="">Login</a>
                            </div>
                          </form>


                        </div>
                      </div>
                  </div>

                    </div>
                </div>
            </div>
       
                      
          </body>
       
        </main>
    
        


</html>