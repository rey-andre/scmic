            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Indonesia Pintar 2022</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda akan keluar dari aplikasi!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=site_url('logout')?>">Yakin</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=base_url('')?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url('')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('')?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=base_url('')?>assets/js/sb-admin-2.min.js"></script>
    <script src="<?=base_url('')?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('')?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url('')?>assets/js/demo/datatables-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"
    crossorigin="anonymous"></script>
    <script type="text/javascript">
        const datetimepicker1 = new tempusDominus.TempusDominus(document.getElementById('datetimepicker1'));
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).on('click', '#btn-hapus', function(e){
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Anda Yakin?',
                text: "Data akan terhapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
        
    </script>

    <script>
        $(document).on('click', '#hapus-laporan', function(e){
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Anda Yakin?',
                text: "Data akan terhapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yakin, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
        
    </script>
</body>
</html>