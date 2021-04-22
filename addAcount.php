<?php
    include './header.php'
?>
    <div class="container mt-5 row ml-auto mr-auto">
    <!-- start Form -->
        <div class="col-lg-5 d-inline-block">
            <form>
                <h2>Create account</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check d-inline-block">
                    <b class="d-block">Favorite?</b>
                    <input type="radio" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Kittens </label>
                </div>
                <div class="form-group form-check d-inline-block">
                    <input type="radio" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Charlie </label>
                </div>
                <div class="form-group form-check d-inline-block">
                    <input type="radio" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Jonny Action</label>
                </div>
                <button data-toggle="modal" data-target="#staticBackdrop" type="button"
                    class="d-block btn btn-primary">Go</button>
            </form>
        </div>
    <!-- end Form -->
        <div class="col-lg-6 ml-auto mb-5 mt-3">
            <img src="images/0.jpeg" alt="" class="w-100 h-100">

        </div>
    </div>
    <!-- start Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mr-5" id="staticBackdropLabel">Read More? Seriously?</h5>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cupiditate dolor? Dolorum
                        id similique neque autem, iusto cum. Assumenda, possimus autem nesciunt pariatur vitae placeat
                        quas unde dignissimos modi tempora.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <!-- start galerie -->
    <div class="container mt-5">
        <div class="w-100 text-center">
            <img src="http://placekitten.com/200/200" class="img-responsive mb-3 ml-3 mr-3" alt="...">
            <img src="http://placekitten.com/200/200" class="img-responsive mb-3 ml-3 mr-3" alt="...">
            <img src="http://placekitten.com/200/200" class="img-responsive mb-3 ml-3 mr-3" alt="...">
            <img src="http://placekitten.com/200/200" class="img-responsive mb-3 ml-3 mr-3" alt="...">
        </div>
    </div>
    <!-- end galerie -->
<?php
    include './footer.php'
?>