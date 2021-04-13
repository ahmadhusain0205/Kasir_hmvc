</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <b class="text-primary"> UNIMMA</b> 2021</span>
        </div>
    </div>
</footer>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header font-weight-bold">PERINGATAN!</div>
            <div class="modal-body">Anda yakin ingin keluar ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary float-right" type="button" data-dismiss="modal">Tidak</button>
                <a class="btn btn-primary" href="<?= base_url('Login/logout');?>">Ya</a>
            </div>
        </div>
    </div>
</div>
<!-- Logout Modal End -->

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?= base_url('assets/js/demo/datatables-demo.js');?>"></script>
<script src="<?= base_url('assets/js/sweetalert2.all.min.js');?>"></script>
<script src="<?= base_url('assets/js/sweetalert2.all.js');?>"></script>
<script src="<?= base_url('assets/js/myscript.js');?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jamServer.js');?>"></script>
<script>
    $(document).ready(function(){
        function load_unseen_notification(view = '')
        {
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{view:view},
                dataType:"json",
                success:function(data)
                {
                    $('.dropdown-menu').html(data.notification);
                    if(data.unseen_notification > 0)
                    {
                        $('.count').html(data.unseen_notification);
                    }
                }
            });
        }
        load_unseen_notification();
        $('#comment_form').on('submit', function(event){
            event.preventDefault();
            if($('#subject').val() != '' && $('#comment').val() != '')
            {
                var form_data = $(this).serialize();
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
                        $('#comment_form')[0].reset();
                        load_unseen_notification();
                    }
                });
            } else {
                alert("Both Fields are Required");
            }
        });
        $(document).on('click', '.dropdown-toggle', function(){
            $('.count').html('');
            load_unseen_notification('yes');
        });
        setInterval(function(){ 
            load_unseen_notification();; 
        }, 5000);
    });
</script>
</body>
</html>
