<?php
require 'config/config.php';
require 'config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include 'templates/head.php';
?>

<?php
include 'templates/navbar.php';
?>

<body>
    <!--card-->
    <section id="card">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img src="C:\Users\niagahoster\Pictures\website3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hosting</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 text-center">
                        <img src="C:\Users\niagahoster\Pictures\website2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Domain</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 text-end">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Website</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                                This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include 'templates/footer.php';
    ?>

    <?php
    include 'templates/script.php';
    ?>
    <!--end footer-->
    <!--End card-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>