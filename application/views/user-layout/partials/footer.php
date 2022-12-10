        <section class="footer">
                <div class="box-container">
                </div>
                <div class="credit">created by <span>Sekolah Vokasi IPB</span> | all rights reserved!</div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="<?=base_url('')?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="<?=base_url('')?>assets/user/js/script.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"
        crossorigin="anonymous"></script>
        <script>
                AOS.init({
                        once:true,
                });
        </script>
        <script>
                var swiper = new Swiper('.mySwiper', {
                        effect: 'cards',
                        grabCursor: true,
                });
        </script>
        <script type="text/javascript">
                const datetimepicker1 = new tempusDominus.TempusDominus(document.getElementById('datetimepicker1'));
        </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
                $(document).on('click', '#btn-logout', function(e){
                e.preventDefault();
                var link = $(this).attr('href');

                Swal.fire({
                        title: 'Anda Yakin?',
                        text: "Anda akan keluar dari akun Anda!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yakin, keluar!'
                }).then((result) => {
                        if (result.isConfirmed) {
                        window.location = link;
                        }
                })
                })
                
        </script>
</body>
</html>