<div class="container-fluid">
<!-- pesan error -->
<?php if ($this->session->flashdata('pesan')):?>

<div class="row mt-3">
    <div class="col-md-6">
        
        <?= $this->session->flashdata('pesan'); ?>

    </div>
</div>
<?php endif; ?>
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pesan</th>
                            
                        </tr>
                    </thead>
                    <tbody id="tBodyBukuTamu">  
                    <?php foreach($z as $tm): ?>      
                        <tr>
                            <td><?= $tm['NAMA_TAMU']?></td>
                            <td><?= $tm['EMAIL_TAMU']?></td>
                            <td>
                            <a href="<?=base_url(); ?>uploads/<?= $tm['ID_TAMU']?>"  class="btn btn-success  ml-1 ModalInfoTamu" data-toggle="modal"
                                        data-target="#formDetailTamu" data-id="<?= $tm['ID_TAMU']?>"><i class="fas fa-info-circle"></i> Detail</a>
                            <a href="<?=base_url(); ?>admin/hapusTamu/<?= $tm['ID_TAMU']; ?>"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin');"><i class="fas fa-trash-alt"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>   
                    </tbody>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- modal detail -->
<div class="modal fade" id="formDetailTamu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Pesan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="user"method="post" action="" enctype="multipart/form-data">
            
                    <div class="form-group">
                        <textarea class="form-control " id="PesanTamu" name="PesanTamu" rows="20" readonly></textarea>
                    </div>

                    
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit" >Tandai Telah Dibaca</button>
            </div>
        </form>
        </div>
    </div>
</div>