<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('barang_keluar/create'),'Create', 'class="btn btn-success"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('barang_keluar/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('barang_keluar'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Kode Barang</th>
        <th>Tgl Keluar</th>
        <th>Jumlah</th>
        <th>Action</th>
            </tr><?php
            foreach ($barang_keluar_data as $barang_keluar)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $barang_keluar->kode_barang ?></td>
            <td><?php echo $barang_keluar->tgl_keluar ?></td>
            <td><?php echo $barang_keluar->jumlah ?></td>
            <td style="text-align:center" width="200px">
                <a href="barang_keluar/update/<?php echo $barang_keluar->id_barang_keluar ?>" class="btn btn-info btn-sm">update</a>
				<a href="barang_keluar/delete/<?php echo $barang_keluar->id_barang_keluar ?>" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">hapus</a>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>